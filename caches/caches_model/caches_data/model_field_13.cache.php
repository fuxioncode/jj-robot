<?php
return array (
  'catid' => 
  array (
    'fieldid' => '135',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'catid',
    'name' => '栏目',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '6',
    'pattern' => '/^[0-9]{1,6}$/',
    'errortips' => '请选择栏目',
    'formtype' => 'catid',
    'setting' => 'array (
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '-99',
    'unsetroleids' => '-99',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '1',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '1',
    'disabled' => '0',
    'isomnipotent' => '0',
    'defaultvalue' => '',
  ),
  'typeid' => 
  array (
    'fieldid' => '136',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'typeid',
    'name' => '类别',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'typeid',
    'setting' => 'array (
  \'minnumber\' => \'\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '1',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '5',
    'disabled' => '0',
    'isomnipotent' => '0',
    'minnumber' => '',
    'defaultvalue' => '',
  ),
  'title' => 
  array (
    'fieldid' => '137',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'title',
    'name' => '标题',
    'tips' => '',
    'css' => 'inputtitle',
    'minlength' => '1',
    'maxlength' => '80',
    'pattern' => '',
    'errortips' => '请输入标题',
    'formtype' => 'title',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '1',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '1',
    'listorder' => '7',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'thumb' => 
  array (
    'fieldid' => '142',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'thumb',
    'name' => '主页和列表页_缩略图',
    'tips' => '缩略图显示在主页/ 列表页<br>
图片大小影响主页和列表页面的加载速度。<br>
该图片大小最好调小些，适合首页/列表页展示大小即可<br>',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'image',
    'setting' => 'array (
  \'size\' => \'50\',
  \'defaultvalue\' => \'\',
  \'show_type\' => \'1\',
  \'upload_maxsize\' => \'1024\',
  \'upload_allowext\' => \'jpg|jpeg|gif|png|bmp\',
  \'watermark\' => \'0\',
  \'isselectimage\' => \'1\',
  \'images_width\' => \'\',
  \'images_height\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '9',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '50',
    'defaultvalue' => '',
    'show_type' => '1',
    'upload_maxsize' => '1024',
    'upload_allowext' => 'jpg|jpeg|gif|png|bmp',
    'watermark' => '0',
    'isselectimage' => '1',
    'images_width' => '',
    'images_height' => '',
  ),
  'thumb_banner' => 
  array (
    'fieldid' => '255',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'thumb_banner',
    'name' => '详情_轮播图集',
    'tips' => '轮播图显示在详情页的顶部',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'images',
    'setting' => 'array (
  \'upload_allowext\' => \'gif|jpg|jpeg|png|bmp\',
  \'isselectimage\' => \'1\',
  \'upload_number\' => \'10\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '10',
    'disabled' => '0',
    'isomnipotent' => '0',
    'upload_allowext' => 'gif|jpg|jpeg|png|bmp',
    'isselectimage' => '1',
    'upload_number' => '10',
  ),
  'taobaolink' => 
  array (
    'fieldid' => '257',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'taobaolink',
    'name' => '详情_淘宝链接',
    'tips' => '<br/>淘宝链接显示在详情页面主体内容的右上方
<br/>不填则前台不显示',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'100\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '11',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '100',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'videosrc' => 
  array (
    'fieldid' => '210',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'videosrc',
    'name' => '详情_视频链接',
    'tips' => '视频链接展示在详情页主体内容顶部的视频<br/>',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'editor',
    'setting' => 'array (
  \'toolbar\' => \'basic\',
  \'defaultvalue\' => \'\',
  \'enablekeylink\' => \'0\',
  \'replacenum\' => \'1\',
  \'link_mode\' => \'0\',
  \'enablesaveimage\' => \'0\',
  \'height\' => \'40\',
  \'disabled_page\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '12',
    'disabled' => '0',
    'isomnipotent' => '0',
    'toolbar' => 'basic',
    'defaultvalue' => '',
    'enablekeylink' => '0',
    'replacenum' => '1',
    'link_mode' => '0',
    'enablesaveimage' => '0',
    'height' => '40',
    'disabled_page' => '0',
  ),
  'introductions' => 
  array (
    'fieldid' => '157',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'introductions',
    'name' => '详情_主体内容',
    'tips' => '主体内容显示在详情页面的主体位置',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'editor',
    'setting' => 'array (
  \'toolbar\' => \'full\',
  \'defaultvalue\' => \'\',
  \'enablekeylink\' => \'0\',
  \'replacenum\' => \'1\',
  \'link_mode\' => \'0\',
  \'enablesaveimage\' => \'0\',
  \'height\' => \'200\',
  \'disabled_page\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '13',
    'disabled' => '0',
    'isomnipotent' => '0',
    'toolbar' => 'full',
    'defaultvalue' => '',
    'enablekeylink' => '0',
    'replacenum' => '1',
    'link_mode' => '0',
    'enablesaveimage' => '0',
    'height' => '200',
    'disabled_page' => '0',
  ),
  'updatetime' => 
  array (
    'fieldid' => '140',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'updatetime',
    'name' => '更新时间',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'datetime',
    'setting' => 'array (
  \'dateformat\' => \'int\',
  \'format\' => \'Y-m-d H:i:s\',
  \'defaulttype\' => \'1\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '1',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '21',
    'disabled' => '0',
    'isomnipotent' => '0',
    'dateformat' => 'int',
    'format' => 'Y-m-d H:i:s',
    'defaulttype' => '1',
    'defaultvalue' => '',
  ),
  'relation' => 
  array (
    'fieldid' => '143',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'relation',
    'name' => '相关文章',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'omnipotent',
    'setting' => 'array (
  \'formtext\' => \'<input type=\\\'hidden\\\' name=\\\'info[relation]\\\' id=\\\'relation\\\' value=\\\'{FIELD_VALUE}\\\' style=\\\'50\\\' >
<ul class="list-dot" id="relation_text"></ul>
<div>
<input type=\\\'button\\\' value="添加相关" onclick="omnipotent(\\\'selectid\\\',\\\'?m=content&c=content&a=public_relationlist&modelid={MODELID}\\\',\\\'添加相关文章\\\',1)" class="button" style="width:66px;">
<span class="edit_content">
<input type=\\\'button\\\' value="显示已有" onclick="show_relation({MODELID},{ID})" class="button" style="width:66px;">
</span>
</div>\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '2,6,4,5,1,17,18,7',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '25',
    'disabled' => '0',
    'isomnipotent' => '0',
    'formtext' => '<input type=\'hidden\' name=\'info[relation]\' id=\'relation\' value=\'{FIELD_VALUE}\' style=\'50\' >
<ul class="list-dot" id="relation_text"></ul>
<div>
<input type=\'button\' value="添加相关" onclick="omnipotent(\'selectid\',\'?m=content&c=content&a=public_relationlist&modelid={MODELID}\',\'添加相关文章\',1)" class="button" style="width:66px;">
<span class="edit_content">
<input type=\'button\' value="显示已有" onclick="show_relation({MODELID},{ID})" class="button" style="width:66px;">
</span>
</div>',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
  ),
  'inputtime' => 
  array (
    'fieldid' => '145',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'inputtime',
    'name' => '发布时间',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'datetime',
    'setting' => 'array (
  \'fieldtype\' => \'int\',
  \'format\' => \'Y-m-d H:i:s\',
  \'defaulttype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '29',
    'disabled' => '0',
    'isomnipotent' => '0',
    'fieldtype' => 'int',
    'format' => 'Y-m-d H:i:s',
    'defaulttype' => '0',
  ),
  'url' => 
  array (
    'fieldid' => '148',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'url',
    'name' => 'URL',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '1',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '50',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'listorder' => 
  array (
    'fieldid' => '149',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'listorder',
    'name' => '排序',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '6',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '1',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '51',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'template' => 
  array (
    'fieldid' => '150',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'template',
    'name' => '内容页模板',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '30',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'template',
    'setting' => 'array (
  \'size\' => \'\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '-99',
    'unsetroleids' => '-99',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '53',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '',
    'defaultvalue' => '',
  ),
  'status' => 
  array (
    'fieldid' => '152',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'status',
    'name' => '状态',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '2',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '1',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '55',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'username' => 
  array (
    'fieldid' => '154',
    'modelid' => '13',
    'siteid' => '1',
    'field' => 'username',
    'name' => '用户名',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '20',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '1',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '98',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
);
?>