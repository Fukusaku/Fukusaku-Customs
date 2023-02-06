<?php

	session_start();
	
	session_unset();
	
	if (isset($_COOKIE['koszyk'])) 
	{
		$_COOKIE['koszyk']=NULL; 
		setcookie("koszyk", NULL, -1, "/"); 
	} 
		
	header('Location: index.php');



