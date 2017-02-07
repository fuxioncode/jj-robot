<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="banner">
    <div class="banner-box">
        <ul  >
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1e1f5624be7f4cf179b0cf4d0f78c9fb&action=lists&catid=25&num=2&where=%60pcatid%60%3D6+OR+%60pcatid%60%3D7+&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','where'=>'`pcatid`=6 OR `pcatid`=7 ','order'=>'listorder ASC','limit'=>'2',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <?php if($v[pcatid]==$top_parentid) { ?>
            <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"/></a></li>
            <?php } ?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
<div class="showcase wrapper showproduct-item">
    <ul class="showcase-nav clearfix mt20" id="nav_product">
        <?php $n=1;if(is_array(subcat($top_parentid))) foreach(subcat($top_parentid) AS $r) { ?>
            <li><a href="javascript:void(0);"><?php echo $r['catname'];?></a></li>
        <?php $n++;}unset($n); ?>
    </ul>

        <div class="showcase-box">
            <?php $n=1;if(is_array(subcat($top_parentid))) foreach(subcat($top_parentid) AS $r) { ?>
            <div class="showcase-con">
                <ul class="prod-show clearfix">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=02f467c45e53f3e5a4a1375f91c93d4b&action=lists&catid=%24r%5Bcatid%5D&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li class="item"><a href="<?php echo $v['url'];?>">
                        <div><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"/></div>
                        <div class="item-desc">
                            <h3>·<?php echo $v['title'];?>·</h3>
                        </div>
                    </a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <?php $n++;}unset($n); ?>
        </div>
</div>



<script>
    $(function(){
        var li_num = 0;
        $("#nav_product li").each(function(){ li_num++; });
        var width_li = 100/ li_num;
        $("#nav_product li").css("width",width_li+"%");

        $.switchBox('.showproduct-item .showcase-nav>li','.showproduct-item .showcase-con',{
            animationType:'slide'
        });
    });

</script>

<?php include template("content","footer"); ?>