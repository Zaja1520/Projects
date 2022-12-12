<?php include('../includes\server.php') ?>
<?php if(isset($_SESSION['username']))
    header('location:../index.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<link rel="stylesheet" href="../includes/css/register.css">
<style>
	
</style>
<body>
<?php include '../includes\nav-bar-ui-register.php';?>
	<div class="register-content-container"> <h2 style="color: white;"> Register </h2> 
  	<div class="box"> 
		<div class="box-1"></div>
		<div class="box-2">
			<article class="box-2-article">
		<form method="post" action="register.php">
			<?php include('../includes\errors.php'); ?>
			<label>Username</label> <br>
  	  		<input type="text" name="username" value="<?php echo $username; ?>">
			<label><br>Email</label> <br>
  	 	    <input type="email" name="email" value="<?php echo $email; ?>">
			<label><br>Password</label> <br>
  	 		<input type="password" name="password_1">
			 <label><br>Confirm password</label> <br>
  	 		 <input type="password" name="password_2">
				</article>
				</div>
			 <div class="box-3">
			 <article class="box-3-article">
				<label>Preferred Course</label> <br>
				<input type="checkbox" name="chkl[ ]" value="Course 1">Course 1<br />  
				<input type="checkbox" name="chkl[ ]" value="Course 2">Course 2<br />  
				<input type="checkbox" name="chkl[ ]" value="Course 3">Course 3<br />  
				<input type="checkbox" name="chkl[ ]" value="Course 4">Course 4<br />  
				<input type="checkbox" name="chkl[ ]" value="Course 5">Course 5<br /> 
			 </article>
			 </div>
			 <div class="box-4"></div>
		</div>
		<div class="register-btn">
			<button type="submit" class="btn" name="reg_user">Register</button>
			</div>
		<p style="color: white; font-size: 1.2em;">
  		Already a member? <a href="login.php">Sign in</a>
  		</p>
		  </div>

	

</body>
</html>