<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="fix_content">
    <div class="banner">
        <div class="banner-box">
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dfe32ad4477bcdbe40d875ee4e0e2f05&action=lists&catid=25&num=1&where=%60pcatid%60%3D21&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','where'=>'`pcatid`=21','order'=>'listorder ASC','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"/></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
    <div class="wrapper  pt50 clearfix pb50">
        <div id="dituContent"></div>
        <div class="l contact-info">
            <p>
                <?php echo $content;?>
            </p>
        </div>
    </div>
</div>


<?php include template("content","footer"); ?>
<script src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/contact-action.js"></script>