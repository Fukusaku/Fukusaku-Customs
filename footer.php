<article>

<section>

	<div class="newsletter">
		<form method="post" action="savemail.php" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
    
		 <input type="email" name="email" placeholder="Email address" <?= isset($_SESSION['given_email']) ? 'value="'.$_SESSION['given_email'].'"' : ''?>>

		 <input type="submit" value="SUBSCRIBE">
    
			<?php
				if(isset($_SESSION['given_email']))
				{
					echo '<p>Invalid email address!</p>';
					unset($_SESSION['given_email']);
				}
				if(isset($_SESSION['err_email']))
				{
					echo '<p>Email address already exists!</p>';
					unset($_SESSION['err_email']);
				}	
			?>
		</form>
		<p><a href="unsubscribe.php"><h1>Unsubscribe</h1></a></p><br/>
	</div>

</section>

<section>

	<div class="socials">
		<div class="socialdivs">
			<div class="ig">
				<a href="https://www.instagram.com/fukusakuu/" target="_blank" class="sociallink"><i class="icon-instagram"></i></a>
			</div>
				  
			<div class="fli">
				<a href="https://www.flickr.com/people/fukusaku/" target="_blank" class="sociallink"><i class="icon-flickr"></i></a>
			</div>
				  
			<div class="reb">
				<a href="https://rebrickable.com/users/Fukusaku/mocs/" target="_blank" class="sociallink"><i class="icon-rebel"></i></a>
			</div>
				  
			<div class="fb">
				<a href="https://www.facebook.com/fukulego" target="_blank" class="sociallink"><i class="icon-facebook-squared"></i></a>
			</div>
			
			<div style="clear: both;"></div>
		</div>
	</div>

</section>

<section>
		
	<div class="info">
		All rights reserved &copy; 2022. Thank you for your visit.
	</div>

</section>

</article>