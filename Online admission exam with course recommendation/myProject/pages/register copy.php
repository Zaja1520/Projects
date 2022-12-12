<?php include('../includes\server.php') ?>
<?php if(isset($_SESSION['username']))
    header('location:../index.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    body {
    background-image: url("../images/bgbody.jpg");
    background-size: 100%;
    }
	.register-content-container {
    display: flex;
    flex-direction: column;
    background:rgba(58,63,68,0.5);
    border-radius: 5px;
    box-shadow: 0 1.5px 0 0 rgba(0,0,0,0.1);
    width:auto;
    margin: 0 10% 0 10%;
    margin-top: 100px;
    text-align: left;
    font-family: 'Lato', sans-serif;
    font-size:20px;
    color: #ffff;
	}
	.register-content-container label {
    width:100px;
    text-align: right;
	}

	
</style>
<body>
<?php include '../includes\nav-bar-ui-register.php';?>
  	<div class="register-content-container">
  <form method="post" action="register.php">
	<div class="register-content-container"><h2>Register</h2>
  	<?php include('../includes\errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label> <br>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label> <br>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label> <br>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label> <br>
  	  <input type="password" name="password_2">
  	</div>
	  </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	  <div class="register-content-container"><h2>Register</h2>
  	<?php include('../includes\errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label> <br>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label> <br>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label> <br>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label> <br>
  	  <input type="password" name="password_2">
  	</div>
	  </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user"><h2>Register</h2> </button>
  	</div>
	  </div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>

  </form>
</body>
</html>