<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<div class="login-body">
			<?php if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
      	  } ?>
				<form action="<?php echo base_url(); ?>Auth/Login" method="post" enctype="multipart/form-data">
					<input type="text" class="user" name="email" placeholder="Enter your email or your username" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="submit" value="Login" name="submit">
					<!-- <div class="forgot-grid">
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div> -->
				</form>
			</div>  
			<h6> Not a Member? <a href="<?php echo base_url(); ?>Auth/Register">Sign Up Now »</a> </h6> 
			<div class="login-page-bottom social-icons">
				<h5>Recover your social account</h5>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-instagram icon instagram"> </a></li> 
				</ul> 
			</div>
		</div>
	</div>
	<!-- //login-page