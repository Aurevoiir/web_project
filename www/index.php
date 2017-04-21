<?php
include 'controller/identification_controller.php';

if(isset($_GET['error'])){
  echo '<script>alert("Les mots de passe ne sont pas identiques ")</script>';
}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>BDE eXia</title>
  <link rel="stylesheet" href="css/login_style.css">
	</head>
		<body>
  		<div class="login-page">
  		<div class="form">
    	<form class="register-form" method="GET">
    	<h2>SIGN UP</h2>
      	<input type="text" name='name' placeholder="Name" required />
      	<input type="text" name='surname' placeholder="Surname" required />
			<div>
			<label class="ecole">
			</label>
			<label class="radio-button radio-button--material">
  			<input type="radio" class="radio-button__input radio-button--material__input" name="r"  value="eXia" checked="checked">
  			<div class="radio-button__checkmark radio-button--material__checkmark"></div>
  			eXia  
</label>
<label class="radio-button radio-button--material">
  <input type="radio" class="radio-button__input radio-button--material__input" name="r" value="EI">
  <div class="radio-button__checkmark radio-button--material__checkmark"></div>
  EI
<label class="radio-button radio-button--material">
  <input type="radio" class="radio-button__input radio-button--material__input" name="r" value="CESI Alternance">
  <div class="radio-button__checkmark radio-button--material__checkmark"></div>
  CESI Alternance
  <p></p>
   </label>
  </div>
</label>
      <input type="email" name='emails' placeholder="email"/ required>
      <input type="password" name='password' placeholder="Password"/ required>
      <input type="password" name='password_confirmation' placeholder="Confirm password"/ required>
      <button>SIGN UP</button>
      <p class="message">Alreary Registered ? <a href="#">Sign in</a></p>
    </form>
    <form method="POST" class="login-form">
    <h2>SIGN IN</h2>
      <input type="text" name='email' placeholder="email"/>
      <input type="password" name='pwd' placeholder="Password"/>
     <button type="submit">SIGN IN</button>
      <p class="message">Don't have an account ? <a href="#">Sign up</a></p>
      <p class="message">Forgot password ? <a href="reset.html#">Reset</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
