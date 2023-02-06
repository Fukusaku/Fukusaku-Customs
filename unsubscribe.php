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
		
		<?php include('header.php'); ?>
	
	</header>
   
    <main>
		<div class="container-input">
            <article>
                <form method="post" action="unsubscribe2.php">
                    <label><br/><h3 style="font-size: 20px;">Enter an email address you want to unsubscribe</h3></br>
                        <input type="email" placeholder="Email address" name="email" <?= isset($_SESSION['givenN_email']) ? 'value="'.$_SESSION['givenN_email'].'"' : '' ?>>
                    </label>
                    <input type="submit" value="UNSUBSCRIBE">
					
					<?php
						if(isset($_SESSION['givenN_email']))
						{
							echo '<p>Invalid email address!</p>';
							unset($_SESSION['givenN_email']);
						}
						if(isset($_SESSION['nul_email']))
						{
							echo '<p>Email address not found!</p>';
							unset($_SESSION['nul_email']);
						}	
					?>
                </form><br/><br/>
            </article>
		</div>
    </main>

	<footer>
	
	    <?php include('footer.php'); ?>
	
	</footer>

</body>
</html>