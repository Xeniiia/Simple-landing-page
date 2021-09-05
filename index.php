<?php 
 /* session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="MyStyle.css">
</head>
<body>

<div class="box2">
	<h2>Спасибо за заявку!</h2>
</div>
<div class="box">
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

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Спасибо, <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="home_page.php" class="Button">Вернуться</a> </p>

			<p>
  		<a href="view_db.php" class="Button" >Посмотреть все заявки</a>
  	</p>
    <?php endif ?>
</div>
		
</body>
</html>