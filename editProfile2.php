<?php

	session_start();
	
	if(isset($_POST['pass']))
	{
		$all_OK=true;
		
		$pass=$_POST['pass'];
		$pass_hash=password_hash($pass,PASSWORD_DEFAULT);
		
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		
		if((strlen($pass1)<8) || (strlen($pass1)>20))
		{
			$all_OK=false;
			$_SESSION['e_pass2']="Password must be between 8 and 20 signs";
		}
		
		if($pass1!=$pass2)
		{
			$all_OK=false;
			$_SESSION['e_pass2']="Passwords are not the same";
		}
		
		$pass_hash2=password_hash($pass1,PASSWORD_DEFAULT);
		
		$sekret='?????????';
		
		$sprawdz=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);

		$odpowiedz=json_decode($sprawdz);
		
		if($odpowiedz->success==false)
		{
			$all_OK=false;
			$_SESSION['e_bot']="Confirm you are not a robot";
		}
		
		$_SESSION['fre_pass']=$pass;
		$_SESSION['fre_pass1']=$pass1;
		$_SESSION['fre_pass2']=$pass2;
		
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
				$id = $_SESSION['id'];
				$result = $connect->query("SELECT pass FROM users WHERE id='$id'");
				
				if(!$result) throw new Exception($connect->error);
				
				$pass_count=$result->num_rows;
				
				if($pass_count>0)
				{	
					$row = $result->fetch_assoc();			
					if(password_verify($pass,$row['pass'])==false)  
					{
						$all_OK=false;
						$_SESSION['e_pass']="Incorrect password";
					}
				}
				else
				{
					$all_OK=false;
					$_SESSION['e_pass']="Incorrect password";
				}
	
				if($all_OK==true)
				{
					if($connect->query("UPDATE users SET pass='$pass_hash2' WHERE id='$id'"))
					{
						session_unset();
						header('Location: passChanged.php');
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
