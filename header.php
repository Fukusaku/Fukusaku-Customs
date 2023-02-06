		<div class="news"><a href="#">PRE-ORDER SoullessOne Grievous Starfighter Instructions and SAVE 20%</a></div>
		
	    <h1 class="logo">Fukusaku customs</h1>
		
		<nav id="topnav">
		
		    <ul class="menu">
			    <li><a href="index.php">FUKUSAKU</a></li>
			    <li><a href="all.php">ALL INSTRUCTIONS</a></li>
			    <li><a href="categories.php">ALL CATEGORIES</a></li>
			    <li><a href="#">FAQ</a></li>
			    <li><a href="#">CONTACT US</a></li>
			</ul>
		
			<div class="site-actions">
		
				<div class="site-actions-account">
				
				<?php
					if(isset($_SESSION['user']))
					{
						echo '<a href="profil.php" id="customer_login_link">'.$_SESSION['user'].'</a>';
					}
					else echo '<a href="log.php" id="customer_login_link">Login</a>'
				?>
			
					
			
				</div>
		
				<div class="site-actions-cart" data-header-site-actions-cart>
					<a href="cart.php" aria-label="View cart">
			
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
							<path fill="currentColor" fill-rule="evenodd" d="M9 18v2H.77c-.214 0-.422-.09-.567-.248-.145-.158-.218-.37-.2-.586L1.03 6.86c.035-.404.364-.706.77-.706h2.314V4.872C4.114 2.186 6.306 0 9 0s4.886 2.186 4.886 4.872v1.282H16.2c.406 0 .735.302.77.705l1.027 12.306c.018.216-.055.428-.2.586-.145.158-.353.248-.568.248H9v-2H2l.852-10H9V0v8h6.148L16 18H9zM6 4.89V6h6V4.89C12 3.295 10.654 2 9 2S6 3.296 6 4.89z"/>
						</svg>

						<span class="site-actions-cart-label " data-cart-item-count><?php if(isset($_SESSION['quant'])) echo $_SESSION['quant']; else echo '0' ?></span>
					</a>
				</div>

				<div class="site-actions-search">
				
					<a href="search.php" aria-label="Search">

						<svg class="" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<path fill="currentColor" d="M18.2779422,16.9108333 L13.7837755,12.4166667 C14.6912755,11.2533333 15.1887755,9.8325 15.1887755,8.33333333 C15.1887755,6.5525 14.4946088,4.87833333 13.2354422,3.62 C11.9771088,2.36 10.3029422,1.66666667 8.52210884,1.66666667 C6.74127551,1.66666667 5.06710884,2.36 3.80877551,3.62 C2.54960884,4.87833333 1.85544218,6.5525 1.85544218,8.33333333 C1.85544218,10.1141667 2.54960884,11.7883333 3.80877551,13.0466667 C5.06710884,14.3066667 6.74127551,15 8.52210884,15 C10.0212755,15 11.4421088,14.5033333 12.6054422,13.595 L17.0996088,18.0883333 L18.2779422,16.9108333 L18.2779422,16.9108333 Z M8.52210884,13.3333333 C7.18627551,13.3333333 5.93127551,12.8133333 4.98710884,11.8691667 C4.04210884,10.925 3.52210884,9.66916667 3.52210884,8.33333333 C3.52210884,6.99833333 4.04210884,5.7425 4.98710884,4.79833333 C5.93127551,3.85333333 7.18627551,3.33333333 8.52210884,3.33333333 C9.85794218,3.33333333 11.1129422,3.85333333 12.0571088,4.79833333 C13.0021088,5.7425 13.5221088,6.99833333 13.5221088,8.33333333 C13.5221088,9.66916667 13.0021088,10.925 12.0571088,11.8691667 C11.1129422,12.8133333 9.85794218,13.3333333 8.52210884,13.3333333 L8.52210884,13.3333333 Z"></path>
						</svg>

					</a>
				</div>
			</div>
			
			<div style="clear: both;"></div>
			
		</nav>
		
	<script src="jquery-3.6.0.min.js"></script>
  
    <script>

		$(document).ready(function() {
		var NavY = $('#topnav').offset().top;
		 
		var stickyNav = function(){
		var ScrollY = $(window).scrollTop();
			  
		if (ScrollY > NavY) { 
			$('#topnav').addClass('sticky');
		} else {
			$('#topnav').removeClass('sticky'); 
		}
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
			stickyNav();
		});
		});
		
	</script>