<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>分享页面</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>
<body>
<?php
header('Content-type:text/html;charset=utf-8');
include "../db/config.php";
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
<style scoped>
body{background:url(http://s.qdcdn.com/cl/11300758,800,450.jpg);
  padding-top:50px;
}
</style>
<form action="share.php" method="post">
<br>
<br>
<br>
<br>
<center>
  <img name="pic" src="<?php echo $imgurl; ?>" width="400" height="300" >
</form>
<br>
<b><p style="color:white; font-size:1.5em;">
“我刚刚在<a href="http://192.168.1.101/dazidenglu.html"  style="text-decoration:none;">http://dazidenglu.html</a>练习了打字，速度又变快了，快来和我比赛吧！”
</p>
</b>
<br>
<br>
</center>
</div>
</body>
</html>
