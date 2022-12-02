<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="includes\css\index.css">
</head>

<body>

<?php include 'includes\nav-bar-ui.php';?>
<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
<div class="error success" >
    <h3>
    <?php 
        echo $_SESSION['success']; 
        unset($_SESSION['success']);
    ?>
    </h3>
</div>
<?php endif ?>

</body>
</html>