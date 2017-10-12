<style type="text/css">
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>
<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Create Your account</h3>  
			<div class="login-body">
			<?php if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
      	  } ?>
				<form action="<?php echo base_url(); ?>Auth/Register" method="post" enctype="multipart/form-data">
					
					<input type="text" class="user" name="first_name" placeholder="Enter First Name" required="">

					<input type="text" class="user" name="last_name" placeholder="Enter Last Name" required="">
				
				
					<input type="text" class="user" name="username" placeholder="Enter Username" required="">
			
		
					<!-- <div class="input-group"> -->
					<input type="text" class="user" name="telp" placeholder="Enter Phone Number (Telkomsel)" required="">
					<!-- <span class="input-group-addon">@telkomsel.co.id</span> -->
					<!-- </div> -->
					<input type="text" class="user" name="email" placeholder="Enter email" required="">
					 
					 <input type="text" class="form-control" name="location" placeholder="Enter your working area in Telkomsel" required="">
					 <textarea  required="" name="address" class="form-control" placeholder="Enter your address (Jl. Gatot Subroto no. 09)"  ></textarea>

               		<!-- <input  type="file" id="hide" required="" name="profil" class="form-control" style="margin-top:8px;margin-bottom:8px" /> -->
               		<div class="fileUpload btn btn-primary pull-left">
					    <span>Upload Your Photo Profile</span>
					    <input type="file" type="file" id="hide" required="" name="profil" class="form-control upload" style="margin-top:8px;margin-bottom:8px" />

					</div>
					<input type="password" name="password" class="lock" placeholder="Enter Your Password" required="">
					<input type="password" name="password2" class="lock" placeholder="Re-enter your Password" required="">
<input type="date" name="last_update" class="visible-xs" value="<?php echo date('Y-m-d'); ?> " />
					<input type="submit" name="submit" value="Sign Up ">
					<!-- <div class="forgot-grid">
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div> -->
				</form>
			</div>  
			<h6>Already have an account? <a href="<?php echo base_url() ?>Auth/Login">Login Now »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 

	<script type="text/javascript">
	document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
	</script>