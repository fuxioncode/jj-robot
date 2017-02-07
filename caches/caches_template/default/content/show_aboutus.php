<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="fix_content">
    <div class="banner">
        <div class="banner-box">
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1916a0aadd3e4027f3beec2bd02b9bb9&action=lists&catid=25&num=1&where=%60pcatid%60%3D9&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','where'=>'`pcatid`=9','order'=>'listorder ASC','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"/></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
    <div class="wrapper ">
        <div  style="padding: 20px 0px;">
            <div class="l">
                <a href="<?php echo siteurl($siteid);?>">首页</a>
                <span>/</span>
                <?php echo catpos($catid,' / ');?>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1325adbfd32724bb0030a2bb5eb2a63c&action=lists&catid=9&num=6&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php if($v[id]==$id ) { ?><?php echo $v['title'];?> <?php } ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="r">
                <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1325adbfd32724bb0030a2bb5eb2a63c&action=lists&catid=9&num=6&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li style="display:inline-block;">
                    <?php if($catid==9&&$v[id]==$id ) { ?><a href="<?php echo $v['url'];?>" style="color: #0000ee"><?php echo $v['title'];?></a>
                    <?php } else { ?><a href="<?php echo $v['url'];?>" style="color: #000000"><?php echo $v['title'];?></a> <?php } ?>
                    </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <li style="display:inline-block;">
                        <?php if($catid==29 ) { ?><a href="/index.php?m=content&c=index&a=lists&catid=29" style="color: #0000ee">员工风采</a> <?php } ?>
                        <?php if($catid!=29 ) { ?><a href="/index.php?m=content&c=index&a=lists&catid=29" style="color: #000000">员工风采</a> <?php } ?>
                    </li>
                </ul>
            </div>
        </div>

        <hr style="border-bottom:1px solid #9fa1a0;clear:both;"/>

        <div class="product-content"  style="margin: 20px;">
            <div class="comInfo p10">
                <?php echo $content;?>
            </div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>