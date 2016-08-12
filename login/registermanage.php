<?php
header('Content-type:text/html;charset=utf-8');
//数据库连接
include "../db/config.php";
$username = $_POST['username'];
$password = $_POST['password'];

$connect = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
if(!$connect){
  die('数据库连接失败，错误信息：'.mysqli_connect_error());
}
//sql语句
$sql = "insert into user(username,password) values ('".$username."','".$password."')";
//echo "$sql";
$query = mysqli_query($connect, $sql);
header("Location: login.html")

 ?>
