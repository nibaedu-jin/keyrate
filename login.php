<?php
//给浏览器的HTML头 设置为utf-8格式
header('Content-type:text/html;charset=utf-8');

//数据库连接 使用pdo方式
$id = new PDO("mysql:host=localhost;",'root','pwd')or die("数据库链接失败");
$id -> query("set names utf8");
$id -> query("use lt");

//新建变量，并将指赋为在Post中拿到的指
$username = $_POST["username"];
$password = $_POST["password"];

//sql语句
$sql = "insert into user (username,pwd,email) VALUES ('$username', '$password', '$email')";
$result = $id->query($sql) or die('数据库连接失败，错误信息：'.mysqli_connect_error());

if($result) {
  // 登录成功
  // 上传
}else {
  // 登录失败
  // 返回登录
}
?>
