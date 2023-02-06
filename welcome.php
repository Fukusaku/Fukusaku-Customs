<?php

	session_start();
	
	//if((!isset($_SESSION['succesfulSignup'])))
	//{
		//header('Location: log.php');
		//exit();
	//}
	//else
	//{
		//unset($_SESSION['succesfulSignup']);
	//}
	
	if(isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if(isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if(isset($_SESSION['fr_pass1'])) unset($_SESSION['fr_pass1']);
	if(isset($_SESSION['fr_pass2'])) unset($_SESSION['fr_pass2']);
	if(isset($_SESSION['fr_terms'])) unset($_SESSION['fr_terms']);
	
	if(isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if(isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if(isset($_SESSION['e_pass'])) unset($_SESSION['e_pass']);
	if(isset($_SESSION['e_terms'])) unset($_SESSION['e_terms']);
	if(isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
	
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
	
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
		<?php include('header.php'); ?>
	</header>
	
	<main>
	
		<div class="container-input" style="padding: 20px; font-size: 20px;">
			<p>Thanks for creating an account! </p><br/><br/>
			
			<a href="log.php">Login to your account</a>
			<br/><br/>
		</div>
	
	</main>
	
	<footer>
	
	    <?php include('footer.php'); ?>
	
	</footer>

</body>
</html>