<?php

	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['pass'])))
	{
		header('Location: log.php');
		exit();
	}
	
	require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	try
	{
		$connect = new mysqli($host, $db_user, $db_password, $db_name);
		
		if($connect->connect_errno!=0)
		{
			throw new Exception(mysqli_connect_errno());
		}
		else
		{
			$login = $_POST['login'];
			$pass = $_POST['pass'];
			
			$login = htmlentities($login, ENT_QUOTES, "UTF-8");
			$_SESSION['fr_login']=$login;
			if($result = $connect->query(sprintf("SELECT * FROM users WHERE user='%s'",
			mysqli_real_escape_string($connect,$login))))
			{
				$ilu_userow = $result->num_rows;
				if($ilu_userow == 1)
				{
					$row = $result->fetch_assoc();
					
					if(password_verify($pass,$row['pass']))  
					{
						$_SESSION['logged']=true;
						
						$_SESSION['id']=$row['id'];
						$_SESSION['user'] = $row['user']; 
						$_SESSION['email']=$row['email'];
						$_SESSION['signup']=$row['signup'];
						$_SESSION['type']=$row['type'];
						
						unset($_SESSION['error']);
						$result->close();
						header('Location: profil.php');
					}
					else
					{					
						$_SESSION['error'] = '<h2 style="color: red">Incorrect password!</h2>';
						header('Location: log.php');
					}
				} 
				else
				{
					$_SESSION['error'] = '<span style="color: red">Incorrect login!</span>';
					header('Location: log.php');
				}
			}
			else
			{
				throw new Exception($connect->error);
			}
			$connect->close();
		
		}
	}
	catch(Exception $e)
	{
		echo '<span class="error">Server error</span>';	
	}

