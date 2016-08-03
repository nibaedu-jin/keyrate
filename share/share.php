<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>分享页面</title>
  <link rel="stylesheet" href="../src/css/pure-min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="../src/css/share.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<?php
include "../db/config.php";

$img = $_GET['img'];
$msg = $_GET['msg'];
//  header('Content-type:text/html;charset=utf-8');

$id = $_GET['id'];
$imgurl = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);

$sql = "select picurl from share where id='".$id."' limit 1";
// echo $sql;
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
// echo $row['picurl'];
  $imgurl = $row['picurl'];
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
