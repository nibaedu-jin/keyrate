<?PHP
$img = $_GET['img'];
$msg = $_GET()
?>
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
<<<<<<< HEAD
  <img name="pic" src="<?php echo $imgurl; ?>" width="400" height="300" >
=======
  <img name="pic" src="<?PHP echo "$id"; ?>" width="400" height="300" >
>>>>>>> 7ed27ffec34b8730c3fb16e4a014b4ebf1c2c641
</form>
<br>
<b><p style="color:white; font-size:1.5em;">
<?PHP echo "string";?>
</p>
</b>
<br>
<br>
</center>
</div>
</body>
</html>
