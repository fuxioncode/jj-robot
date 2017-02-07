<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="newsdetail">
    <div class="wrapper">
        <div class="newsdetail-box clearfix">
            <div class="newsdetail-art"  style="width: 100%">
                <div class="newscrom nav_second">
                    <a href="<?php echo siteurl($siteid);?>">首页/</a>
                    <?php echo catpos($catid,'/ ');?>
                    <a href="javascript:void(0);">正文</a>
                </div>
                <div class="news-box newsdetail-content" style="width: 90%; margin: auto;" >
                    <h2 class="news_title"><?php echo $title;?></h2>
                    <p  class="news_time"><span class="news-time"><?php echo $inputtime;?></span></p>
                    <p class="news-desc" >
                        <?php echo $content;?>
                    </p>
                </div>
                <div style="border-bottom: 1px solid #d9d9d9;"></div>
                <div class="mt30 newsdetail-artctr">
                    <p>上一篇:<a class="prev-art" href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></p>

                    <p>下一篇:<a class="next-art" href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></p>
                </div>
            </div>
<!--
            <div class="news-latest">
                <div class="newscrom">
                    <span class="nav_second ml20"><?php echo catname($catid);?></span>
                </div>
                <ul class="news-lastest-list">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=33f7f61cabec63508058be2ece9ecc10&action=lists&catid=15&num=6&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'inputtime DESC','limit'=>'6',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/>
                        <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <div class="tr">
                    <a class="news-lastlist-more" href="/index.php?m=content&c=index&a=lists&catid=8">更多动态</a>
                </div>
            </div>
            -->
        </div>
    </div>
</div>


<?php include template("content","footer"); ?>