<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

    <div class="looppic">
        <div class="looppic-box">
            <div class="looppic-show">
                <ul class="looppic-imgs clearfix">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=712f8fa642119f45724f22f92f347af0&action=lists&catid=25&num=5&where=%60pcatid%60%3D%270%27&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','where'=>'`pcatid`=\'0\'','order'=>'listorder DESC','limit'=>'5',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"/></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <a class="looppic-left" href="javascript:void(0);"></a>
            <a class="looppic-right" href="javascript:void(0);"></a>
            <ul class="looppic-nav dn">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7169e4d722b3a0122a6430267d32c6b7&action=lists&catid=25&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','limit'=>'5',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>

    <div class="prod pt30">
        <div class="wrapper">
            <div class="title1 clearfix">
                <h2 class="l">产品中心</h2>
                <a class="more-detail r" href="/index.php?m=content&c=index&a=lists&catid=6;">更多产品</a>
            </div>
            <div class="tab" id="js-prod">
                <ul class="tab-navstyle1 clearfix" id="ul_product_title">
                    <?php $n=1;if(is_array(subcat(6))) foreach(subcat(6) AS $r) { ?>
                    <?php $num_product++?>
                    <?php if($num_product==1) { ?> <li class="current pct20"> <?php } ?>
                    <?php if($num_product!=1) { ?> <li class="pct20"> <?php } ?>
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php $n=1;if(is_array(subcat(6))) foreach(subcat(6) AS $r) { ?>
                <div class="prod-box">
                    <ul class="prod-show clearfix">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c4dad4d30b345d787474c725e6064907&action=lists&catid=%24r%5Bcatid%5D&num=3&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder','limit'=>'3',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"/>
                            <div class="item-desc">
                                <h3>·<?php echo $v['title'];?>·</h3>
                            </div>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                    <!--
                    <div class="pagination-style1 tr">
                        <a class="first-page" href="javascript:;">首页</a>
                        <span class="current">1</span>
                        <a href="javascript:;">2</a>
                        <a href="javascript:;">3</a>
                        <span class="pagination-style1more">...</span>
                        <a href="javascript:;">7</a>
                        <a class="last-page" href="javascript:;">末页</a>
                    </div>
                    -->
                </div>
                <?php $n++;}unset($n); ?>
            </div>
        </div>
    </div>

    <div class="typicalcase mt30">
        <div class="wrapper">
            <div class="title1 clearfix">
                <h2 class="l">服务案例</h2>
                <a class="more-detail r" href="/index.php?m=content&c=index&a=lists&catid=7;">更多案例</a>
            </div>
            <?php $datanav = array(); $databox = array();?>
            <?php $num_all=0;?>
            <?php $sql = "SELECT a.`catid`,a.`title`,a.`thumb`,a.`url`,a.`listorder`,b.* from `v9_jj_product` a, `v9_jj_product_data` b where a.`id`=b.`id` ".get_sql_catids($CATEGORYS[7][arrchildid])."  order by a.listorder desc ";?>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d5af8779d75117a98f6299dbefd6cdf7&sql=%24sql&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("$sql LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php $num_all++?>
                <?php array_push($datanav,$v);?>
                <?php array_push($databox,$v);?>
            <?php $n++;}unset($n); ?>
                <div id='showcase-item'>
                    <ul class="showcase-nav clearfix mt20">
                        <?php $num_nav=0?>
                        <?php $n=1;if(is_array($datanav)) foreach($datanav AS $nav) { ?>
                            <li><a href="<?php echo $nav['url'];?>"><?php echo $nav['title'];?></a></li>
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
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </div>

    <div class="us" style="margin-top: 100px;">
        <div class="wrapper">
            <div class="title1">
                <h2>关于我们</h2>
            </div>
            <div class="tab" id="js-about">
                <ul class="clearfix tab-navstyle2">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=826da6eae98fe14e3bca024ea7fac555&action=lists&catid=9&num=4&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder','limit'=>'4',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <?php $num_aboutus++?>
                    <?php if($num_aboutus==1) { ?><li class="current pct20"><?php } ?>
                    <?php if($num_aboutus!=1) { ?><li class="pct20"><?php } ?>
                        <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <li class="pct20">
                        <a href="/index.php?m=content&c=index&a=lists&catid=29">员工风采</a>
                    </li>
                </ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e88e9dbfedf3c62f91c65e5a84d634a2&action=lists&catid=9&num=4&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder','limit'=>'4',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="tab-boxstyle2 current">
                    <div class="comInfo">
                        <div class="comInfo-desc">
                            <?php echo $r['desc'];?>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <!-- 员工风采 -->
                <div class="tab-boxstyle2 mt15">
                    <div class="timeaxis">
                        <?php $nextYear = date("Y") + 1; ?>
                        <div class="timeaxis-box">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=19ba980a09642fb15cb7057809267b0d&action=lists&catid=29&num=10&order=actdate+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'29','order'=>'actdate DESC','limit'=>'10',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <?php if($nextYear != date('Y',$r[actdate]) ) { ?>
                            <?php $nextYear = date('Y',$r[actdate]); ?>
                            <div class="timeaxis-year">
                                <div>
                                    <h3><?php echo date('Y',$r[actdate]);?></h3>
                                    <span></span>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="timeaxis-item clearfix">
                                <div class="timeaxis-date">
                                    <div class="box">
                                        <p class="date"><?php echo date('m.d',$r[actdate]);?></p>
                                        <p class="year"><?php echo date('Y',$r[actdate]);?></p>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="timeaxis-content clearfix">
                                    <a href="<?php echo $r['url'];?>">
                                    <div class="img">
                                        <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/>
                                    </div>
                                    <div class="text">
                                        <h4><?php echo $r['title'];?></h4>
                                        <p><?php echo $r['desc'];?></p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                    </div>
                </div>

                <div class="timeaxis-item clearfix">
                    <div class="timeaxis-date">
                        <div class="box">
                            <p class="date"></p>
                            <p class="year"></p>
                            <span></span>
                        </div>
                    </div>
                    <div class="timeaxis-content clearfix"  style="height:150px; border-bottom:none;">
                    </div>
                </div>
                <div class="timeaxis-item clearfix">
                    <div class="timeaxis-date">
                        <div class="box">
                            <p class="date"></p>
                            <p class="year"></p>
                            <span></span>
                        </div>
                    </div>
                    <div class="timeaxis-content clearfix"  style="height:150px; border-bottom:none;">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="hotspot mt30 clearfix">
        <div class="wrapper">
            <div class="title1 clearfix title1-underline">
                <h2 style="display: inline-block;">新闻资讯</h2>
                <a class="more-detail r" href="/index.php?m=content&c=index&a=lists&catid=15;">更多新闻</a>
            </div>
            <div class="hotspot-list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b1286d0fc026a60f1dcd48fed6fe3be&action=lists&catid=15&num=5&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'inputtime DESC','limit'=>'5',));}?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <div class="hotspot-item-desc">
                            <h4><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h4>
                            <p><?php echo str_cut($r[description],200,'...');?></p>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!--
                <div class="pagination-style2">
                    <a class="first-page" href="javascript:;">首页</a>
                    <span class="current">1</span>
                    <a href="javascript:;">2</a>
                    <a href="javascript:;">3</a>
                    <a href="javascript:;">7</a>
                    <a class="last-page" href="javascript:;">末页</a>
                </div>
-->
            </div>
        </div>

    </div>
    <div class="contact mt30">
        <div class="wrapper  pt20 clearfix pb50">
            <div class="title1 clearfix">
                <h2 style="display: inline-block;">联系我们</h2>
            </div>
            <div  id="dituContent"></div>
            <div class="l contact-info">
                <p>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bb4945072f84bd5f92444115c9dad035&sql=SELECT+%2A+FROM+v9_page+where+catid%3D19\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=19 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?> <?php echo $val['content'];?> <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </p>
            </div>
        </div>
    </div>
<?php include template("content","footer"); ?>

<script>
    $(function(){
        var casedescs = $("#typicalcase .casedesc");
        var maxHeight = 100;
        $.each(casedescs, function(i, n){
            var sHeight = $(n).css("height");
            if(maxHeight<parseInt(sHeight)) {
                maxHeight = parseInt(sHeight);
            }
        });

        $.each(casedescs, function(i, n){
            $(n).css("height",maxHeight+"px");
        });

        //
            var li_num = 0;
            $("#ul_product_title li").each(function(){ li_num++; });
            var width_li = 100/ li_num;
            $("#ul_product_title li").css("width",width_li+"%");
/*
        var li_num = 0;
        $("#ul_case_title li").each(function(){ li_num++; });
        var width_li = 100/ li_num;
        $("#ul_case_title li").css("width",width_li+"%");
*/
        var li_num = 0;
        $("#showcase-item>.showcase-nav li").each(function(){ li_num++; });
        var width_li = 100/ li_num;
        $("#showcase-item>.showcase-nav li").css("width",width_li+"%");


        $.switchBox('#showcase-item>.showcase-nav>li','#showcase-item .showcase-con'
                ,{animationType:'slide'}, 'mouseover');
    });
</script>



