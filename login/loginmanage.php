<?php
//给浏览器的HTML头 设置为utf-8格式
header('Content-type:text/html;charset=utf-8');
//数据库连接 使用dbo方式
include "../db/config.php";
//新建变量，并将指赋为在Post中拿到的指
$username = $_POST['username'];
$password = $_POST['password'];
$id= $_GET['id']

//sql语句
$sql = "select username from user where username='".$username."
' and password='".$password."' limit 1";

$result = $db->query($sql) or die('数据库连接失败，错误信息：');

if($result){
  echo $sql;
    //登录成功
    header("Location: ../update/update.php");
    exit;
} else {
    echo ('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
    exit;
  }

?>
