/**
 * Created by ltk.
 * desc:for product case page.
 */

;
$(function(){



    $.extend({
        switchBox:function(btns,boxes,opt,event){
            if(!event) {
                event = 'click';
            }
            var defCurIndex = 0;
            $.each($(btns), function(i, n){
                if($(n).hasClass('current')) {
                    defCurIndex = i;
                }
            });

            var def={
                    currentClass:'current',  //控制当前的类
                    defShowIndex:defCurIndex,  //默认显示第几个盒子
                    triggerEvent:event,  //触发的事件
                    animationType:'fade'  //fade slide scale
                },
                setting={};

            $.extend(setting,def,opt);

            //检查参数
            if(typeof(btns) == 'string'){
                btns = $(btns);
            }
            if(typeof(boxes) == 'string'){
                boxes = $(boxes);
            }

            var fadeAnimate = function(){
                btns.on(setting.triggerEvent,function(e){
                    var btn = $(this),
                        idx = btns.index(btn);
                    if(!btn.hasClass(setting.currentClass)) {
                        btns.removeClass(setting.currentClass);
                        btn.addClass(setting.currentClass);
                        boxes.fadeOut(100).eq(idx).fadeIn(150);
                    }
                });
            };

            var slideAnimate = function(){
                btns.on(setting.triggerEvent,function(e){
                    var btn = $(this),
                        idx = btns.index(btn);
                    if(!btn.hasClass(setting.currentClass)) {
                        btns.removeClass(setting.currentClass);
                        btn.addClass(setting.currentClass);
                        boxes.slideUp().eq(idx).slideDown();
                    }
                });
            };

            var scaleAnimate = function(){
                btns.on(setting.triggerEvent,function(e){
                    var btn = $(this),
                        idx = btns.index(btn);
                    if(!btn.hasClass(setting.currentClass)) {
                        btns.removeClass(setting.currentClass);
                        btn.addClass(setting.currentClass);
                        boxes.hide(300).eq(idx).show(300);
                    }
                });
            };

            switch(setting.animationType){
                case 'fade':{
                    fadeAnimate();
                    break;
                }
                case 'slide':{
                    slideAnimate();
                    break;
                }
                case 'scale':{
                    scaleAnimate();
                    break;
                }
                default:{
                    fadeAnimate();
                    break;
                }
            }
            btns.eq(setting.defShowIndex).trigger(setting.triggerEvent);
        }
    });


});
