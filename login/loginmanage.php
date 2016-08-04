<?php
if ($_SESSION['userid']==null) {
  header("Location: ../login/login.php");
}
?>
<?php
//给浏览器的HTML头 设置为utf-8格式
header('Content-type:text/html;charset=utf-8');
//数据库连接 使用dbo方式
include "../db/config.php";
//新建变量，并将指赋为在Post中拿到的指
$username = $_POST['username'];
$password = $_POST['password'];


$connect = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
if(!$connect){
  die('数据库连接失败，错误信息：'.mysqli_connect_error());
}
//sql语句
$sql = "select id,username from user where username='".$username."' and password='".$password."' limit 1";
$query = mysqli_query($connect, $sql);
session_start();
while($result = mysqli_fetch_array($query)){
$userid = $result["id"];
}
$_SESSION['userid']=$userid;
echo "$userid";
echo "$insert";
if($query){
  echo $sql;
    //登录成功
    header("Location: ../update/update.php");
    exit;
} else {
    echo ('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
    exit;
  }

?>
