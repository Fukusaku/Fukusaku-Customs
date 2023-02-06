<?php

	session_start();
	
	if((isset($_SESSION['logged']))&&($_SESSION['logged']==true))
	{
		header('Location: profil.php');
		exit();
	}
	
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>Login</title>
	<meta name="description" content="LEGO custom model instructions">
	<meta name="keywords" content="lego, instructions, custom, fukusaku, starwars, legostarwars, moc">
	<meta name="author" content="Jan Stachowicz">
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
<?php 
	if (is_file('header.php'))
		require_once('header.php');
?>

	</header>
	
	<main>
		
		<div class="container-input" style="padding: 20px;">
			<h1 style="font-size: 30px">SIGN IN</h1>
			
<?php

	if(isset($_SESSION['error']))
		echo $_SESSION['error'];

?>	
		
			<form action="log2.php" method="post">
			
				<p style="font-size: 20px">Login: </p>
				<input type="text" name="login" placeholder="Enter your login" value="<?php
					if(isset($_SESSION['fr_login']))
					{
						echo $_SESSION['fr_login'];
						unset($_SESSION['fr_login']);
					}				
					?>"/><br/>
				<p style="font-size: 20px">Password: </p>
				<input type="password" name="pass" placeholder="Enter your password"/><br/><br/>
				
				<input type="submit" value="LOG IN"/>
			
			</form></br>
		
		</div>


		<div class="container-input" style="padding: 20px;">
	
			<br/><br/>
			<h3 style="font-size: 20px">New Customer?</h3>
			<p style="font-size: 14px">Sign up for an account to take advantage of order tracking and history <br/>as well as pre-filled forms during checkout on subsequent orders.</p>
		
			<a href="register.php"><h1>CREATE ACCOUNT</h1></a>
			<br/><br/>
	
		</div>
	</main>
	
	<footer>
	
<?php 
	if (is_file('footer.php'))
		require_once('footer.php');
?>
	
	</footer>

</body>
</html>