<?php 

	session_start();
	
	$id=$_POST['id'];	
	$prnameE=$_POST['prname'];
	$fullnameE=$_POST['fullname'];
	$priceE=$_POST['price'];
	$descrE=$_POST['descr'];
	$ytE=$_POST['yt'];
	$blpriceE=$_POST['blprice'];
	$pcsE=$_POST['pcs'];
	$sizeLE=$_POST['sizeL'];
	$sizeWE=$_POST['sizeW'];
	$sizeHE=$_POST['sizeH'];
	$imghghtE=$_POST['imghght'];
	$categoryE=$_POST['category'];

	$authorE=$_SESSION['user'];
		
	$descrE = htmlentities($descrE, ENT_QUOTES, "UTF-8");
		
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
			if (!$prnameE || !$fullnameE || !$priceE || !$descrE || !$blpriceE || !$pcsE || !$sizeLE || !$sizeWE || !$sizeHE || !$imghghtE)
			{
				$_SESSION['error'] = '<h2 style="color: red">Fill all gaps!</h2>';
				
				$resultname = $connect->query("SELECT prname FROM pages WHERE id = '$id'");
				
				header('Location: editProduct.php?page='.$resultname.'');
				$resultid->close();
			}
			else
			{
				$_SESSION['ed_prname']=$prnameE;
				$_SESSION['ed_fullname']=$fullnameE;
				$_SESSION['ed_price']=$priceE;
				$_SESSION['ed_descr']=$descrE;
				$_SESSION['ed_yt']=$ytE;
				$_SESSION['ed_blprice']=$blpriceE;
				$_SESSION['ed_pcs']=$pcsE;
				$_SESSION['ed_sizeL']=$sizeLE;
				$_SESSION['ed_sizeW']=$sizeWE;
				$_SESSION['ed_sizeH']=$sizeHE;
				$_SESSION['ed_imghght']=$imghghtE;
				$_SESSION['ed_category']=$categoryE;
												
				if($connect->query("UPDATE pages SET author='$authorE', prname='$prnameE', fullname='$fullnameE', price='$priceE', descr='$descrE', yt='$ytE', blprice='$blpriceE', pcs='$pcsE', sizeL='$sizeLE', sizeW='$sizeWE', sizeH='$sizeHE', imghght='$imghghtE', category='$categoryE' WHERE id='$id'"))
				{
					echo $connect->affected_rows.' product updated.<a href=template.php?page='.$prnameE.'> View!</a>';
					//header('Location: profil.php');
					unset($_SESSION['error']);										
				}                 
				else
				{					
					throw new Exception($connect->error);
				}
			}
		}
	}
	catch(Exception $e)
	{
		echo '<span class="error">Server error. Try again later</span>';	
	}
	$connect->close();
		
	