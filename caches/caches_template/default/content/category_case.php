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
<div class="showcase wrapper">
    <?php $datanav = array(); $databox = array();?>
    <?php $num_all=0;?>
    <?php $page=1?>
    <?php $sql = "SELECT a.`catid`,a.`title`,a.`thumb`,a.`url`,a.`listorder`,b.* from `v9_jj_product` a, `v9_jj_product_data` b where a.`id`=b.`id` ".get_sql_catids($CATEGORYS[$catid][arrchildid])."  order by a.listorder desc ";?>

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8a6856cc5dda5a3f85d290a80fbf74d6&sql=%24sql&num=16&page=%24_GET%5Bpage%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 16;$page = intval($_GET[page]) ? intval($_GET[page]) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM ($sql) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("$sql LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <?php $num_all++?>
        <?php array_push($datanav,$v);?>
        <?php array_push($databox,$v);?>
        <?php if($num_all%4==0) { ?>
            <?php if($num_all/4==1) { ?> <div id='showcase-item1'>
            <?php } elseif ($num_all/4==2) { ?> <div id='showcase-item2'>
            <?php } elseif ($num_all/4==3) { ?> <div id='showcase-item3'>
            <?php } elseif ($num_all/4==4) { ?> <div id='showcase-item4'>
            <?php } else { ?> <div >
            <?php } ?>
                <ul class="showcase-nav clearfix mt45">
                    <?php $num_nav=0?>
                    <?php $n=1;if(is_array($datanav)) foreach($datanav AS $nav) { ?>
                        <li><a href="javascript:void(0);"><?php echo $nav['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <div class="showcase-box">
                    <?php $n=1;if(is_array($databox)) foreach($databox AS $box) { ?>
                    <div class="showcase-con">
                        <ul class="case-show clearfix">
                            <li class="item"><a href="<?php echo $box['url'];?>">
                                <div><img src="<?php echo $box['thumb'];?>" alt="<?php echo $box['title'];?>"/></div>
                            </a></li>
                        </ul>
                    </div>
                    <?php $n++;}unset($n); ?>
                </div>
            </div>

            <?php $datanav = array(); $databox = array();?>
        <?php } ?>
    <?php $n++;}unset($n); ?>
    <!--  最后一行 -->
    <?php if($num_all%4 != 0) { ?>
    <div id='showcase-item'>
        <ul class="showcase-nav clearfix mt45">
            <?php $num_nav=0?>
            <?php $n=1;if(is_array($datanav)) foreach($datanav AS $nav) { ?>
                <li><a href="javascript:void(0);"><?php echo $nav['title'];?></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <div class="showcase-box">
            <?php $n=1;if(is_array($databox)) foreach($databox AS $box) { ?>
            <div class="showcase-con">
                <ul class="case-show clearfix">
                    <li class="item"><a href="<?php echo $box['url'];?>">
                        <div><img src="<?php echo $box['thumb'];?>" alt="<?php echo $box['title'];?>"/></div>
                    </a></li>
                </ul>
            </div>
            <?php $n++;}unset($n); ?>
        </div>
    </div>
    <?php } ?>

  <div id="pages" class="text-c"><?php echo $pages;?></div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>




</div>



<script>
    $(function(){

        var li_num = 0;
        $("#showcase-item>.showcase-nav li").each(function(){ li_num++; });
        var width_li = 100/ li_num;
        $("#showcase-item>.showcase-nav li").css("width",width_li+"%");

        //
        $.switchBox('#showcase-item1>.showcase-nav>li','#showcase-item1 .showcase-con',{
            animationType:'slide'
        });
        $.switchBox('#showcase-item2>.showcase-nav>li','#showcase-item2 .showcase-con',{
            animationType:'slide'
        });
        $.switchBox('#showcase-item3>.showcase-nav>li','#showcase-item3 .showcase-con',{
            animationType:'slide'
        });
        $.switchBox('#showcase-item4>.showcase-nav>li','#showcase-item4 .showcase-con',{
            animationType:'slide'
        });
        $.switchBox('#showcase-item>.showcase-nav>li','#showcase-item .showcase-con',{
            animationType:'slide'
        });
    });

</script>

<?php include template("content","footer"); ?>