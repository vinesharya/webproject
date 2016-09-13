<?php
	session_start();
	if(isset($_SESSION['usr']) && isset($_SESSION['pswd'])){
	header("Location: eProject/content.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>User Login </title><meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Login Form" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="eProject/css/stylex.css" type="text/css" media="all" />
</head>
<body>
<div class="login-form" style="margin-top:5%;">
	<div class="close"></div>
		<div class="head-info">
			<label class="lbl-1"> </label>
			<label class="lbl-2"> </label>
			<label class="lbl-3"> </label>
		</div>
		<div class="clear"></div>
	<div class="avtar">
		<img src="../eProject/images/avtar.png" />
	</div>
	<div class="clear"></div>
	<form method="post" action="eProject/login.php">
		<input type="text" class="user"  name="usr" placeholder="arya" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" required/>
		<div class="key">
		<input type="password" class="password" name="pswd" placeholder="lock" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required/>
		</div>
		<input type="submit" name="login" value="Login">
	</form>
</div>
<div class="clear"></div>
	<div class="copy-rights">
		<p>Copyright &copy 2016 Powered by vForce  </p>
	</div>
	<div class="clear"></div>
</body>
</html>