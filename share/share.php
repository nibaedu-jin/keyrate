<?php
session_start();
if ($_SESSION['userid']==null) {
 header("Location: ../login/login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>share</title>
    <link rel="stylesheet" href="../src/css/share.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../src/css/pure-min.css" media="screen" title="no title" charset="utf-8">
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
  }

  // 接受提交给自己的值
    $message = $_POST["msg"];
  if ($message !== null) {
    $picurl = $_POST["picurl"];
    $userid = $_POST["userid"];
    $sql2 = "insert into share(userid,picurl,message) values ('".$userid."','".$picurl."','".$message."')";
    $query = mysqli_query($connect, $sql2);
    $insert = $connect->insert_id;
    header("Location: QRcode.php?id=".$insert);
  }
  ?>


  <body>
  <div class="paper">
    <form id="msg" action="share.php" method="post">
      <h1 style="color:white";>分享给微信好友：</h1>
      <br>
      <br>
      <br>
      <div class="img">
          <img name="pic" src="<?php echo $imgurl; ?>" width="400px" height="300px">
      </div>
      <div class="username">
        <p style="color:white; font-size:1.5em;">
          <h2><?php echo $username ?>:</h2>
        </p>
      </div>
      <div class="text">
          <textarea name="msg" id="txt">
        “我刚刚在dazi.kukuw.com练习了打字，速度又变快了，快来和我比赛吧！”
          </textarea>
          <input type="hidden" name="picurl" value="<?php echo $imgurl; ?>">
          <input type="hidden" name="userid" value="<?php echo $userid; ?>">
        </div>
      <div class="button">
        <a href="javascript: subform()">
          <summit class="button-success pure-button">分享
          </summit>
        </a>
      </div>
    </div>
    </form>
  </body>
  <script type="text/javascript">
    function subform() {
      document.forms["msg"].submit();
    }
  </script>
</html>
