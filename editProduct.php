<?php

	session_start();
	require_once('template2.php');
		
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
			<h1 style="font-size: 30px">EDIT PRODUCT INFO</h1>
			
<?php

	if(isset($_SESSION['error']))
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}	

?>	
		
			<form method="POST" action="editProduct2.php" enctype="multipart/form-data">
			
			<input type="hidden" name="id" value="<?php echo $id ?>">
			
			<table>
			<tr><td>
			  <h3 style="font-size: 18px">Short name</h3>
			<td>
			  <input type="text" name="prname" value="<?php
					if(isset($_SESSION['ed_prname']))
					{
						echo $_SESSION['ed_prname'];
						unset($_SESSION['ed_prname']);
					}
					else echo $prname;																	
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Full name</h3>
			<td>
			  <input type="text" name="fullname" value="<?php
					if(isset($_SESSION['ed_fullname']))
					{
						echo $_SESSION['ed_fullname'];
						unset($_SESSION['ed_fullname']);
					}
					else echo $fullname;																	
					?>">
					<tr><td>
			  <h3 style="font-size: 18px">Category</h3>
			<td>
			  <input type="text" name="category" value="<?php
					if(isset($_SESSION['ed_category']))
					{
						echo $_SESSION['ed_category'];
						unset($_SESSION['ed_category']);
					}
					else echo $category;																	
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Instructions price</h3>
			<td>
			  <input type="text" name="price" value="<?php
					if(isset($_SESSION['ed_price']))
					{
						echo $_SESSION['ed_price'];
						unset($_SESSION['ed_price']);
					}
					else echo $price;																	
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Embed youtube</h3>
			<td>
			  <input type="text" name="yt" value="<?php
					if(isset($_SESSION['ed_yt']))
					{
						echo $_SESSION['ed_yt'];
						unset($_SESSION['ed_yt']);
					}
					else echo $yt;																	
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Estimated parts price</h3>
			<td>
			  <input type="text" name="blprice" value="<?php
					if(isset($_SESSION['ed_blprice']))
					{
						echo $_SESSION['ed_blprice'];
						unset($_SESSION['ed_blprice']);
					}
					else echo $blprice;																	
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Number of pieces</h3>
			<td>
			  <input type="text" name="pcs" value="<?php
					if(isset($_SESSION['ed_pcs']))
					{
						echo $_SESSION['ed_pcs'];
						unset($_SESSION['ed_pcs']);
					}
					else echo $pcs;																	
					?>">
			  <tr><td>
			  <h3 style="font-size: 18px">Dimensions</h3>
			<td>
			  <input type="text" name="sizeL" value="<?php
					if(isset($_SESSION['ed_sizeL']))
					{
						echo $_SESSION['ed_sizeL'];
						unset($_SESSION['ed_sizeL']);
					}
					else echo $sizeL;																	
					?>">
			
			  <input type="text" name="sizeW" value="<?php
					if(isset($_SESSION['ed_sizeW']))
					{
						echo $_SESSION['ed_sizeW'];
						unset($_SESSION['ed_sizeW']);
					}
					else echo $sizeW;																	
					?>">
			
			  <input type="text" name="sizeH" value="<?php
					if(isset($_SESSION['ed_sizeH']))
					{
						echo $_SESSION['ed_sizeH'];
						unset($_SESSION['ed_sizeH']);
					}
					else echo $sizeH;																	
					?>">
			<tr><td>
			  <h3 style="font-size: 18px">Product description</h3>
			<td>
			  <textarea rows="20" cols="50" name="descr"><?php
					if(isset($_SESSION['ed_descr']))
					{
						echo $_SESSION['ed_descr'];
						unset($_SESSION['ed_descr']);
					}
					else echo $descr;																	
					?></textarea>

			<tr><td>
				<h3 style="font-size: 18px">Image height</h3>
			<td>
			  <input type="text" name="imghght" value="<?php
					if(isset($_SESSION['ed_imghght']))
					{
						echo $_SESSION['ed_imghght'];
						unset($_SESSION['ed_imghght']);
					}
					else echo $imghght;																	
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


