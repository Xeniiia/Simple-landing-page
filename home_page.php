<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Сайт-лэндинг</title>
  <link rel="stylesheet" type="text/css" href="MyStyle.css">

	<style>

   .row1 img  {
    border: 3px solid rgba(0, 0, 0, 0.2); 
    padding: 3px;
    margin-right: 10px;
		margin-left: 10px;
    margin-bottom: 10px;
   	}
	 .row2 img  {
    border: 3px solid rgba(0, 0, 0, 0.2);
    padding: 3px;
    margin-right: 10px;
		margin-left: 10px;
    margin-bottom: 10px;
   	}
		p {
  	display: flex;
  	align-items: center;
  	justify-content: center;
		}
		h1 {
		display: flex;
  	align-items: center;
  	justify-content: center;
		color: plum;
		font-family: oblique;
    font-size: 45pt;
    background: linear-gradient(plum, white); 
  	-webkit-background-clip: text;  
  	color: transparent;
		}
		h2 {
		display: flex;
  	align-items: center;
  	justify-content: center;
  	color: white;
		text-transform: uppercase;
		font-weight: 500px;
		}
		body {
  	background: url(for_backgr.jpg);
  	background-size: 100%;
		}
  </style>



</head>
<body>
	<h1>Web Studio</h1>
	<br>
<table border="0" width="90%" cellpadding="20">
	
	<p class="row1">
		<img src="1.jpg" width="500" height="440">
   <img src="2.jpg" width="500" height="440">
  </p>

	<p class="row2">
  <br><br>
   <img src="3.jpg" width="500" height="300">
   <img src="4.jpg" width="500" height="300">
  </p>
	</table>


<script type="text/javascript">
function AuthorizeValidation(regform) {
if(regform.agree.checked == true) {regform.validation.disabled = false }
if(regform.agree.checked == false) {regform.validation.disabled = true }
}
</script>

<body>
		<div class="box">
			<form action="home_page.php" method="post">
			<h2>Оставить заявку</h2>
			<br>
				<label>Ваше имя:</label>
				<input class="Pole" tabindex="1" required="required" type="text"  name="username" required minlength="2" value="<?php echo $username; ?>">
				<label>Ваша фамилия:</label>
				<input class="Pole" tabindex="2" required="required" type="text"  name="surname"  required minlength="2" value="<?php echo $surname; ?>">
				<label>Номер телефона:</label>
				<input class="Pole" tabindex="3" required="required" type="tel"   name="phone"   required pattern="[0-9]{10,11}" value="<?php echo $phone; ?>">
				<label>Электронная почта:</label>
  	  	<input class="Pole" tabindex="4" required="required" type="email" name="email"    required pattern="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" value="<?php echo $email; ?>">
  	  	<br>
  	  	<label>Я согласен с обработкой персональных данных</label>
  	  	<input type="checkbox" required="required" name="agree" onClick="AuthorizeValidation(this.form)" value="Yes" />

				<button class="Button" type="submit" name="send">Отправить</button>
			</form>
		</div>
		
	</body>
	<br><br>
</html>


