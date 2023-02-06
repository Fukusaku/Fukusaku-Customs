<?php

	session_start();
		
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>Fukusaku Customs</title>
	<meta name="description" content="LEGO custom model instructions">
	<meta name="keywords" content="lego, instructions, custom, fukusaku, starwars, legostarwars, moc">
	<meta name="author" content="Jan Stachowicz">
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	
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
			<h1 style="font-size: 30px">SIGN UP</h1>
			
<?php

	if(isset($_SESSION['error']))
		echo $_SESSION['error'];

?>	
		
			<form method="post" action="register2.php">
	
				<p style="font-size: 20px">Login: </p>
				<input type="text" name="nick" value="<?php
					if(isset($_SESSION['fr_nick']))
					{
						echo $_SESSION['fr_nick'];
						unset($_SESSION['fr_nick']);
					}				
					?>"/><br/>
				<?php
					if(isset($_SESSION['e_nick']))
					{
						echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
						unset($_SESSION['e_nick']);
					}	
				?>
				
				<p style="font-size: 20px">E-mail: </p>
				<input type="text" name="email" value="<?php
					if(isset($_SESSION['fr_email']))
					{
						echo $_SESSION['fr_email'];
						unset($_SESSION['fr_email']);
					}				
					?>"/><br/>
				<?php
					if(isset($_SESSION['e_email']))
					{
						echo '<div class="error">'.$_SESSION['e_email'].'</div>';
						unset($_SESSION['e_email']);
					}	
				?>
				
				<p style="font-size: 20px">Password: </p>
				<input type="password" name="pass1" value="<?php
					if(isset($_SESSION['fr_pass1']))
					{
						echo $_SESSION['fr_pass1'];
						unset($_SESSION['fr_pass1']);
					}				
					?>"/><br/>
				<?php
					if(isset($_SESSION['e_pass']))
					{
						echo '<div class="error">'.$_SESSION['e_pass'].'</div>';
						unset($_SESSION['e_pass']);
					}	
				?>
				
				<p style="font-size: 20px">Repeat password: </p>
				<input type="password" name="pass2" value="<?php
					if(isset($_SESSION['fr_pass2']))
					{
						echo $_SESSION['fr_pass2'];
						unset($_SESSION['fr_pass2']);
					}				
					?>"/><br/>
				
				<label>
					<input type="checkbox" name="terms" style="height: 20px; width: 20px"<?php
						if(isset($_SESSION['fr_terms']))
						{
							echo "checked";
							unset($_SESSION['fr_terms']);
						}
						?>/><p style="font-size: 20px; display: inline-block">Accept terms & conditions</p>
				</label>
				<br/><br/>
				<?php
					if(isset($_SESSION['e_terms']))
					{
						echo '<div class="error">'.$_SESSION['e_terms'].'</div>';
						unset($_SESSION['e_terms']);
					}	
				?>
				
				<div class="g-recaptcha" style="display: inline-block" data-sitekey="6LfkIpMhAAAAAFIzIkuKcb-4boZ__Naf2REeZ557"></div>
				<?php
					if(isset($_SESSION['e_bot']))
					{
						echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
						unset($_SESSION['e_bot']);
					}	
				?>
				
				<br/>
				<input type="submit" value="REGISTER"/>
	
			</form></br><br/>
			
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