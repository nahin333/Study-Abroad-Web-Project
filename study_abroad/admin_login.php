<?php include "lib/Session.php" ?>
<?php include "lib/Cookie.php" ?>
<?php Cookie::checkAdminLogin(); ?>
<?php include "inc/header.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login system PHP</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$username = $fm->validation($_POST['username']);
				$password = $fm->validation(md5($_POST['password_1']));
				
				$username = mysqli_real_escape_string($db->link,$username);	
				$password = mysqli_real_escape_string($db->link,$password);
				
				$query = "select * from tbl_admin where username='$username' AND password = '$password' ";
				$result = $db->select($query);
				if($result != false)
				{
					$value = mysqli_fetch_array($result);
					$row = mysqli_num_rows($result);
					if($row > 0)
					{
						Cookie::set("login",true);
						Cookie::set("userId",$value['id']);
						Cookie::set("username",$value['username']);
						
						Session::set("login",true);
						Session::set("userId",$value['id']);
						Session::set("username",$value['username']);
						header("Location:index_logged_admin.php");
					}
					else
					{
						echo "<span style='color:red;font-size:18px;'>Not found</span>";
					}
				}
				else
				{
					echo "<span style='color:red;font-size:18px;'>Username or Password not matched ! </span>";
				}
			}
?>
<div class="header">
	<h2>Admin</h2>
</div>
<form method="post" action="">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	
	<div align = "left">
	    <input type = "checkbox" name= "remember">
		Remember Me
	</div>
	
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Login</button>
	</div>
	<p>
		Don't have an account? <a class="link" href="signup.php"> Create one </a>
	</p>
</form>
</body>
</html>