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
  <title>排名</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../src/css/ranking.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <center>
    <div id="grad1"><h1> 光 荣 榜  </h1></div>
    <h2>目前<span id="no1">username</span>获得第一名</h2>
  </center>
  <div class="tabletext" align="center">
    <table id="table" border="1" cellspacing="0"  >
      <tr>
        <th style="width:200px; "><h3>名次</h3></th>
        <th style="width:300px; "><h3>用户名</h3></th>
        <th style="width:260px; "><h3>成绩</h3></th>
        <th style="width:240px; "><h3>时间</h3></th>
        <th style="width:240px; "><h3>分享</h3></th>
      </tr>

      <?php
      include "../db/config.php";
      // 连接数据库
      $connect = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
      if(!$connect){
        die('数据库连接失败，错误信息：'.mysqli_connect_error());
      }
      //$sql = "select * from record";
      $sql = "select u.username,r.id,r.record,r.time,r.userid from record as r,user as u where r.userid = u.id order by r.record desc";

      $query = mysqli_query($connect, $sql);
      //$sql2 = "select * from user order by '" . $result[userid] . "' desc";
      //$query = mysqli_query($connect, $sql2);
      //echo $sql;
      $ranking = 1;
      while($result = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<th >" . $ranking . "</th>";
        echo "<th>" . $result["username"] . "</th>";
        echo "<th>" . $result["record"] . "KPM</th>";
        echo "<th>" . $result["time"] . "</th>";
        echo "<th> <a href='../share/share.php?userid=" . $result["userid"] . "' >分享</a> </th>";
        echo "</tr>";
        if ($ranking==1) {
          $no1 = $result["username"];
        }
        $ranking++;
      }

      mysqli_close($connect);

      ?>
    </table>
  </div>
    <a href="javascript:void(0);" onclick="window.open('http://dazi.kukuw.com/');"class="button">继续练习</a>
  </body>
  <script type="text/javascript">
    document.getElementById('no1').innerHTML="<?PHP echo $no1;?>";
  </script>
</html>
