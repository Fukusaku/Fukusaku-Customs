<?php

	if (isset($_COOKIE['koszyk'])) 
	{
		$koszyk=$_COOKIE['koszyk']; 
	}
	else 
	{
		$koszyk=0;		
	}

	if(isset($_POST['id'])) $id=$_POST['id'];

	if(!isset($_POST['ile2']))
	{
		if(isset($_POST['ile'])) $ile=$_POST['ile'];
		
		if (isset($ile)&&$ile<0) unset($ile);
		
		function dodaj($koszyk,$id,$ile) 
		{
			$zakupy = explode("|",$koszyk);
		  
			for ($i=0;$i<count($zakupy)-1;$i++) 
			{
				$p = explode("#",$zakupy[$i]);
				if ($p[0]==$id) 
				{
					if (isset($ile)) $p[1]=$ile+$p[1];
					else $p[1]++;
					$jest=true;
				}
			if ($p[1]>0) $nowy .= "$p[0]#$p[1]|";
			}
			if (!$jest) $nowy .= "$id#$ile|";
			return $nowy;
		}
		
		if (isset($id)&&$id<>"") 
		{
			$koszyk = dodaj($koszyk,$id,$ile);
			setcookie("koszyk", $koszyk, 0, "/");			
		}
	}
	else
	{
		$ile=$_POST['ile2'];
		if ($ile<0) unset($ile);
		function zmien($koszyk,$id,$ile) 
		{
			$zakupy = explode("|",$koszyk);
		  
			for ($i=0;$i<count($zakupy)-1;$i++) 
			{
				$p = explode("#",$zakupy[$i]);
				if ($p[0]==$id) 
				{
					if (isset($ile)) $p[1]=$ile;
					else $p[1]++;
					//$jest=true;
				}
				if ($p[1]>0) $nowy .= "$p[0]#$p[1]|";
			}
			//if (!$jest) $nowy .= "$id#1|";
			return $nowy;
		}
		
		if ($id<>"") 
		{
			$koszyk = zmien($koszyk,$id,$ile);
			setcookie("koszyk", $koszyk, 0, "/");		
		}
	}
	
	$zakupy = explode("|",$koszyk);
		
	function cart($zakupy)
	{
		if(count($zakupy)!=1)
		{
			for ($i=0;$i<count($zakupy)-1;$i++) 
			{
				$p = explode("#",$zakupy[$i]);
				
				require_once('baseProducts.php');
				$a = new miniatures;
				//echo $a->cart($p[0]);
						
				echo $a->cart($p[0])."<div class=\"cart-button\"><form action=\"cart2.php\" method=\"post\" style=\"display:inline;\">
				<input type=\"hidden\" name=\"id\" value=\"$p[0]\" />
				<input type=\"number\" name=\"ile2\" value=\"$p[1]\" />
				<input type=\"submit\" value=\" change \" /></form></div>";
				echo "<div class=\"cart-button2\"><form action=\"cart2.php\" method=\"post\" style=\"display:inline;\">
				<input type=\"hidden\" name=\"id\" value=\"$p[0]\" />
				<input type=\"hidden\" name=\"ile2\" value=\"0\" />";
				
				$p[$i] = explode("#",$zakupy[$i]);
				$quant[$i]=$p[$i][1];
				$price[$i]=number_format($_SESSION['price']*$quant[$i], 2);
				
				echo "<input type=\"submit\" value=\" remove \" /></form><br/><br/>€".$price[$i]."</div>";
				echo "<div style=\"clear: both;\"></div></div>"; 
				
				/*echo "<p>
				Wygląd koszyka w cookies:<br />$koszyk
				</p>";*/		
			}
		}
		else echo '<div class="cart-entry"><h1 style="text-align: center"></br>CART IS EMPTY</h1></div>';

		global $sum_price;

		if(isset($quant)&&$quant!=0)
		{
			$sum_price = number_format(array_sum($price), 2);
		}
		else 
		{
			$sum_price="0.00";
		}
	}

	for ($i=0;$i<count($zakupy)-1;$i++) 
	{
		$p[$i] = explode("#",$zakupy[$i]);
		$quant[$i]=$p[$i][1];
	}
	
	if(isset($quant)&&$quant!=0)
	{
		$sum_q = array_sum($quant);
		$_SESSION['quant']=$sum_q;
	}
	else 
	{
		$_SESSION['quant']=0;
	}
	
	if (isset($id)) 
	{
		header("Location: cart.php");
		exit;
	}
	


	
