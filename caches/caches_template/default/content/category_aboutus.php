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

<div class="us mt10">
    <div class="wrapper_content mt20">
        <div class="tab" id="js-about">
            <ul class="clearfix tab-navstyle2">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=16833ba33db78ab1a7fe0b5dca49a2be&action=lists&catid=%24catid&num=4&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder','limit'=>'4',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php $num++?>
                <?php if($num==1 ) { ?><li class="current pct20"><?php } ?>
                <?php if($num!=1 ) { ?><li class="pct20"><?php } ?>
                    <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="pct20">
                    <a href="/index.php?m=content&c=index&a=lists&catid=29">员工风采</a>
                </li>
            </ul>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5e7aef0b7af1ffad2825bcfca027793f&action=lists&catid=%24catid&num=4&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php $num_content++?>
            <?php if($num1==1 ) { ?><div class="tab-boxstyle2 current mt50 mb50 block-style1"> <?php } ?>
            <?php if($num1!=1 ) { ?><div class="tab-boxstyle2 mt50 mb50 block-style1"> <?php } ?>
                <div class="comInfo p10">
                    <?php echo $r['desc'];?>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="tab-boxstyle2 mt15 block-style1">
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

        </div>
    </div>
</div>

</div>

<?php include template("content","footer"); ?>