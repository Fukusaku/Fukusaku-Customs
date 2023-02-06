<?php 

	session_start();
	
	if(($_SESSION['type'])!=='root')
	{
		header('Location: index.php');
		exit();
	}
	
	$prname=$_POST['prname'];
	$fullname=$_POST['fullname'];
	$price=$_POST['price'];
	$descr=$_POST['descr'];
	$yt=$_POST['yt'];
	$blprice=$_POST['blprice'];
	$pcs=$_POST['pcs'];
	$sizeL=$_POST['sizeL'];
	$sizeW=$_POST['sizeW'];
	$sizeH=$_POST['sizeH'];
	$imghght=$_POST['imghght'];
	$category=$_POST['category'];

	$author=$_SESSION['user'];
	
	$descr = htmlentities($descr, ENT_QUOTES, "UTF-8");
	
	$all_ok = false;
	
	$_SESSION['cr_prname']=$prname;
	$_SESSION['cr_fullname']=$fullname;
	$_SESSION['cr_price']=$price;
	$_SESSION['cr_descr']=$descr;
	$_SESSION['cr_yt']=$yt;
	$_SESSION['cr_blprice']=$blprice;
	$_SESSION['cr_pcs']=$pcs;
	$_SESSION['cr_sizeL']=$sizeL;
	$_SESSION['cr_sizeW']=$sizeW;
	$_SESSION['cr_sizeH']=$sizeH;
	$_SESSION['cr_imghght']=$imghght;
	$_SESSION['cr_category']=$category;
	
	//ADDING MAIN PHOTO
	if(isset($_FILES['photo']))
	{ 					
		switch($_FILES['photo']['error'])
		{
			case 0;
				if ($_FILES['photo']['type'] == "image/jpeg" || $_FILES['photo']['type'] == "image/png" || $_FILES['photo']['type'] == "image/gif")
				{
					$tmp_name = $_FILES["photo"]["tmp_name"];
					$tmp_name = htmlentities($tmp_name, ENT_QUOTES, "UTF-8");
					move_uploaded_file($tmp_name, "img/".$prname."1.jpg"); 
					$all_ok = true;
				}
				else
				{
					$_SESSION['error'] = '<h2 style="color: red">not a photo!</h2>';
					header('Location: addProduct.php');exit();
				}						
				break;
			case 1;
				$_SESSION['error'] = '<h2 style="color: red">File to big!(php.ini)</h2>';
				header('Location: addProduct.php');exit();
				break;
			case 2;
				$_SESSION['error'] = '<h2 style="color: red">File too big!</h2>';
				header('Location: addProduct.php');exit();
				break;
			case 3;
				$_SESSION['error'] = '<h2 style="color: red">File not full!(php.ini)</h2>';
				header('Location: addProduct.php');exit();
				break;
			case 4;
				$_SESSION['error'] = '<h2 style="color: red">File not chosen</h2>';
				header('Location: addProduct.php');exit();
				break;
			default:
				echo "Unknown error";
		}
	}
		
	//ADDING THE REST OF THE PHOTOS
	if(isset($_FILES['photos']))
	{ 							
		
		for($i=0;$i<=count($_FILES['photos']['name'])-1;$i++)
		{ 
			if(!array_key_exists($i,$_FILES['photos']['name']))
			{				
				$_SESSION['error'] = '<h2 style="color: red">Array key doesn\'t exist</h2>';
				header('Location: addProduct.php');					
				exit();
			}
			else
			{ 						 							  
				if(file_exists("img/".$prname.($i+2).".jpg"))
				{
					$_SESSION['error'] = '<h2 style="color: red">File exists, change name and try again</h2>';
					header('Location: addProduct.php');						
					exit();
				}
				else
				{ 
					$tmp_name = $_FILES["photos"]["tmp_name"];  
					move_uploaded_file($_FILES['photos']['tmp_name'][$i], "img/".$prname.($i+2).".jpg");
					$all_ok = true;					
				}
			}	
		}  												
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
			
			if (!$prname || !$fullname || !$price || !$descr || !$blprice || !$pcs || !$sizeL || !$sizeW || !$sizeH || !$imghght)
			{
				$_SESSION['error'] = '<h2 style="color: red">Fill all gaps!</h2>';
				header('Location: addProduct.php');
			}
			else
			{				
				$resultid = $connect->query("SELECT * FROM pages ORDER BY id DESC LIMIT 1");
				
				$er = $resultid->fetch_row()[0] ?? false;
				$id=$er+1;

				$resultid->close();
												
				if(($connect->query("INSERT INTO pages VALUES ('$id', '$author', now(), '$prname', '$fullname', '$price', '$descr', '$yt', '$blprice', '$pcs', '$sizeL', '$sizeW', '$sizeH', '$imghght', '$category');")) && $all_ok == true)
				{
					echo $connect->affected_rows.' new product added.<a href=template.php?page='.$prname.'> View!</a>';
					//header('Location: profil.php');
					unset($_SESSION['error']);

					unset($_SESSION['cr_prname']);
					unset($_SESSION['cr_fullname']);
					unset($_SESSION['cr_price']);
					unset($_SESSION['cr_descr']);
					unset($_SESSION['cr_yt']);
					unset($_SESSION['cr_blprice']);
					unset($_SESSION['cr_pcs']);
					unset($_SESSION['cr_sizeL']);
					unset($_SESSION['cr_sizeW']);
					unset($_SESSION['cr_sizeH']);
					unset($_SESSION['cr_imghght']);
					unset($_SESSION['cr_category']);					
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
		echo '<span class="error">Server error</span>';
		//echo '<br/>Dev info: '.$e;		
	}
	$connect->close();
	

	
	
	
		

	