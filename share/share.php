<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>分享页面</title>
  <link rel="stylesheet" href="../src/css/pure-min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="../src/css/share.css" media="screen" title="no title" charset="utf-8">
</head>
<?php
$userid=$_GET["userid"];
include "../db/config.php";
// 连接数据库
$connect = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
if(!$connect){
  die('数据库连接失败，错误信息：'.mysqli_connect_error());
}
$sql = "select u.username,r.record,r.picurl from user as u, record as r where u.id=r.userid and u.id=".$userid;
//echo "$sql";
$query = mysqli_query($connect, $sql);
while($result = mysqli_fetch_array($query)){
  $username = $result["username"];
  $imgurl =  $result["picurl"];
  $record = $result["record"];
}
 ?>
<div>
<form action="share.php" method="post">
<h1 style="color:white";>分享给微信好友：</h1>
<br>
<br>
<br>
<center>
  <img name="pic" src="<?php echo $imgurl; ?>" width="400" height="300" >
</form>
<br>
<p style="color:white; font-size:1.5em;">
<span>@<?php echo $username ?>:</span>
“我刚刚在<a href="http://192.168.1.101/dazidenglu.html" style="text-decoration:none;">http://dazidenglu.html</a>练习了打字，速度又变快了，快来和我比赛吧！”
</p>
<br>
<br>
<a href="QRcode.html">
<summit class="button-success pure-button">生成二维码
</summit>
</a>
</center>
</div>
</body>
</html>
