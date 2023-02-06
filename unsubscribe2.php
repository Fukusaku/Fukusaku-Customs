<?php

session_start();

if (isset($_POST['email'])) 
{	
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if(empty($email)) 
	{		
		$_SESSION['givenN_email'] = $_POST['email'];
		header('Location: unsubscribe.php');		
	} 
	else 
	{		
		require_once 'database.php';
		
		$mailQuery = $db->prepare('SELECT id FROM newsletter WHERE email = :email');
		$mailQuery->bindValue(':email', $email, PDO::PARAM_STR);
		$mailQuery->execute();
		
		$mail = $mailQuery->fetch();
		
		if($mail>0) 
		{ 		
			$delQuery = $db->prepare('UPDATE newsletter SET email = "wypisano" WHERE email = :email');
			$delQuery->bindValue(':email', $email, PDO::PARAM_STR);
			$delQuery->execute();
			
		} 
		else 
		{			
			$_SESSION['nul_email']=$mail;
			header('Location: unsubscribe.php');
		}
	}	
} 
else 
{	
	header('location: unsubscribe.php');
	exit();	
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="utf-8">
    <title>Zapisanie się do newslettera</title>
    <meta name="description" content="Używanie PDO - zapis do bazy MySQL">
    <meta name="keywords" content="php, kurs, PDO, połączenie, MySQL">

    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">

        <header>
            <h1>Newsletter</h1>
        </header>

        <main>
            <article>
                <p>Bye!</p>
            </article>
			<p><a href="index.php">Newsletter</a></p><br/>
        </main>

    </div>

</body>
</html>