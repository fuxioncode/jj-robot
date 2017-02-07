<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div id="gotop">
    <span></span>
</div>
<script>
    // 回到顶部
    var min_height = 200;
    $(window).scroll(function(){
        //获取窗口的滚动条的垂直位置
        var s = $(window).scrollTop();
        //当窗口的滚动条的垂直位置大于页面的最小高度时，让返回顶部元素渐现，否则渐隐
        if( s > min_height){
            $("#gotop").fadeIn(100);
        }else{
            $("#gotop").fadeOut(200);
        };
    });

    $("#gotop").click(function(){
        document.documentElement.scrollTop = document.body.scrollTop =0;
    });
</script>

<div class="footer">
    <div class="wrapper">
        <div class="qrcode">
            <img src="<?php echo PLUGIN_STATICS_PATH;?>taikan/images/qrcode.jpg" alt="今甲官网"/>
        </div>
        <div class="footer-box clearfix">
            <ul class="clearfix">
                <li>
                    <h4><a href="/index.php?m=content&c=index&a=lists&catid=6">产品中心</a></h4>
                    <ul class="footer-itemcon">
                        <?php $n=1;if(is_array(subcat(6))) foreach(subcat(6) AS $r) { ?>
                        <li><a href="/index.php?m=content&c=index&a=lists&catid=6"><?php echo $r['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </li>
                <li>
                    <h4><a href="/index.php?m=content&c=index&a=lists&catid=7">案例展示</a></h4>
                    <ul class="footer-itemcon">
                        <?php $n=1;if(is_array(subcat(7))) foreach(subcat(7) AS $r) { ?>
                        <li><a href="/index.php?m=content&c=index&a=lists&catid=7"><?php echo $r['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </li>
                <li>
                    <h4><a href="/index.php?m=content&c=index&a=lists&catid=8">新闻资讯</a></h4>
                    <ul class="footer-itemcon">
                        <?php $n=1;if(is_array(subcat(8))) foreach(subcat(8) AS $r) { ?>
                        <li><a href="/index.php?m=content&c=index&a=lists&catid=8"><?php echo $r['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </li>
                <li>
                    <h4><a href="/index.php?m=content&c=index&a=lists&catid=9">关于我们</a></h4>
                    <ul class="footer-itemcon">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9c0d424e662dd350f1a366b74bf5fe6f&action=lists&catid=9&num=3&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder','limit'=>'3',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </li>
                <li>
                    <h4><a href="/index.php?m=content&c=index&a=lists&catid=20">人才招聘</a></h4>
                </li>
                <li>
                    <h4><a href="/index.php?m=content&c=index&a=lists&catid=19">联系我们</a></h4>
                </li>
            </ul>
        </div>
    </div>
    <div class="cpr cb">
        <div class="wrapper">
            <p>© 2015 广州今甲智能科技有限公司. All Right Reserved. 粤ICP备13075618号-1</p>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/index-action.js?a=2"></script>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=B9e663c9b5ae5023988cb912b2dc1778"></script>