<?php

	session_start();
	if (is_file('cart2.php'))
		require_once('cart2.php');
	
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
		
<?php 	

	echo cart($zakupy);	

?>

			<div style="clear: both;"></div>
			
			<div class="cart-cont">

				<div id="cart-note">Please keep in mind this is for instructions only that will be delivered via email as a PDF. We do not sell any physical products.
				</div>
				
				<div style="float: left;">
				
					<div id="cart-sub"><h1>SUBTOTAL</h1>
					</div>
					
					<div id="cart-total">€<?php echo $sum_price; ?>
					</div>
					
					</br></br></br></br>
					
					<div id="cart-payment"><h1>PAYPALE</h1>
					</div>
					
				</div>
				
				<div style="clear: both;"></div>
				
			</div>
			
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