<?php

	session_start();
	
	if(($_SESSION['type'])!=='root')
	{
		header('Location: index.php');
		exit();
	}
		
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
			<h1 style="font-size: 30px">ADD PRODUCT</h1>
			
<?php

	if(isset($_SESSION['error']))
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}	

?>	
		
			<form method="POST" action="addProduct2.php" enctype="multipart/form-data">
			<table>
			<tr><td>
			  <h3 style="font-size: 18px">Short name</h3>
			<td>
			  <input type="text" name="prname" placeholder="eg. tiefighter" value="<?php
					if(isset($_SESSION['cr_prname']))
					{
						echo $_SESSION['cr_prname'];
						unset($_SESSION['cr_prname']);
					}				
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Full name</h3>
			<td>
			  <input type="text" name="fullname" placeholder="eg. TIE fighter minifig scale" value="<?php
					if(isset($_SESSION['cr_fullname']))
					{
						echo $_SESSION['cr_fullname'];
						unset($_SESSION['cr_fullname']);
					}				
					?>">
					<tr><td>
			  <h3 style="font-size: 18px">Category</h3>
			<td>
			  <input type="text" name="category" placeholder="eg. starwars" value="<?php
					if(isset($_SESSION['cr_category']))
					{
						echo $_SESSION['cr_category'];
						unset($_SESSION['cr_category']);
					}				
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Instructions price</h3>
			<td>
			  <input type="text" name="price" placeholder="eg. 12.00" value="<?php
					if(isset($_SESSION['cr_price']))
					{
						echo $_SESSION['cr_price'];
						unset($_SESSION['cr_price']);
					}				
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Embed youtube</h3>
			<td>
			  <input type="text" name="yt" placeholder="embed yt code" value="<?php
					if(isset($_SESSION['cr_yt']))
					{
						echo $_SESSION['cr_yt'];
						unset($_SESSION['cr_yt']);
					}				
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Estimated parts price</h3>
			<td>
			  <input type="text" name="blprice" placeholder="eg. 40 - 50" value="<?php
					if(isset($_SESSION['cr_blprice']))
					{
						echo $_SESSION['cr_blprice'];
						unset($_SESSION['cr_blprice']);
					}				
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Number of pieces</h3>
			<td>
			  <input type="text" name="pcs" placeholder="number of parts eg. 378" value="<?php
					if(isset($_SESSION['cr_pcs']))
					{
						echo $_SESSION['cr_pcs'];
						unset($_SESSION['cr_pcs']);
					}				
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Dimensions</h3>
			<td>
			  <input type="text" name="sizeL" placeholder="length in cm" value="<?php
					if(isset($_SESSION['cr_sizeL']))
					{
						echo $_SESSION['cr_sizeL'];
						unset($_SESSION['cr_sizeL']);
					}				
					?>">
			
			  <input type="text" name="sizeW" placeholder="width in cm" value="<?php
					if(isset($_SESSION['cr_sizeW']))
					{
						echo $_SESSION['cr_sizeW'];
						unset($_SESSION['cr_sizeW']);
					}				
					?>">
			
			  <input type="text" name="sizeH" placeholder="height in cm" value="<?php
					if(isset($_SESSION['cr_sizeH']))
					{
						echo $_SESSION['cr_sizeH'];
						unset($_SESSION['cr_sizeH']);
					}				
					?>">
			<tr><td>
			  <h3 style="font-size: 18px">Product description</h3>
			<td>
			  <textarea rows="20" cols="50" name="descr" value="<?php
					if(isset($_SESSION['cr_descr']))
					{
						echo $_SESSION['cr_descr'];
						unset($_SESSION['cr_descr']);
					}				
					?>"></textarea>
			<tr><td>
			 <h3 style="font-size: 18px">Send main photo</h3>
			<td>			  
				<input type="hidden" name="MAX_FILE_SIZE" value="50000000"> 
				<input type="file" name="photo">
		
			<tr><td>
			
			  <h3 style="font-size: 18px">Send rest of the photos</h3>
			<td>			  
				<input type="hidden" name="MAX_FILE_SIZE" value="500000000">
				<input name="photos[]" type="file" multiple>

			<tr><td>
				<h3 style="font-size: 18px">Image height</h3>
			<td>
			  <input type="text" name="imghght" placeholder="height of the main image eg. 400" value="<?php
					if(isset($_SESSION['cr_imghght']))
					{
						echo $_SESSION['cr_imghght'];
						unset($_SESSION['cr_imghght']);
					}				
					?>">
			  														  						
			</table>
			</br>
			<INPUT type="submit" value="Add product">
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




