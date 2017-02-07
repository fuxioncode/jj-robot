/**
 * Created by ltk on 2015/6/11.
 */
;
$(function(){
    function fixedFooter(){
        var win = $(window);
        var body = $('body');
        var footer = $('.footer');

        if(win.height() > body.height()){
            footer.css({
                position:'fixed',
                left:0,
                bottom:0,
                width:win.width()+'px'
            });
        }else{
            footer.css({
                position:'static',
                width:''
            });
        }

    }

    $(window).on('load resize',fixedFooter);
});
