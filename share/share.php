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
$sql = "select u.username,r.record,r.picurl,r.userid from user as u, record as r where u.id=r.userid and u.id=".$userid;
//echo "$sql";
$query = mysqli_query($connect, $sql);
while($result = mysqli_fetch_array($query)){
  $username = $result["username"];
  $imgurl = $result["picurl"];
  $record = $result["record"];
  //$userid = $result["userid"];
}
  $message = $_POST["msg"];
if ($message !== null) {
  $picurl = $_POST["picurl"];
  $userid = $_POST["userid"];
  $sql2 = "insert into share(userid,picurl,message) values ('".$userid."','".$picurl."','".$message."')";
  //echo "$sql2";
  $query = mysqli_query($connect, $sql2);
  $insert = $connect->insert_id;
  header("Location: QRcode.php?id=".$insert);
}
?>
<div>
  <form id="msg" action="share.php" method="post">
    <h1 style="color:white";>分享给微信好友：</h1>
    <br>
    <br>
    <br>
    <center>
      <img name="pic" src="<?php echo "$imgurl"; ?>" width="400" height="300" >
    <br>
    <p style="color:white; font-size:1.5em;">
      <h2>@<?php echo $username ?>:</h2>
      <textarea name="msg" rows="6" cols="60">“我刚刚在<a href="http://192.168.1.101/dazidenglu.html">http://dazidenglu.html</a>练习了打字，速度又变快了，快来和我比赛吧！”</textarea>
      <input type="hidden" name="picurl" value="<?php echo $imgurl; ?>">
      <input type="hidden" name="userid" value="<?php echo $userid; ?>">
    </p>
    <br>
    <br>
    <a href="javascript: subform()">
      <summit class="button-success pure-button">生成二维码
      </summit>
    </a>
  </center>
  </form>
</div>
</body>
<script type="text/javascript">
  function subform() {
    document.forms["msg"].submit();
  }
</script>
</html>
