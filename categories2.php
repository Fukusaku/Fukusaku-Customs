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
		
			<section id="newest">
			
			    <div class="entries">
				
				    <header>
					
						<h1 style="font-size: 32px"><?php 
								$category=$_GET['page'];
								if($category=="starwars") echo "STAR WARS";
								if($category=="cars") echo "CARS";
								if($category=="games") echo "VIDEO GAMES";
								if($category=="city") echo "CITY";?></h1>
										
					</header>					

<?php 
	if (is_file('baseProducts.php'))
	{
		require_once('baseProducts.php');
		$a = new miniatures;
	    echo $a->categories($_GET['page']);	
	}
	else
		echo "Error"; 
?>
										
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