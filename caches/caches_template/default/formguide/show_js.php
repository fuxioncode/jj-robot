<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>

        <div class="">

            <h3 class="title2 pt10">随时欢迎您联系</h3>

            <form name="myform" id="myform" action="?m=formguide&amp;c=index&amp;a=show&amp;formid=15&amp;siteid=1" method="post" onsubmit="return check_cooperation(this);" >
                <p class="pt20">
                    <input id="info_name" name="info[name]" class="pct49" type="text" placeholder="怎么称呼（必填）"/>
                    <input id="info_phone" name="info[phone]" class="pct49 r" type="text" placeholder="您的手机号码（必填）"/>
                </p>
                <p class="pt10">
                    <input id="info_email" name="info[email]" class="pct100" type="text" placeholder="您的电子邮箱"/>
                </p>
                <p class="pt10">
                    <input id="info_company" name="info[company]" class="pct100" type="text" placeholder="贵公司名称"/>
                </p>
                <p class="pt10">
                    <textarea id="info_content"   name="info[content]" class="pct100" id="js-needness" cols="30" rows="10"placeholder="留言内容（必填）"></textarea>
                </p>
                <p class="mt10">
                    <input type="submit" value="提交" name="dosubmit"  id="dosubmit"/>
                    <input  type="button" value="取消" name="cancel" onclick="cooperation();"/> <!-- onclick="cooperation();" -->
                </p>
            </form>
        </div>

<script type="text/javascript">
<!--
	function show_ajax(obj) {
		var keywords = $(obj).text();
		var offset = $(obj).offset();
		var jsonitem = '';
		$.getJSON("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_list&type=keyword&modelid=<?php echo $modelid;?>&id=<?php echo $id;?>&keywords="+encodeURIComponent(keywords),
				function(data){
				var j = 1;
				var string = "<div class='point key-float'><div style='position:relative'><div class='arro'></div>";
				string += "<a href='JavaScript:;' onclick='$(this).parent().parent().remove();' hidefocus='true' class='close'><span>关闭</span></a><div class='contents f12'>";
				if(data!=0) {
				  $.each(data, function(i,item){
					j = i+1;
					jsonitem += "<a href='"+item.url+"' target='_blank'>"+j+"、"+item.title+"</a><BR>";

				  });
					string += jsonitem;
				} else {
					string += '没有找到相关的信息！';
				}
					string += "</div><span class='o1'></span><span class='o2'></span><span class='o3'></span><span class='o4'></span></div></div>";
					$(obj).after(string);
					$('.key-float').mouseover(
						function (){
							$(this).siblings().css({"z-index":0})
							$(this).css({"z-index":1001});
						}
					)
					$(obj).next().css({ "left": +offset.left-100, "top": +offset.top+$(obj).height()+12});
				});
	}

	function add_favorite(title) {
		$.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+title+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				$("#favorite").html('收藏成功');
			} else {
				alert('请登录');
			}
		});
	}

$(function(){
  $('#Article .content img').LoadImage(true, 660, 660,'<?php echo IMG_PATH;?>s_nopic.gif');
})
//-->
</script>
