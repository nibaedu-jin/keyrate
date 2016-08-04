<?php
session_start();
if ($_SESSION['userid']==null) {
  header("Location: ../login/login.php");
}
?>
<?php
$id = $_GET['id'];
include "../db/config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>qrcode</title>
  <script src="../src/js/jquery.min.js"></script>
  <script src="../src/js/jquery.qrcode.js"></script>
  <script src="../src/js/qrcode.js"></script>
</head>
<body>
<center>
<br>
<br>
<div id="qrcodeCanvas"></div>
<br>
<h1>扫二维码分享给好友</h1>
</center>
</body>

<script type="text/javascript">
jQuery('#qrcodeCanvas').qrcode({
  text : "<?php echo "http://".$dbhost."/share/show.php?id=".$id ?>"
});

</script>
</html>
