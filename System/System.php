<?php

error_reporting(E_ALL);
header("Content-Type:text/html;charset=utf-8");  //设置系统的输出字符为utf-8
date_default_timezone_set("PRC");    		 //设置时区（中国）
require_once(dirname(__FILE__).'/Core/init.php');

echo md5("altynai");
echo "<hr/>";
echo crypt("altynai",'uu');
echo "<hr/>";
echo sha1("str");
echo "<hr/>";
echo $url = urlencode("顶替顶替");
echo "<hr/>";
echo urldecode($url);
echo "<hr/>";
echo $data = base64_encode("d顶替基栽要  村桂林村村要林要村");
echo "<hr/>";
echo base64_decode($data);
?>