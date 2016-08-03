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
header('Content-type:text/html;charset=utf-8');
include "../db/config.php";
$id = $_GET['id'];
$imgurl = "";
$message = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);

$sql = "select picurl,message from share where id='".$id."' limit 1";
// echo $sql;
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
  // echo $row['picurl'];
  $imgurl = $row['picurl'];
  $message = $row['message'];
}
?>


<div>
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


<?PHP echo $message ?>


</p>
</b>
<br>
<br>
</center>
</div>
</body>
</html>
