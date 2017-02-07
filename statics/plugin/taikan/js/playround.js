// JavaScript Document
(function () {

    $.extend({

        playround: function (BoxId, opt) {
            var Stlye =new Object();
            Stlye.SlideBox={width:"100%",height:"100%",position:"relative"};
            Stlye.SlideUl = {width:"100%",height:"100%",position:"relative"};
            Stlye.SlideLi = {position:"absolute",zIndex:1,left:0,top:0,opacity: 0, filter: "alpha(opacity=0)"};
            Stlye.BtnsUl = {position:"absolute",bottom:"13px",right:"25px",zIndex:3};
            Stlye.BtnsLi={float:"left",paddingLeft:"8px"};
            Stlye.IconSpan={backgroundColor:"#9A1803",borderRadius:"5px",cursor:"pointer",display:"block",height:"10px",width:"10px",textIndent:"10em",overflow:"hidden"};
            Stlye.overSpan={backgroundColor:"#FFB606"};
            if(opt) Stlye=$.extend(Stlye,opt);

            var SetBox = "<div class='SlideBox'></div>";
            var SetUl = "<ul class='BtnsUl'></ul>";
            var SetLi;
            var LiLeng;
            function CreateCistern(BoxId) {
                var removeNote=$(BoxId + ">ul").first().remove();
                $(BoxId).append(SetBox);
                $(".SlideBox").append(removeNote);
                var GetLi = $(".SlideBox>ul").first().find("li");
                LiLeng = GetLi.length;
                $(".SlideBox").css(Stlye.SlideBox);
                $(".SlideBox>ul:first-child").css(Stlye.SlideUl);
                GetLi.css(Stlye.SlideLi);
                GetLi.first().css({ zIndex: 2, opacity: 1, filter: "alpha(opacity=100)" });

                if (LiLeng > 1) {
                    $(".SlideBox").append(SetUl);
                    if ($(".BtnsUl").length != 0) {
                        for (i = 1; i <= LiLeng; i++) {
                            SetLi = "<li><span>" + i + "</span></li>";
                            $(".BtnsUl").append(SetLi);
                        }
                    }
                    $(".BtnsUl").css(Stlye.BtnsUl);
                    $(".BtnsUl>li").css(Stlye.BtnsLi);
                    $(".BtnsUl>li>span").css(Stlye.IconSpan);
                    $(".BtnsUl>li>span").first().css(Stlye.overSpan);
                }

            }

            function Switch() {
                var Speed = 400;
                var Rate = 5000;
                var IM = 0;
                function Change(IM) {
                    var SN = 0;
                    $(".SlideBox>ul:first-child>li").each(function (index, vall) {
                        if ($(this).css("z-index") == 2) SN = index;
                    });
                    $(".SlideBox>ul:first-child>li").eq(SN).css({ zIndex: 1 }).fadeTo(Speed, 0);
                    $(".SlideBox>ul:first-child>li").eq(IM).fadeTo(Speed, 1).css({ zIndex: 2 });
                    $(".BtnsUl>li>span").css(Stlye.IconSpan);
                    $(".BtnsUl>li>span").eq(IM).css(Stlye.overSpan);
                }
                function PlayImg() {
                    IM++
                    if (IM > LiLeng - 1) IM = 0;
                    Change(IM);
                }
                var Play = setInterval(PlayImg, Rate);

                var Delay;
                var DelayTime=300;
                var Tihs;
                $(".BtnsUl>li>span").hover(function () {
                    Tihs=$(this);
                    if (Delay) clearTimeout(Delay);
                    Delay = setTimeout(function () {
                          clearInterval(Play);
                          if (Tihs.parent().index() != IM) {
                                IM = Tihs.parent().index();
                                Change(IM);
                           }
                    }, DelayTime);
                }, function () {
                    if (Delay) clearTimeout(Delay);
                    Delay = setTimeout(function () {
                          clearInterval(Play);
                          Play = setInterval(PlayImg, Rate);
                    }, DelayTime);
                    
                });
            }

            function RunSlideshow(BoxId) {
                CreateCistern(BoxId);
                if (LiLeng > 1) Switch();
            }

            RunSlideshow(BoxId);
        },
        
        AcrossSwitch: function (RollBox, Left, Right, Step, Auto ,Speed,Nav) {
            var ThisStep = 1;       //切换个数
            var ThisAuto = false;   //是否自动切换
            var ThisSpeed = 500;   //播放一次动作速度
            var PlayTime = 5000;    //自动切换速度
            var RollUL = $(RollBox).find(">ul");
            var RollBoxLi = RollUL.find(">li");
            var LiWidth = RollBoxLi.outerWidth(true);
            var LiLength = RollBoxLi.length;
            RollUL.width(LiWidth * RollBoxLi.length);
            if (arguments[3]) ThisStep = Step;
            if (arguments[4]) ThisAuto = Auto;
            if (arguments[5]) ThisSpeed = Speed;
            var MoveSize = LiWidth ;

            var i = 0;

            var cur = 0;

            /*左右切换*/
            function LeftRoll() {
                for (i = 0; i < Step; i++) {
                    RollUL.find(">li:last").prependTo(RollUL);
                }
                RollUL.css({ "margin-left": -MoveSize });
                RollUL.animate({ "margin-left": "0px" }, ThisSpeed);

                cur--;
                if(cur<0){
                    cur = RollBoxLi.length-1;
                }
                SetNav();
            }
            function RightRoll() {
                RollUL.animate({ "margin-left": -MoveSize }, ThisSpeed, function () {
                    for (i = 0; i < Step; i++) {
                        RollUL.find(">li:first").appendTo(RollUL);
                    }
                    RollUL.css({ "margin-left": "0px" });
                });

                cur++;
                if(cur>=RollBoxLi.length){
                    cur = 0;
                }
                SetNav();
            }

            function SetNav(){
                if(Nav){
                    Nav = $(Nav);
                    var NavLis = Nav.find('li');
                    NavLis.removeClass('current').eq(cur).addClass('current');
                }
            }

            $(Right).click(function () {
                RightRoll();
            });

            $(Left).click(function () {
                LeftRoll();
            });


            var imgs = $(RollBox).find('a>img');
            var firstImg = imgs.eq(0);

            RollBoxLi.width( $(RollBox).width());
            $(window).on('resize load',function(e){
                RollBoxLi.width( $(RollBox).width());
                var h = firstImg.height();
                imgs.filter(':gt(0)').height(h);
                MoveSize = RollUL.find('>li').width() ;
                RollUL.width($(RollBox).width() * RollBoxLi.length);
            }).trigger('resize');

            if (ThisAuto) {
                var AutoPlay = setInterval(function () { RightRoll() }, PlayTime);
                $(Right).hover(function () {
                    clearInterval(AutoPlay);
                }, function () {
                    AutoPlay = setInterval(function () { RightRoll() }, PlayTime);
                });
                $(Left).hover(function () {
                    clearInterval(AutoPlay);
                }, function () {
                    AutoPlay = setInterval(function () { RightRoll() }, PlayTime);
                });
            }
        }
    });

})(jQuery);
