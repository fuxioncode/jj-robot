<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<script type="text/javascript" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/imageflow.js"></script>

<div class="content fix_content" style="margin:0px auto;">
    <div class="wrapper">
        <?php if(!empty($thumb_banner)) { ?>
        <div id="LoopDiv">
            <input id="S_Num" type="hidden" value="2" />
            <div id="starsIF" class="imageflow">

                <?php $n=1; if(is_array($thumb_banner)) foreach($thumb_banner AS $pic_k => $r) { ?>
                <img src="<?php echo $r['url'];?>" longdesc="javascript:void(0);" width="240" height="200" alt="<?php echo $r['title'];?>" />
                <?php $n++;}unset($n); ?>
                <!--
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=638743a36351cb85413edbb238d83449&action=lists&catid=%24CATEGORYS%5B%24catid%5D%5B%27parentid%27%5D&num=20&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$CATEGORYS[$catid]['parentid'],'order'=>'listorder','limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <img src="<?php echo $v['thumb'];?>" longdesc="<?php echo $v['url'];?>" width="240" height="200" alt="<?php echo $v['title'];?>" />
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                -->
            </div>
        </div>
        <?php } ?>
        <div >
            <div class="l nav_second"  style="margin-top: 20px">
                <a href="<?php echo siteurl($siteid);?>">首页/</a>
                <?php echo catpos($catid,'/');?>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=05fc3d67d75b561302768d4a7e5c79f8&action=lists&catid=%24catid&num=6&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php if($v[id]==$id ) { ?><?php echo $v['title'];?><?php } ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>


        <div style="border-bottom:1px solid #d7d7d5;clear:both;"></div>

        <div class="product-content"  style="margin-top: 15px; ">
            <?php if($taobaolink!="") { ?>
            <div>
                <a class="taobaolink" href="<?php echo $taobaolink;?>" target="_blank">淘宝链接</a>
            </div>
            <?php } ?>

            <?php if($videosrc!="") { ?> <p style="text-align: center"><?php echo $videosrc;?></p>
            <?php } ?>

            <div class="comInfo" style="text-align: center">
                <?php echo $introductions;?>
            </div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>