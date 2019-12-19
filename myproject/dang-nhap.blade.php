<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
</head>
<body>
	<article class="form-box login" style="margin-top: -206.5px; display: block;">
	<a href="#" class="form-close">
	<img src="images/form-close.png" alt="close">
	</a>
	<img src="images/form-logo.png" alt="logo">
	<form id="login-form">
	<!--ERROR MSGS-->
	<label for="login_user" class="error">Wrong username or password...</label>
	<!--/ERROR MSGS-->
	<input type="text" name="login_user" id="login_user" placeholder="Username...">
	<input type="password" name="login_pwd" id="login_pwd" placeholder="Password...">
	<input type="checkbox" name="login_remember" id="login_remember">
	<label for="login_remember">Remember me</label>
	</form>
	<a href="#" class="popup reset">Did you forget your password?</a>
	<input type="submit" form="login-form" value="Login">
	<p>You don’t have a Red Samurai account?<br><a href="#" class="popup register">Register now!</a></p>
	</article>
</body>
</html>