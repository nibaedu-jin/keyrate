<?php
session_start();
echo "###";
echo $_SESSION['userid'];

if ($_SESSION['userid']==null) {
  //header("Location: ../login/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../src/css/pure-min.css" media="screen" title="no title" charset="utf-8">
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
  }
  </script>
  <!-- ******************************************************************* -->
</head>
<body background="img/1465109563829.jpg">
  <center>
    <div style="color:red;">
      <table border="3" style="color:blue;">
        <tr>
          <td>
            <form action="uploadmanage.php"
            enctype="multipart/form-data" method="post" name="testForm">
            <fieldset>
              <p style=" font-family:STXingkai;  font-size : 4em; color:red;">请键入你的成绩:</p>

              <input name="grade" type="text" id="input"/ placeholder="必须输入纯数字" required/>
              <script type="text/javascript">
              var text = document.getElementById("input");
              text.onkeyup = function(){
                this.value=this.value.replace(/\D/g,'');
                if(text.value>500){
                  text.value = 500;
                }
              }
              </script>
              <span style="color:red; font-size:1.5em;" >KPM</span>
              <hr/>
              <p style="font-family:FZYaoti; font-size: 1.5em;" required/>上传你的成绩截图:</p><center>
                <input type="file" name="uploadImg" onchange="Javascript:validate_img(this);" size="12"/><center>
                  <hr/>
                  <center><div>

                    <input type="submit" name="s1" value="确认提交">
                  </div>
                </center>
              </fieldset>
            </form>
          </td>
        </tr>
      </table>
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
