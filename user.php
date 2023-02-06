<?php

	echo '<p style="font-size: 20px">Hello '.$_SESSION['user'];
	
	echo '<p style="font-size: 20px"><b>E-mail</b>: '.$_SESSION['email'];
	echo "<br/><b>Data dołączenia</b>: ".$_SESSION['signup']."</p>";
	if((isset($_SESSION['type'])) && ($_SESSION['type'])=='root') echo '<br/><b><a href="addProduct.php">ADD PRODUCT</a><br/><br/>';
		
	echo date('Y-m-d H:i:s')."<br/><br/><br/>";
		
