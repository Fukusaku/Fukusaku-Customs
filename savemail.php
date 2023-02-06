<?php

session_start();

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';*/

if (isset($_POST['email'])) 
{	
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	
	if(empty($email)) 
	{		
		$_SESSION['given_email'] = $_POST['email'];
		header('Location: index.php');		
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
			$_SESSION['err_email']=$mail;
			header('Location: index.php');			
		} 
		else 
		{			
			$query = $db->prepare('INSERT INTO newsletter VALUES (NULL, :email)');
			$query->bindValue(':email', $email, PDO::PARAM_STR);
			$query->execute();
			header('Location: index.php');
		}
		
		/*try {
			$maill = new PHPMailer();
			
			$maill->isSMTP();
			$maill->SMTPDebug = SMTP::DEBUG_SERVER;
			
			$maill->Host = 'smtp.gmail.com';
			$maill->Port = 465;
			$maill->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$maill->SMTPAuth = true;
			
			$maill->Username = 'fukussaku.com'; 
			$maill->Password = 'xwjvsoherclzajdn'; 
			
			$maill->CharSet = 'UTF-8';
			$maill->setFrom('no-reply@domena.pl', 'Fukusaku');
			$maill->addAddress($email); 
			$maill->addReplyTo('biuro@domena.pl', 'Biuro');

			$maill->isHTML(true);
			$maill->Subject = 'Fukusaku customs newsletter';
			$maill->Body = '<html>
	        <head>
	          <title>Newsletter</title>
	        </head>
	        <body>
	          <h1>Hello!</h1>
	          <p>Thank you for subscribing to our newsletter.</a>
	          </p>
	          <hr>
	          <p>Administratorem Twoich danych osobowych jest:</p>
	          <p>--------</p>
	          <p>Unsubscribe: <a href="https://domena.pl/unsubscribe">UNSUB</a>
	          </p>
	        </body>
	        </html>
	    	';

	    	$maill->addAttachment('img/???.jpg');
			
			$maill->send();
			
		} catch(Exception $e) {
			echo "Sending error: {$maill->errorInfo}";
		}*/
	}
	
} 
else 
{	
	header('location: index.php');
	exit();	
}


