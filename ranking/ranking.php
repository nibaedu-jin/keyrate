<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>排名</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../src/css/ranking.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <center>
    <div id="grad1"><h1> 打 字 排 名 </h1></div>
    <h2>目前<?PHP //TODO 动态第一名?>获得第一名</h2>
  </center>
  <div align="center" style="border:4px solid red">
    <table border="8" cellspacing="10px" cellspacing="10px">
      <tr>
        <th style="width:200px; "><h3>名次</h3></th>
        <th style="width:300px; "><h3>用户名</h3></th>
        <th style="width:260px; "><h3>成绩</h3></th>
        <th style="width:480px; "><h3>时间</h3></th>
      </tr>
      <?php

      // 连接数据库
      $connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
      if(!$connect){
        die('数据库连接失败，错误信息：'.mysqli_connect_error());
      }
      $sql = "select * from t_vote order by id desc";
      //echo $sql;
      $query = mysqli_query($connect, $sql);

      while($result = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>" . $result["id"] . "</td>";
        echo "<td>" . $result["name"] . "</td>";
        echo "<td>" . $result["desc"] . "</td>";
        echo "<td> <a href='vote.php?id=" . $result["id"] . "' >Vote</a> </td>";
        echo "</tr>";
      }

      mysqli_close($connect);

      ?>
      ?>
      <tr>
        <th>1</th>
        <th>张三</th>
        <th>199KPM</th>
        <th>2016.7.14-15:24:53</th>
      </tr>
    </table>
    <a href="javascript:void(0);" onclick="window.open('http://dazi.kukuw.com/');"class="button">继续练习</a>
  </body>
</html>
