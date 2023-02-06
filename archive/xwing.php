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
	
	<script src="jquery-3.6.0.min.js"></script>
		
	<script type="text/javascript">
		 
		var number = 1;
									
		function slide()
		{				
			var plik = "<img src=\"img/xwing" + number + ".jpg\" width=600px height=400px/>";
					
			document.getElementById("slider").innerHTML = plik;
							
			var shadow = document.getElementById('mini'+number)
			shadow.style.outline = "solid 3px #1c74b2";
			shadow.style.outlineOffset = "-3px";
		}
			
		function setslide(nrslide)
		{
			var shadow = document.getElementById('mini'+number)
			shadow.style.outline = "";
				
			number = nrslide;
								
			slide(number);				
		}
					
	</script>
	
</head>

<body onload="slide()">

    <header>
		
<?php 
	if (is_file('header.php'))
		require_once('header.php');
	else
		echo "Taka strona nie istnieje"; 
?>
	
	</header>
	
	<article id="newest">
		
	<div class="container">
							  
		<div class="west">
		
			<div id="minis">
			
				<div id="mini1" onclick="setslide(1)" style="cursor:pointer;"><img src="img/xwing1.jpg" width=80px height=50px/></div>
				<div id="mini2" onclick="setslide(2)" style="cursor:pointer;"><img src="img/xwing2.jpg" width=80px height=50px/></div>
				<div id="mini3" onclick="setslide(3)" style="cursor:pointer;"><img src="img/xwing3.jpg" width=80px height=50px/></div>
				<div id="mini4" onclick="setslide(4)" style="cursor:pointer;"><img src="img/xwing4.jpg" width=80px height=50px/></div>
				
			</div>
		
			<div id="slider"></div>
			
			<div style="clear: both;"></div>
									  
		</div>
																	
		<div class="east">
		
			<section>
         
				<h1>X-wing Starfighter minifig scale</h1>
				<br>
				<h3>This is NOT a physical product! This is a digital download and does not come with any physical elements.</h3>
				<br>

				<span class="money">$13.00</span>
	  
				<div class="product-des">
								
					<p class="p2"><strong><iframe width="360" height="220" src="https://www.youtube.com/embed/eGy0WWI-QA8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></strong></p>
					<p class="p2"><strong>Instructions Only!</strong></p>
					<p class="p1">The X-wing Starfighter first hit the screens in Star Wars: Episode IV - A New Hope back in 1977. Almost immediately from that point on The X-wing was immensely popular among fans and the fighter is now one of the most recognizable spaceships of all time. The s-foils fold open when in attack position creating that icon "X" shape and the rest is history.</p>
					<p class="p2"><strong>Notes:</strong></p>
					<p class="p2">This purchase is for the instructions and part list for Fukusaku's x-wing fighter. Please do keep in mind prices to tend to fluctuate on the brick selling market.</p>
					<ul>
					<li>
					<span>BrickLink Price:</span><span> </span>~$150 - $200 USD</li>
					<li>
					<span>Part Count:</span><span> 1224 </span>pieces</li>
					<li>
					<span>Dimensions:</span><span> </span>Length 42 cm, width 18 cm, height 11 cm</li>
					</ul>
					<p class="p1"><strong>Files:</strong></p>
					<p class="p1">PDF Instruction manuals &amp; part lists for Bricklink.</p>
					<p class="p2"><strong>Builder:</strong> </p>
					<p class="p2"><span>Fukusaku - </span><a href="https://www.flickr.com/photos/fukusaku/" title="Flickr">Flickr</a><span> | </span><a href="https://www.instagram.com/fukusakuu/?hl=pl" title="Instagram">Instagram</a><span></span></p>
																
				</div>

				<form class="addcart" method="post" action="/cart/add">
		  
					<input name="id" value="12260179935339" type="hidden">
		  
					<input
						class="addcart-quantity"
						type="number"
						min="1"
						name="quantity"
						value="1"
					/>

					<button
						class="addcart-button"
						type="submit"
					>
						Add to cart
					</button>
				</form>

				<div class="share-buttons-wrapper">
					<span class="share-buttons-label">
				  
						</br>Share on</br>
				  
					</span>

					<div class="share-buttons">
				 
						<a target="_blank" href="//www.facebook.com/sharer.php?u=https://"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path fill="currentColor" fill-rule="evenodd" d="M12.82 24H1.324A1.325 1.325 0 0 1 0 22.675V1.325C0 .593.593 0 1.325 0h21.35C23.407 0 24 .593 24 1.325v21.35c0 .732-.593 1.325-1.325 1.325H16.56v-9.294h3.12l.466-3.622H16.56V8.77c0-1.048.29-1.763 1.795-1.763h1.918v-3.24c-.332-.045-1.47-.143-2.795-.143-2.766 0-4.659 1.688-4.659 4.788v2.67H9.692v3.623h3.127V24z"/>
							</svg></a>
					   
						<a target="_blank" href="//twitter.com/share?url=https://www.stronaztymmodelem"><svg width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
								<path fill="currentColor" fill-rule="evenodd" d="M24 2.368a9.617 9.617 0 0 1-2.827.794A5.038 5.038 0 0 0 23.338.37a9.698 9.698 0 0 1-3.129 1.223A4.856 4.856 0 0 0 16.616 0c-2.718 0-4.922 2.26-4.922 5.049 0 .396.042.78.126 1.15C7.728 5.988 4.1 3.979 1.67.922a5.14 5.14 0 0 0-.666 2.54c0 1.751.87 3.297 2.19 4.203a4.834 4.834 0 0 1-2.23-.63v.062c0 2.447 1.697 4.488 3.95 4.95a4.695 4.695 0 0 1-1.296.178c-.317 0-.627-.03-.927-.09.626 2.006 2.444 3.466 4.599 3.505A9.722 9.722 0 0 1 0 17.733 13.71 13.71 0 0 0 7.548 20c9.058 0 14.01-7.692 14.01-14.365 0-.22-.005-.439-.013-.654A10.1 10.1 0 0 0 24 2.368"/>
							</svg></a>
					   
						<a target="_blank" href="//pinterest.com/pin/create/button/?url=https://www.tujakiessraniezshopify"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path fill="currentColor" fill-rule="evenodd" d="M0 12c0 4.913 2.955 9.135 7.184 10.991-.034-.837-.005-1.844.208-2.756l1.544-6.538s-.383-.766-.383-1.9c0-1.778 1.032-3.106 2.315-3.106 1.09 0 1.618.82 1.618 1.803 0 1.096-.7 2.737-1.06 4.257-.3 1.274.638 2.312 1.894 2.312 2.274 0 3.805-2.92 3.805-6.38 0-2.63-1.771-4.598-4.993-4.598-3.64 0-5.907 2.714-5.907 5.745 0 1.047.307 1.784.79 2.354.223.264.253.368.172.67-.056.219-.189.752-.244.963-.08.303-.326.413-.6.3-1.678-.684-2.458-2.52-2.458-4.585 0-3.408 2.875-7.497 8.576-7.497 4.582 0 7.598 3.317 7.598 6.875 0 4.708-2.617 8.224-6.476 8.224-1.294 0-2.514-.7-2.931-1.494 0 0-.698 2.764-.844 3.298-.254.924-.752 1.85-1.208 2.57 1.08.318 2.22.492 3.4.492 6.628 0 12-5.372 12-12S18.628 0 12 0C5.375 0 0 5.372 0 12z"/>
							</svg></a>
					   
						<a target="_blank" href="mailto:?subject=lego%20x-wing&amp;body=I thought you might be interested in this page! https://www.brickvault.toys/products/ultimate-batmobile-1989"><svg width="20" height="14" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
								<path fill="currentColor" fill-rule="evenodd" d="M18 .5H2c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2zm-1.887 2L10 6.32 3.887 2.5h12.226zM2 11.5V3.679l7.47 4.669a1.002 1.002 0 0 0 1.06 0L18 3.678l.001 7.822H2z"/>
							</svg></a>
				  
					</div>
				</div>
			</section>
																  					
		</div>
		<div style="clear: both;"></div>
		
	</div>
  	</article>							
	
	<footer>
	
<?php 
	if (is_file('footer.php'))
		require_once('footer.php');
	else
		echo "Taka strona nie istnieje"; 
?>
	
	</footer>

</body>
</html>