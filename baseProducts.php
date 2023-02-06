<?php

class miniatures
{				
	public function __construct()
	{
		$config = [
					'host' => 'localhost', 
					'user' => 'root', 
					'password' => '', 
					'database' => 'proj'
				];

		try {
			
			$this->db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
				PDO::ATTR_EMULATE_PREPARES => false, 
				PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => TRUE,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			]);
			
		} catch (PDOException $error) {
			
			echo $error;
			exit('Database error');	
		}
	}
	
	public function index()
	{		
		$result = $this->db->prepare("SELECT * FROM pages ORDER BY date DESC limit 5");
		$result->execute();								
																															
		while($row = $result->fetch(PDO::FETCH_ASSOC))
		{																						
			$_SESSION['prname'] = $row['prname']; 
			$_SESSION['fullname']=$row['fullname'];
			$_SESSION['price']=$row['price'];	
			
			echo '<div class="entryi"><div class="entryimgi" style="text-transform: uppercase">';
			echo '<a href=template.php?page='.$_SESSION['prname'].'><img src="img/'.$_SESSION['prname'].'1.jpg" alt="'.$_SESSION['prname'].'" /><br/><h1>'.$_SESSION['fullname'].'</h1></a></div>';											
			echo '<div class="entrytxti"><p>€'.$_SESSION['price'].'</p><h3>INSTRUCTIONS ONLY</h2></div></div>';				
		}
	}
	
	public function all()
	{
		$result = $this->db->prepare("SELECT * FROM pages ORDER BY date DESC");
		$result->execute();								
																															
		while($row = $result->fetch(PDO::FETCH_ASSOC))
		{																						
			$_SESSION['prname'] = $row['prname']; 
			$_SESSION['fullname']=$row['fullname'];
			$_SESSION['price']=$row['price'];	
			
			echo '<div class="entry"><div class="entryimg" style="text-transform: uppercase">';
			echo '<a href=template.php?page='.$_SESSION['prname'].'><img src="img/'.$_SESSION['prname'].'1.jpg" alt="'.$_SESSION['prname'].'" /><br/><h1>'.$_SESSION['fullname'].'</h1></a></div>';											
			echo '<div class="entrytxt"><p>€'.$_SESSION['price'].'</p><h3>INSTRUCTIONS ONLY</h2></div></div>';				
		}
	}

	public function categories($category)
	{
		$result = $this->db->prepare("SELECT * FROM pages WHERE category=:category ORDER BY date DESC");
		$result->bindValue(':category', $category, PDO::PARAM_STR);
		$result->execute();								
																															
		while($row = $result->fetch(PDO::FETCH_ASSOC))
		{																						
			$_SESSION['prname'] = $row['prname']; 
			$_SESSION['fullname']=$row['fullname'];
			$_SESSION['price']=$row['price'];	
			
			echo '<div class="entry"><div class="entryimg" style="text-transform: uppercase">';
			echo '<a href=template.php?page='.$_SESSION['prname'].'><img src="img/'.$_SESSION['prname'].'1.jpg" alt="'.$_SESSION['prname'].'" /><br/><h1>'.$_SESSION['fullname'].'</h1></a></div>';											
			echo '<div class="entrytxt"><p>€'.$_SESSION['price'].'</p><h3>INSTRUCTIONS ONLY</h2></div></div>';				
		}
	}

	public function slider()
	{
		//require_once 'database.php';
		
		$result = $this->db->prepare("SELECT * FROM pages ORDER BY date DESC limit 4");
		$result->execute();								
																															
		while($row = $result->fetch(PDO::FETCH_ASSOC))
		{																						
			$_SESSION['prname'] = $row['prname']; 
			$_SESSION['fullname']=$row['fullname'];
			$_SESSION['descr']=$row['descr'];	
						
			echo '<div class="collectionsSlide"><div class="collectionsy"><a href=template.php?page='.$_SESSION['prname'].'><img src="img/'.$_SESSION['prname'].'1.jpg" alt="" /></a></div>';
			
			echo '<div class="collectionsy"><a href=template.php?page='.$_SESSION['prname'].'><h1>'.$_SESSION['fullname'].'</h1><p>'.$_SESSION['descr'].'</p><h2>SHOP NOW</h2></a><br/><div class="button" onclick="prevslide(index)" style="cursor:pointer;"><</div><div class="button" onclick="nextslide(index)" style="cursor:pointer;">></div></div></div>';			
		}
	}

	public function cart($id)
	{		
		$result = $this->db->prepare("SELECT * FROM pages WHERE id = :id");
		$result->bindValue(':id', $id, PDO::PARAM_STR);
		$result->execute();								
																															
		while($row = $result->fetch(PDO::FETCH_ASSOC))
		{																						
			$_SESSION['prname'] = $row['prname']; 
			$_SESSION['fullname']=$row['fullname'];
			$_SESSION['price']=$row['price'];	
			
			echo '<div class="cart-entry"><div class="cart-img">';
			echo '<a href=template.php?page='.$_SESSION['prname'].'><img src="img/'.$_SESSION['prname'].'1.jpg" alt="'.$_SESSION['prname'].'" /></a></div>';											
			echo '<div class="cart-txt"><a href=template.php?page='.$_SESSION['prname'].'><h1>'.$_SESSION['fullname'].'</h1></a><p>€'.$_SESSION['price'].'</p><br/></div>';				
		}
	}	
}					