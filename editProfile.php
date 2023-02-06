	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<form action="editProfile2.php" method="post">
	
		CHANGE PASSWORD<br/><br/>
		Enter old password: <br/><input type="text" name="pass" value="<?php
			if(isset($_SESSION['fre_pass']))
			{
				echo $_SESSION['fre_pass'];
				unset($_SESSION['fre_pass']);
			}				
			?>"/><br/>
		<?php
			if(isset($_SESSION['e_pass']))
			{
				echo '<div class="error">'.$_SESSION['e_pass'].'</div>';
				unset($_SESSION['e_pass']);
			}	
        ?>
		<br/>
		
		New password: <br/><input type="password" name="pass1" value="<?php
			if(isset($_SESSION['fre_pass1']))
			{
				echo $_SESSION['fre_pass1'];
				unset($_SESSION['fre_pass1']);
			}				
			?>"/><br/>
		<?php
			if(isset($_SESSION['e_pass2']))
			{
				echo '<div class="error">'.$_SESSION['e_pass2'].'</div>';
				unset($_SESSION['e_pass2']);
			}	
        ?>
		
		Repeat password: <br/><input type="password" name="pass2" value="<?php
			if(isset($_SESSION['fre_pass2']))
			{
				echo $_SESSION['fre_pass2'];
				unset($_SESSION['fre_pass2']);
			}				
			?>"/><br/><br/>
		
	
		
		<div class="g-recaptcha" style="display: inline-block" data-sitekey="6LfkIpMhAAAAAFIzIkuKcb-4boZ__Naf2REeZ557"></div>
		<?php
			if(isset($_SESSION['e_bot']))
			{
				echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
				unset($_SESSION['e_bot']);
			}	
        ?>
		
        <br/>
		<input type="submit" value="SAVE CHANGES"/>
		
		<br/><br/><br/>
	
	</form>

