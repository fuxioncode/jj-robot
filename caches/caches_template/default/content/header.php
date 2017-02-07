<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>今甲官网</title>
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGIN_STATICS_PATH;?>taikan/css/basic.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGIN_STATICS_PATH;?>taikan/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGIN_STATICS_PATH;?>taikan/css/imageflow.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGIN_STATICS_PATH;?>taikan/css/zzsc.css"/>
    <script type="text/javascript" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
    <script type="text/javascript" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/playround.js"></script>
    <script type="text/javascript" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/tool.js"></script>
    <script type="text/javascript" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/showcase.js"></script>
    <script type="text/javascript" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/js/about-action.js"></script>

    <!-- 百度统计代码 start -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?76fd46d81e3217425fd0e7f8a76aa90b";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- 百度统计代码 end -->

</head>
<body>
    <div class="header">
        <div class="wrapper">
            <div class="logo l">
                <img class="l" src="<?php echo PLUGIN_STATICS_PATH;?>taikan/images/logo.png" alt="今甲官网"/>
            </div>
            <ul class="nav r">
                <?php if($catid=="" ) { ?><li class="current"><?php } else { ?><li><?php } ?><a href="<?php echo siteurl($siteid);?>">首页</a></li>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <?php $num_sub = 0 ?>
                        <?php $n=1;if(is_array(subcat($r[catid]))) foreach(subcat($r[catid]) AS $subr) { ?>
                            <?php $num_sub++ ?>
                        <?php $n++;}unset($n); ?>

                        <?php if(($r[catid]==$top_parentid || $r[catid]==$catid) && $num_sub>0) { ?><li class="current nav-hassub"><?php } ?>
                        <?php if(($r[catid]==$top_parentid || $r[catid]==$catid) && $num_sub==0) { ?><li class="current"><?php } ?>
                        <?php if($r[catid]!=$top_parentid && $r[catid]!=$catid && $num_sub>0) { ?><li class="nav-hassub"><?php } ?>
                        <?php if($r[catid]!=$top_parentid && $r[catid]!=$catid && $num_sub==0) { ?><li class=""><?php } ?>
                            <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                            <?php if($num_sub>0) { ?>
                            <ul class="sub-nav">
                                <?php $n=1;if(is_array(subcat($r[catid]))) foreach(subcat($r[catid]) AS $subr) { ?>
                                <li><a href="<?php echo $subr['url'];?>"><?php echo $subr['catname'];?></a></li>
                                <?php $n++;}unset($n); ?>
                            </ul>
                            <?php } ?>
                        </li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
        </div>
    </div>