<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		if($_POST['submit']){
			include "db.php"
		  // $sql="select * from user where username=$_POST['username'] and password=$_POST['password']";
			$row=mysql_query($sql);
			if($row>0){
				header("Location: update.php");
				}
			else{
				echo '<script>alert('用户名不存在')</script>';
				}
			}
		 ?>

	</body>
</html>
