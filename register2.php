<?php

	session_start();
	
	if(isset($_POST['email']))
	{
		$all_OK=true;

		$nick=$_POST['nick'];

		if((strlen($nick)<3) || (strlen($nick)>20))
		{
			$all_OK=false;
			$_SESSION['e_nick']="Nickname lenght must be 3 - 20 signs";
		}

		if(ctype_alnum($nick)==false)
		{
			$all_OK=false;
			$_SESSION['e_nick']="Only letters and numbers";
		}

		$email=$_POST['email'];
		$emailB=filter_var($email,FILTER_SANITIZE_EMAIL);
		
		if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$all_OK=false;
			$_SESSION['e_email']="E-mail address not correct";
		}

		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];

		if((strlen($pass1)<8) || (strlen($pass1)>20))
		{
			$all_OK=false;
			$_SESSION['e_pass']="Password lenght must be 8 - 20 signs";
		}

		if($pass1!=$pass2)
		{
			$all_OK=false;
			$_SESSION['e_pass']="Passwords not the same";
		}
		
		$pass_hash=password_hash($pass1,PASSWORD_DEFAULT);
		
		if(!isset($_POST['terms']))
		{
			$all_OK=false;
			$_SESSION['e_terms']="Accept terms&conditions";
		}

		$sekret='6LfkIpMhAAAAANaua-jHh724i1bTOK19Ei_UdWoS';
		
		$sprawdz=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);

		$odpowiedz=json_decode($sprawdz);
		
		if($odpowiedz->success==false)
		{
			$all_OK=false;
			$_SESSION['e_bot']="Confirm you are not a droid";
		}

		$_SESSION['fr_nick']=$nick;
		$_SESSION['fr_email']=$email;
		$_SESSION['fr_pass1']=$pass1;
		$_SESSION['fr_pass2']=$pass2;
		if(isset($_POST['terms'])) $_SESSION['fr_terms']=true;

		require_once "connect.php";
		
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try
		{
			$connect=new mysqli($host, $db_user, $db_password, $db_name);
			if($connect->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				$result = $connect->query("SELECT id FROM users WHERE email='$email'");
				
				if(!$result) throw new Exception($connect->error);
				
				$ile_takich_maili=$result->num_rows;
				if($ile_takich_maili>0)
				{
					$all_OK=false;
					$_SESSION['e_email']="An account with this email address already exists";
				}

				$result = $connect->query("SELECT id FROM users WHERE user='$nick'");
				
				if(!$result) throw new Exception($connect->error);
				
				$ile_takich_nickow=$result->num_rows;
				if($ile_takich_nickow>0)
				{
					$all_OK=false;
					$_SESSION['e_nick']="Nick already taken";
				}

				if($all_OK==true)
				{
					if($connect->query("INSERT INTO users VALUES(NULL,'$nick','$pass_hash','$email',now(),'user')"))
					{
						$_SESSION['succesfulSignup']=true;
						header('Location: welcome.php');
					}
					else
					{
						throw new Exception($connect->error);
					}
				}
				
				$connect->close();
			}
		}
		catch(Exception $e)
		{
			echo '<span class="error">Server error. Try again later</span>';
			//echo '<br/>Dev info: '.$e;
		}
	}
	


