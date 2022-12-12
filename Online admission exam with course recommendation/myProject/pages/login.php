<?php include('../includes\server.php') ?>
<?php if(isset($_SESSION['username'])){
    header('location:../index.php');
}?>
<!DOCTYPE html>
<html>
	<style>
		body{
			background-image: url('../images/bgbody.jpg');
			background-size: 100%;
		}
	</style>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="../includes/css/login.css">
</head>
<body>
<?php include '../includes\nav-bar-ui-login.php';?>
  <div class="login-container">
  	<h2>Login</h2> 
  <div class="login-item">
	<form method="post" action="login.php">
  <?php include('../includes\errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
  </div>
</body>
</html>