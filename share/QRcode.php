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
  <style>
    body {
      padding: 5.2em 15px;
      background-image: -webkit-radial-gradient(closest-corner, rgba(16, 47, 70, 0) 60%, rgba(16, 47, 70, 0.26)), -webkit-linear-gradient(108deg, #26d0ce, #1a2980 90%);
      background-image: -moz-radial-gradient(closest-corner, rgba(16, 47, 70, 0) 60%, rgba(16, 47, 70, 0.26)), -moz-linear-gradient(108deg, #26d0ce, #1a2980 90%);
      background-image: -ms-radial-gradient(closest-corner, rgba(16, 47, 70, 0) 60%, rgba(16, 47, 70, 0.26)), -ms-linear-gradient(108deg, #26d0ce, #1a2980 90%);
      font-family: "Raleway", sans-serif; }
    .paper{
      margin: auto;
      margin: auto;
      width: 500px;
      height: 600px;
      background-color: #D6D6D6;
      border-top-right-radius: 20px;
      border-top-left-radius: 20px;
      border-bottom-right-radius: 20px;
      border-bottom-left-radius: 20px;
    }
    .QR{
      position: relative;
      bottom: -110px;
      left: 125px;
    }
    .QR1{
      width: 255px;
      height: 255px;
      border: 3px solid black;
    }
    h1{
      position: relative;
      left: 20px;
    }

  </style>
</head>
<body>
<div class="paper">
  <div class="QR">
   <div id="qrcodeCanvas" class="QR1"></div>
   <br>
   <h1>扫描二维码分享</h1>
  </div>
</div>
</body>

<script type="text/javascript">
jQuery('#qrcodeCanvas').qrcode({
  text : "<?php echo "http://".$dbhost."/share/show.php?id=".$id ?>"
});

</script>
</html>
