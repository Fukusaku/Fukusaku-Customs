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
	
	    <article>
		
			<section id="collections">
			
			    <div class="entries">
				
				    <header>
					
						<h1 style="font-size: 32px">COLLECTIONS</h1>
										
					</header>
					
					
						<div class="categories" style="text-transform: uppercase; display: inline-block">
							<a href="categories2.php?page=starwars">
							<img src="img/tiefighter1.jpg" alt="" />
							<br/><h1>STAR WARS</h1></a>
						</div><div class="categories" style="text-transform: uppercase; display: inline-block">
							<a href="categories2.php?page=cars">
							<img src="img/e36magenta1.jpg" alt="" />
							<br/><h1>CARS</h1></a>
						</div><div class="categories" style="text-transform: uppercase; display: inline-block">
							<a href="categories2.php?page=games">
							<img src="img/cyberporsche1.jpg" alt="" />
							<br/><h1>VIDEO GAMES</h1></a>
						</div><div class="categories" style="text-transform: uppercase; display: inline-block">
							<a href="categories2.php?page=city">
							<img src="img/911minifig1.jpg" alt="" />
							<br/><h1>CITY</h1></a>
						</div>										
										
				</div>
			
			</section>
			
		</article>
		
	</main>
	
	<footer>
	
<?php 
	if (is_file('footer.php'))
		require_once('footer.php'); 
?>
	
	</footer>

</body>
</html>