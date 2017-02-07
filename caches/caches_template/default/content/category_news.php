<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


<script type="text/javascript" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/news-action.js"></script>
<div class="banner">
    <div class="banner-box">
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=582dd25640b84eba3f7d608b2a9d232f&action=lists&catid=25&num=1&where=%60pcatid%60%3D8&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','where'=>'`pcatid`=8','order'=>'listorder ASC','limit'=>'1',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"/></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
<div class="news">
    <div class="wrapper" id="js-newstype">
        <ul class="tab-navstyle2 clearfix mt20" id="nav_news">
            <?php $n=1;if(is_array(subcat($top_parentid))) foreach(subcat($top_parentid) AS $r) { ?>
            <?php $num++?>
            <?php if(($top_parentid==$catid && $num==1) || $catid==$r[catid]) { ?><li  class="pct50 current">
            <?php } else { ?><li class="pct50">
            <?php } ?>
            <a href="javascript:void(0);"><?php echo $r['catname'];?></a>
         </li>
            <?php $n++;}unset($n); ?>
        </ul>


        <?php $n=1;if(is_array(subcat($top_parentid))) foreach(subcat($top_parentid) AS $t) { ?>
        <?php $numitem++?>
        <div class="current mt20">
            <?php if(($top_parentid==$catid && $numitem==1) || $catid==$r[catid]) { ?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d6600b386617d5f55f0fa3afb9e40b76&action=lists&catid=%24t%5Bcatid%5D&num=10&order=inputtime+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$t[catid],'order'=>'inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$t[catid],'order'=>'inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php } else { ?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a53077a9c7dd397faf6f06b292af61e6&action=lists&catid=%24t%5Bcatid%5D&num=10&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$t[catid],'order'=>'inputtime DESC','limit'=>'10',));}?>
            <?php } ?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="news-box-item">
                <a href="<?php echo $r['url'];?>"><h2><?php echo $r['title'];?></h2></a>
                <p><span class="news-time"><?php echo date('Y-m-d',$r[inputtime]);?></span></p>
                 <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/></a>
                 <a href="<?php echo $r['url'];?>"><p class="news-desc"><?php echo str_cut($r[description],300,'...');?></p></a>
                <a class="news-artdetail" href="<?php echo $r['url'];?>">查看全文</a>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(($top_parentid==$catid && $numitem==1) || $catid==$r[catid]) { ?>
                <div id="pages" class="text-c"><?php echo $pages;?></div>
            <?php } ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <?php $n++;}unset($n); ?>


    </div>
</div>

<script>
    $(function(){
        var li_num = 0;
        $("#nav_news li").each(function(){ li_num++; });
        var width_li = 100/ li_num;
        $("#nav_news li").css("width",width_li+"%");
    })();

</script>

<?php include template("content","footer"); ?>