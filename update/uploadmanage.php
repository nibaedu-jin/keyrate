<?php
session_start();
if ($_SESSION['userid']==null) {
  header("Location: ../login/login.php");
}
?>
<?php
include "../db/config.php";  //连接数据库
$grade=$_POST["grade"];     //取出输入的成绩
$userid=$_SESSION['userid'];

// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["uploadImg"]["name"]);
//echo $_FILES["uploadImg"]["size"];
$extension = end($temp);     // 获取文件后缀名
$file = $_FILES["uploadImg"];

if ((($file["type"] == "image/gif")
	|| ($file["type"] == "image/jpeg")
	|| ($file["type"] == "image/jpg")
	|| ($file["type"] == "image/pjpeg")
	|| ($file["type"] == "image/x-png")
	|| ($file["type"] == "image/png"))
	&& ($file["size"] < 107374182400)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
	if ($file["error"] > 0)
	{
		echo "错误：: " . $file["error"] . "<br>";
	}
	else
	{
		// echo "上传文件名: " . $file["name"] . "<br>";
		// echo "文件类型: " . $file["type"] . "<br>";
		// echo "文件大小: " . ($file["size"] / 1024) . " kB<br>";
		// echo "文件临时存储的位置: " . $file["tmp_name"] . "<br>";

		// 判断当期目录下的 upload 目录是否存在该文件
		// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
		if (file_exists("../upload/" . $file["name"]))
		{
			echo $file["name"] . " 文件已经存在。 ";
			echo ('点击此处 <a href="javascript:history.back(-1);">返回</a>');
		}
		else
		{
			// 如果 upload 目录存在该文件则将文件上传到 upload 目录下
			move_uploaded_file($file["tmp_name"], "../upload/" . $file["name"]);
			$picurl = "../upload/" . $file["name"];
			//echo "文件存储在: " . $picurl;
		}
    $connect = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
    if(!$connect){
      die('数据库连接失败，错误信息：'.mysqli_connect_error());
    }
		$sql = "insert into record(userid,picurl,record,time) values('".$userid."','".$picurl."','".$grade."',now())";

			$query = mysqli_query($connect, $sql);
			header("Location: ../ranking/ranking.php");
	}
}
else
{
	echo "非法的文件格式";
}
header("Location: ../ranking/ranking.php");
?>
