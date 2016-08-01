<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Account management platform</title>
</head>
<body>
	<script >

	function show_desc(){
		var desc = document.getElementById("userid_desc");
		desc.style.display = "block";
	}
	function hide_desc(){
		var desc = document.getElementById("userid_desc");
		desc.style.display = "none";
		console.log("userid_desc");
	}

	function show_isthis(){
		var desc = document.getElementById("userid_isthis");
		desc.style.display = "block";
	}
	function hide_isthis(){
		var desc = document.getElementById("userid_isthis");
		desc.style.display = "none";
		console.log("userid_isthis");
	}

	</script>
	<h1>
		<center>
			<span style="text-shadow:5px 5px 5px #Ff0000;">
				Account management platform
			</span>
		</center>
		<h1>
			<h2>
				<p>
					AMP
				</p>
			</h2>
			<form  action="login.php" method="post" >
				<fieldset>
					<div style="font-size:2em;">
						<div class="pure-form pure-form-stacked" >
							<label for="Username">Username</label>
							<input  id="" type="text" name="Username" value=""
							onfocus = "show_desc()" onblur="hide_desc()"
							placeholder="Username" style="font-size:0.7em;" pattern="[A-z]{4,16}" required/>
							<span  id="userid_desc" class="desc" style="display:none;
							font-size:0.5em;color:red">
							1.不能为空</br>
							2.不能低于4个符字不能大于16个字符</br>
							3.只允许英文</br>
						</span>
					</div>
					<div class="pure-form pure-form-stacked">
						<label for="password">Password</label>
						<input id="" type="password" name="password" value=""
						onfocus = "show_isthis()" onblur="hide_isthis()"
						placeholder="Password" style="font-size:0.7em;"
						pattern="[A-Za-z].*[0-9]|[0-9].*[A-Za-z]{6,12}" required/>
						<span id="userid_isthis" class="desc"
						style="display:none; font-size:0.5em;color:red"  >
						1.不能为空<br/>
						2.必须字母数字组合<br/>
						3.长度不小于6位不大于12位<br/>
					</span>
				</div>
				<div class="pure-form pure-form-stacked">
					<label for="remember" class="pure-checkbox">
						<input id="remember" type="checkbox"> Remember me</label>
					</div>
					<div class="pure-form pure-form-stacked">

						<input type="submit" name="" value="Sign in" style="font-size:0.7em;">
					</div>
				</div>
			</fieldset>
		</form>
	</body>
	</h
