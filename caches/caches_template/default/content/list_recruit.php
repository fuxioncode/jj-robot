<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="banner">
    <div class="banner-box">
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9f66f74fb7a3b208e1c38990c0c2ad5a&action=lists&catid=25&num=1&where=%60pcatid%60%3D20&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','where'=>'`pcatid`=20','order'=>'listorder ASC','limit'=>'1',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"/></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>

<div class="recruit mt20">
    <div class="wrapper">
        <div class="title1">
            <h2>人才招聘</h2>
        </div>
        <div class="recruit-box">

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="recruit-item">
                <h2><?php echo $r['title'];?></h2>
                <p class="mt15">
                    <span>招聘人数: <span class="fb"><?php echo $r['recruit_number'];?></span></span>
                    <span class="ml30">专业: <span class="fb"><?php echo $r['professional'];?></span></span>
                </p>
                <div class="clearfix mt20">
                    <span class="recruit-caption">技能要求:</span>
                    <div class="recruit-content">
                        <?php echo $r['skills'];?>
                    </div>
                </div>
                <div class="clearfix mt20">
                    <span class="recruit-caption">工作内容:</span>
                    <div class="recruit-content">
                        <?php echo $r['work_content'];?>
                    </div>
                </div>
            </div>

            <?php $n++;}unset($n); ?>
            <div id="pages" class="text-c"><?php echo $pages;?></div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>


<?php include template("content","footer"); ?>