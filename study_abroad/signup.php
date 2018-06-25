<?php include "inc/header.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup system PHP</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<div class="header">
	<h2 style="color:#666699;">Create Your Account</h2>

</div>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = $_POST['username'];
	$email = $fm->validation($_POST['email']);
	$pass1 = $fm->validation(md5($_POST['password_1']));
	$pass2 = $fm->validation(md5($_POST['password_2']));
	if($pass1 == $pass2)
	{
		$query = "insert into tbl_user(username,password,email) values('$username','$pass1','$email')";
		$result = $db->insert($query);
		if($result)
		{
			echo "Account created successfully";
		}
		else
		{
			echo "Account not created";
		}
	}
	else
	{
		echo "Password not matched";
	}
}

?>
<form method="post" action="">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Sign Up</button>
	</div>
	<p>
		Already a member? <a class="link" href="login.php">Login</a>
	</p>
</form>
</body>
</html>