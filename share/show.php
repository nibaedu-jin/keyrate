<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>分享页面</title>
  <style>
    body{
      padding: 9.4em 15px;
      background-image: -webkit-radial-gradient(closest-corner, rgba(16, 47, 70, 0) 60%, rgba(16, 47, 70, 0.26)), -webkit-linear-gradient(108deg, #26d0ce, #1a2980 90%);
      background-image: -moz-radial-gradient(closest-corner, rgba(16, 47, 70, 0) 60%, rgba(16, 47, 70, 0.26)), -moz-linear-gradient(108deg, #26d0ce, #1a2980 90%);
      background-image: -ms-radial-gradient(closest-corner, rgba(16, 47, 70, 0) 60%, rgba(16, 47, 70, 0.26)), -ms-linear-gradient(108deg, #26d0ce, #1a2980 90%);
      overflow-y: hidden;
    }
    .img{
      width: 400px;
      height: 300px;
      margin: auto;
      margin: auto;
      border: 2px solid #DBDBDB;
    }
    .message{
      margin: auto;
      margin: auto;
      width: 600px;
      height: 200px;
      color: white;
    }
  </style>
</head>
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
<body>
  <div class="paper">
    <form id="msg" action="share.php" method="post">
      <br>
      <br>
      <br>
      <div class="img">
        <img name="pic" src="<?php echo $imgurl;?>" width="400px" height="300px">
      </div>
      <div class="message">
        <p style="color:white; font-size:1.5em;">
          <h2><?php echo $username ?>:<?PHP echo $message ?></h2>
        </p>
      </div>
<br>
<br>
</div>
</body>
</html>
