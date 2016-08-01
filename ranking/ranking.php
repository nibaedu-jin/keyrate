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

        <h2>目前张三获得第一名</h2>
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
            <th style="width:230px; "><h3>文章</h3></th>
            <th style="width:130px; "><h3>类型</h3></th>
            <th style="width:130px; "><h3>时长</h3></th>
            <th style="width:130px; "><h3>成绩</h3></th>
            <th style="width:240px; "><h3>时间</h3></th>
          </tr>


          <tr>
            <th>1</th>
            <th>张三</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>199KPM</th>
            <th>2016.7.14-15:24:53</th>
          </tr>
          <tr>
            <th>2</th>
            <th>李四</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>170KPM</th>
            <th>2016.7.14-15:24:43</th>
          </tr>

          <tr>
            <th>3</th>
            <th>王二</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>145KPM</th>
            <th>2016.7.14-15:24:2</th>
          </tr>

          <tr>
            <th>4</th>
            <th>麻子</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>130KPM</th>
            <th>2016.7.14-15:24:26</th>
          </tr>

          <tr>
            <th>5</th>
            <th>欢欢</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>120KPM</th>
            <th>2016.7.14-15:24:33</th>
          </tr>

          <tr>
            <th>6</th>
            <th>糖糖</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>119KPM</th>
            <th>2016.7.14-15:24:53</th>
          </tr>

          <tr>
            <th>7</th>
            <th>冰冰</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>110KPM</th>
            <th>2016.7.14-15:23:24</th>
          </tr>

          <tr>
            <th>8</th>
            <th>宁宁</th>
            <th>a girl selling matches</th>
            <th>English</th>
            <th>5分钟</th>
            <th>99KPM</th>
            <th>2016.7.14-15:25:29</th>
          </tr>

        </table>
        <p>
        </p>
        <p>
        </p>
        <button>下一页</button>
        <a href="http://192.168.1.102/dazijilu.html" class="button">继续练习</a>

      </body>

      </html>
