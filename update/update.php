<?php
session_start();
//echo $_SESSION['userid'];
// echo "#";
// echo session_status();
// echo "#";
if ($_SESSION['userid']==null) {
  header("Location: ../login/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <style type="text/css">
  html,body{margin:0; padding:20px;}
  </style>
  <!-- *************************************************************** -->
  <script type="text/javascript">
  function validate_img(a){
    var file = a.value;
    if(!/.(PNG|png|jpg)$/.test(file)){
      alert("图片类型必须是/jpgpng/PNG!!!");
      a.value = null;
      return false;
    }else{
      var image = new Image();
      image.src = file;
      var height = image.height;
      var width = image.width;
      var filesize = image.filesize;
      //  alert(height+"x.."+filesize);
      if(width>80 && height>80 && filesize>524288){
        alert('请上传80*80像素 或者大小小于500KB的图片');
        return false;
      }
    }
    alert("图片通过");
  }  //验证上传图片格式和大小 大小小于500kb
  </script>
  <!-- ******************************************************************* -->
</head>
<body>
  <div class="c11">
    <span id=s1>提交你的打字成绩</span>
  </div>
  <div class="c12">
    <form action="uploadmanage.php" id='center' enctype="multipart/form-data" method="post" name="testForm">
      <div class="c2">
        <input class="text" name="username" type="text" id="input" placeholder=输入你的成绩 required/>
      </div>
        <script type="text/javascript">
           var text = document.getElementById("input");
           text.onkeyup = function(){
             this.value=this.value.replace(/\D/g,'');
             if(text.value>500){
             text.value = 500;
             }
            }//上传数据必须小于500
        </script>
      <div class="a-upload">
        <input type="file" id="center" name="uploadImg" onchange="Javascript:validate_img(this);" size="12"/>点击这里上传截图
      </div>
      <input type="submit" class='className' name="s1" value="确认提交">
    </form>
  </div>
  <div style="padding-left:600px;">
    <form action="../share/share.php" method="post">
    <style scoped>
    .button-success,
    {
      color: red;
      border-radius: 10px;
      text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    }
    .button-success {
      background: rgb(66, 184, 221);
    }
    </style>
  </form>
</div>
</body>
</html>
