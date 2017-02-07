/**
* data:2015-4-29 11:45:52	
* author:ltk
* desc:tool for common task
**/
;
jQuery.extend({ 
	makeTab:function(target,opt){
        if(typeof(target) == 'string') target = $(target);
        var lis = target.children('ul').find('li');
        var divs = target.children('div');

        var defCurIndex = 0;
        $.each(lis, function(i, n){
            if($(n).hasClass('current')) {
                defCurIndex = i;
            }
        });
		var def = {
			lastIsMore:false,//最后一个li是否为更多
			showIndex:defCurIndex,//默认显示第几个标签
			triggerEvent:'mouseenter',//以什么事件触发tab切换
			activeClass:'current'//以什么样式挂到li上
		};

		var setting={};

		$.extend(setting,def,opt);



		if(setting.lastIsMore){
			lis.last().attr('lastismore','true');
			lis = target.children('ul').find('li:not([lastismore])');
		}

		lis.on(setting.triggerEvent,function(){ 

			var li = $(this);
			var index = lis.index(li);

			lis.removeClass(setting.activeClass);
			li.addClass(setting.activeClass);

			divs.hide().eq(index).fadeIn();

		});

		lis.eq(setting.showIndex).trigger(setting.triggerEvent);

	}
});