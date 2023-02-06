<?php 

	$prname = $_GET['page'];
	
	require_once 'database.php';
		
	$result = $db->prepare("SELECT * from pages WHERE prname=:prname");
	$result->bindValue(':prname', $prname, PDO::PARAM_STR);
	$result->execute();								
																														
	while($row = $result->fetch(PDO::FETCH_ASSOC))
	{																						
		$id=$row['id'];
		$date=$row['date'];			
		$prname=$row['prname'];
		$fullname=$row['fullname'];
		$price=$row['price'];
		$descr=$row['descr'];
		$yt=$row['yt'];
		$blprice=$row['blprice'];
		$pcs=$row['pcs'];
		$sizeL=$row['sizeL'];
		$sizeW=$row['sizeW'];
		$sizeH=$row['sizeH'];
		$imghght=$row['imghght'];
		$category=$row['category'];				
	}

