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
        <ul class="tab-navstyle2 clearfix mt20">
            <li class="pct50"><a href="javascript:void(0);">企业热点</a></li>
            <li class="pct50"><a href="javascript:void(0);">行业动态</a></li>
        </ul>
        <div class="current mt20">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff9b203b2ef29054a11af4fde865114b&action=lists&catid=15&num=10&order=inputtime+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'15','order'=>'inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'15','order'=>'inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="news-box">
                <h2><?php echo $r['title'];?></h2>
                <p class="news-time"><?php echo date('Y-m-d',$r[inputtime]);?></p>
                <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/>
                <p class="news-desc"><?php echo str_cut($r[description],300,'...');?></p>
                <a class="news-artdetail" href="<?php echo $r['url'];?>">查看全文</a>
            </div>
            <?php $n++;}unset($n); ?>
            <div id="pages" class="text-c"><?php echo $pages;?></div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>


        <div class="mt20">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9b5430fc7d75cf8b10474a2c0627221f&action=lists&catid=16&num=10&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'inputtime DESC','limit'=>'10',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="news-box">
                <h2><?php echo $r['title'];?></h2>
                <p class="news-time"><?php echo date('Y-m-d',$r[inputtime]);?></p>
                <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/>
                <p class="news-desc"><?php echo str_cut($r[description],300,'...');?></p>
                <a class="news-artdetail" href="<?php echo $r['url'];?>">查看全文</a>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>

<?php include template("content","footer"); ?>