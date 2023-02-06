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
	
	<script type="text/javascript">
		
		var index = 0;
		var timer1=0;
		var timer2=0;
		
		function slideshow() 
		{
			var i;
			var x = document.getElementsByClassName("collectionsSlide");
			
			for (i = 0; i < x.length; i++) 
			{
				x[i].style.display = "none";  
			}
			index++;
			if (index > x.length) {index = 1}    
			if (index < 1) {index = x.length}    
			x[index-1].style.display = "block"; 
			$("collectionsSlide").fadeIn(500);		
			
			timer1 = setTimeout("slideshow()", 5000);
			timer2 = setTimeout("hide()", 4500);	
		}
		
		function hide()
		{
			$("collectionsSlide").fadeOut(500);
		}
		
		function prevslide(slide)
		{
			clearTimeout(timer1);
			clearTimeout(timer2);
			index = slide - 2;
			
			hide();
			slideshow();
		}
		
		function nextslide(slide)
		{
			clearTimeout(timer1);
			clearTimeout(timer2);
			index = slide;
			
			hide();
			slideshow();
		}	
	</script>
	
</head>

<body onload="slideshow()">

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
				
<?php 
	if (is_file('baseProducts.php'))
	{
		require_once('baseProducts.php');
		$b = new miniatures;
	    echo $b->slider();
	}
	else
		echo "Taka strona nie istnieje"; 
?>
		
				</div>

			</section>
		
			<section id="newest">
			
			    <div class="entries">
				
				    <header>
					
						<h1 style="font-size: 32px">NEW RELEASES</h1><br/>
					
					</header>
					
<?php 
	if (is_file('baseProducts.php'))
	{
		require_once('baseProducts.php');
		$a = new miniatures;
	    echo $a->index();
	}
	else
		echo "Error"; 
?>
										
				</div>
			
			</section>
			
			<section id="collections">
			
				<div class="entries">
				
				    <header>
					
						<h1 style="font-size: 32px">FEATURED COLLECTIONS</h1><br/>
										
					</header>
					
					<main>
					
						<div class="collections">
						
							<div class="collectionsy">
								<a href="categories2.php?page=starwars">
								<img src="img/tiefighter1.jpg" alt="" /></a>
							</div>
							
							<div class="collectionsy">
								<a href="categories2.php?page=starwars">
								<h1>STAR WARS</h1>
								<p>Everything you ever wanted from your favorite sci-fi series Space Wars!</p>
								<h2>SHOP NOW</h2>
								</a>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
							</div>
							
						</div>
						
						<div class="collections">
							
							<div class="collectionsy">
								<a href="categories2.php?page=cars">
								<h1>CARS</h1>
								<p>Sports cars, race cars, movie cars and more!</p>
								<h2>SHOP NOW</h2>
								</a>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
							</div>	
							
							<div class="collectionsy">
								<a href="categories2.php?page=cars">
								<img src="img/e36magenta1.jpg" alt="" /></a>
							</div>
						</div>
					
					</main>						
										
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