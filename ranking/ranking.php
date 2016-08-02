<!DOCTYPE html>
<html>
<head>
  <table class="pure-table-striped">
    <meta charset="utf-8">
    <center>
      <script type="text/javascript">
      function show_desc() {
        var desc=document.getElementById("userid_desc");
        desc.style.display="block"
      }
      function hide_desc() {
        var desc=document.getElementById("userid_desc");
        desc.style.display="none"
      }
      </script>
      <style>
      h1
      {
        text-shadow: 5px 5px 5px #FF0000;
      }
      h2
      {
        text-shadow: 5px 5px 5px #FF0000;
      }
      #grad1 {
        height: 100px;
        background: -webkit-linear-gradient(azure , blueviolet);
        background: -o-linear-gradient(azure ,blueviolet);
        background: -moz-linear-gradient(azure , blueviolet);
        background: linear-gradient(azure ,blueviolet);
      }
      .button {
        background-color: #FF0000;
        color: white;
        padding: 15px 32px;
      }
      body{
        background-color:#FFFFCC;
      }
      h1 {font-size:70px;}
      h2 {font-size:30px;}

      </style>
    </head>
    <body>


      <center>
        <div id="grad1"><h1> 打 字 排 名 </h1></div>

        <h2>目前<?PHP //TODO 动态第一名?>获得第一名</h2>
      </center>

      <form action="index1.php" method="post">
        用户名: <input type="text" name="name" />
        <input type="submit" />
      </form>
      <p>
      </p>
      <div align="center" style="border:4px solid red">
        <table border="8" cellspacing="10px" cellspacing="10px">
          <p>

          </p>
          <tr>
            <th style="width:100px; "><h3>名次</h3></th>
            <th style="width:150px; "><h3>用户名</h3></th>
            <th style="width:130px; "><h3>成绩</h3></th>
            <th style="width:240px; "><h3>时间</h3></th>
          </tr>
          <?php
          //TODO 列表
          ?>

          <tr>
            <th>1</th>
            <th>张三</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>199KPM</th>
            <th>2016.7.14-15:24:53</th>
          </tr>


        </table>

        <a href="javascript:void(0);" onclick="window.open('http://dazi.kukuw.com/');"class="button">继续练习</a>

      </body>

      </html>
