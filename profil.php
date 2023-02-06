<?php

	session_start();
	
	if(!isset($_SESSION['logged']))
	{
		header('Location: log.php');
		exit();
	}
		
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>User Panel</title>
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
	
		<div class="container-input" style="overflow:hidden;">
		
			<div class="sidebar" style="overflow: hidden; padding-bottom: 20000px; margin-bottom: -20000px;">
		
				<aside>
					<nav>
						<div id="optionL"><a href="?page=user">PROFILE</a></div> 
						<div id="optionL"><a href="?page=editProfile">EDIT PROFILE</a></div> 
						<div id="optionL">COLLECTION</div>   
						<div id="optionL"><a href="logout.php">LOGOUT</a></div>   
					</nav>
				</aside>
			</div>
			
			<div id="options" style="overflow: hidden; padding-bottom: 20000px; margin-bottom: -20000px;">
			
<?php

	if (is_file('subPage.php'))
	{
		require_once('subPage.php');
		$a = new subPage;
	    echo $a->validate(".php");
	}
	else
		echo "Error";
		
?>
			
			</div>
			<div style="clear: both;"></div>
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