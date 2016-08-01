<?php
// 数据库链接相关信息
$dbhost="192.168.1.132";
$dbname="keyrate";
$dbuser="root";
$dbpwd="pwd";
// 链接字符串
$db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser, $dbpwd);
