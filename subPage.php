<?php
class subPage
{
	public function validate($v)
	{
	
		if (isset($_GET['page']))
		{
			$allowed_pages = ["user", "editProfile", "starwars", "cars", "games"];
			
			$page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
			
			if (!empty($page))
			{
			
				if (!in_array($page, $allowed_pages))
					echo "Error";
				
				else
				{
					if (is_file($page.$v))
						include($page.$v);
					else
						echo "Error";
				}
			}
		}
		else include("user".$v);	
	}
}



