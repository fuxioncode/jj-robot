<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */

function getNewsContent($id){

    session_start();

    $log = 'log.txt';

    if(!$handle = fopen($log,"a+")){ echo '日志文件打开失败'; exit(); }

    if(!fwrite($handle,session_id().chr(13))){ echo '数据写入失败'; exit(); }

    fclose($handle);

    $file = file_get_contents($log);

    $content = explode(chr(13),$file);

    echo "访问统计：".(count($content)-1)."";

}
?>