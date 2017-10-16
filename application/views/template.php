
<!DOCTYPE html>
<html lang="en">
<head>
<title>Jual Beli MTT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script type="text/javascript">
        function unseen_notification() {
        	var view = 'view';
   	
            $.ajax({
    		url:"<?php echo base_url(); ?>pagein/unseen_notification",
    		method:"POST",
    		data:{view:view},
    		// dataType:"json",
    		success:function(e){
    			var data = e.split("|");
    			// alert(data);
    			$('ul#mininotif').html(data[0]);
    			if (data[1] == '0') {
                    	 	$('#amountNotifikasi').addClass('hidden');
                    	 }
                  else{
                    	 		$('#amountNotifikasi').removeClass('hidden');	
                    	 }
    			$('#amountNotifikasi').html(data[1]);
    		}
    	});
        }
 		function mini_status() {
        	var view = 'view';
   	
            $.ajax({
    		url:"<?php echo base_url(); ?>pagein/mini_status",
    		method:"POST",
    		data:{view:view},
    		// dataType:"json",
    		success:function(e){
    			var data = e.split("|");
    			// alert(data);
    			$('ul#ministatus').html(data[0]);
    			if (data[1] == '0') {
                    	 	$('#amountOrder').addClass('hidden');
                    	 }
                  else{
                    	 		$('#amountOrder').removeClass('hidden');	
                    	 }
    			$('#amountOrder').html(data[1]);
    		}
    	});
        }
        function load_config(){
        	var view = 'view';
   			
            $.ajax({
    		url:"<?php echo base_url(); ?>page/config_image",
    		method:"POST",
    		data:{view:view},
    		// dataType:"json",
    		success:function(e){
    			var data = e.split("|");
    		
        		$('#SLIDE1').html('<img class="slide-image img-responsive"  src="<?php echo base_url()?>assets/images/'+data[1]+'" alt="SLIDE1">');
        		$('#SLIDE2').html('<img class="slide-image img-responsive"  src="<?php echo base_url()?>assets/images/'+data[2]+'" alt="SLIDE2">');
        		$('#SLIDE3').html('<img class="slide-image img-responsive"  src="<?php echo base_url()?>assets/images/'+data[3]+'" alt="SLIDE3">');

    			
        		
        }
        });
            e.preventDefault();
        }

        
        window.onload = unseen_notification;
        window.onload = mini_status;
        window.onload = load_config;

        </script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>

<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="<?php echo base_url(); ?>/assets/css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="<?php echo base_url(); ?>/assets/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="<?php echo base_url(); ?>/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="<?php echo base_url(); ?>/assets/css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->   
<link href="<?php echo base_url(); ?>/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider --> 
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->





<!-- js -->

<script src="<?php echo base_url(); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery-2.2.3.min.js"></script> 
<!--flex slider-->
<script defer src="<?php echo base_url(); ?>/assets/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="<?php echo base_url(); ?>/assets/js/imagezoom.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="<?php echo base_url(); ?>/assets/js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
<script src="<?php echo base_url(); ?>/assets/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        // $('.header-two').scrollToFixed();  
        $('#scrollablees').scrollToFixed();  
        
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
              
             marginTop: $('.scrollablees').outerHeight(true) + 10, 
                
                zIndex: 999
            });
        });
    });
</script>


<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>	<!-- scroll to fixed--> 
<script src="<?php echo base_url(); ?>/assets/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.js" charset="utf-8"></script> -->
<script type="text/javascript">


</script>

<style type="text/css">
	ul.dropdown-cart{
    min-width:250px;
}
ul.dropdown-cart li .item{
    display:block;
    padding:3px 10px;
    margin: 3px 0;
}
ul.dropdown-cart li .item:hover{
    background-color:#f3f3f3;
}
ul.dropdown-cart li .item:after{
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

ul.dropdown-cart li .item-left{
    float:left;
}
ul.dropdown-cart li .item-left img,
ul.dropdown-cart li .item-left span.item-info{
    float:left;
}
ul.dropdown-cart li .item-left span.item-info{
    margin-left:10px;   
}
ul.dropdown-cart li .item-left span.item-info span{
    display:block;
}
ul.dropdown-cart li .item-right{
    float:right;
}
ul.dropdown-cart li .item-right button{
    margin-top:14px;
}
.glyphicon.glyphicon-shopping-cart {
    font-size: 18px;
}
.aktif {
    
    color: red;
}
</style>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets//dist/css/skins/_all-skins.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">
</head>

<body>

<?php

                $notif_log = $this->session->flashdata('notif_log_password');
                if (!empty($notif_log)) {
                    $notif_log_password = $this->session->flashdata('notif_log_password');
                }

?>

<?php if ($this->session->userdata('logged_in') == false && empty($notif_log)) {
	if (empty($modallogin) ) {
		
	
          				?>
	<div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-login" aria-hidden="true"></i> Sign In</h4>
				</div>
				<div class="modal-body modal-body-sub">
				<form action="<?php echo base_url(); ?>Auth/Login" method="post" enctype="multipart/form-data"> 
					<h5>Email or Username </h5> 
					<input type="text" name="email" class="form-control" placeholder="Your email or your password here" required="">
					<h5>Password </h5>
					<input type="password" name="password" class="form-control" placeholder="Your password here" required="">
					</br>
					</br>
					<input type="submit" name="submit" class="close2">
				</form>
					<h5>Don't have an account?<a href="<?php echo base_url() ?>Auth/Register" style="color:green"> Sign Up here </h5></a>

					<button type="button" class="close2" data-dismiss="modal" aria-hidden="true">Skip & Explore</button>

				</div>
			</div>
		</div>
	</div>
	<script>
		$('#myModal88').modal('show');
	</script>

	<?php }
	}
	 ?> 
	<!-- header -->
	<div class="header">
<div class="w3ls-header" id="scrollablees"><!--header-one--> 
			<!-- <div class="w3ls-header-left">
				<p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
			</div> -->
			<div class="w3ls-header-right" >
				<ul>
					<?php if ($this->session->userdata('logged_in') == true) {
          				?>
					
          		<li class="dropdown head-dpdn" id="opencart">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="openexpanded"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart<?php  if (!empty($amountCart)) {?> 
						<span class="badge">
						<?php echo $amountCart; ?> 
						</span>
						<?php }  ?></a>
						<ul  id="ul1" class="dropdown-menu dropdown-cart" role="menu">
              <li id="minicart"></li>

              <?php 

		
	
          				
              if (empty($list_cart)): ?>
							 <li class="text-center" >Silahkan Berbelanja</li>
							</ul>
						</li>
					<?php endif ?>

					<?php if (!empty($list_cart)): ?>
              <!-- loop cart -->
               <?php
                        $i = 1;
                        foreach ($list_cart as $cart): 
						// $i++
						 ?>
               <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span><?php echo substr($cart->name,0,9); ?>...</span>
                            <span><?php echo $cart->price; ?>   @ <?php echo $cart->value ?></span>
                        </span>
                    </span>
                    <span class="item-right">
                    	<input type="hidden" id="id_cart" class="this" name="" value="<?php echo $cart->id_cart;?>" />
                        <button id="delcart" class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <?php endforeach; ?>
              
              <!-- loop cart end -->
				<li class="divider"></li>
              <li><a class="text-center" href="<?php echo base_url(); ?>page/cart">View Cart</a></li>
              <li><a class="text-center" href="<?php echo base_url(); ?>pagein/checkout">Checkout</a></li>
              	</ul> 
					</li> 
              <?php endif; 
              ?>

          					<li class="dropdown head-dpdn" id="openNotifikasi">
						<a href="#" class="dropdown-toggle notification_null" data-toggle="dropdown" role="button" aria-expanded="false" id="openexpanded"><i class="fa fa-bell" aria-hidden="true"></i> Notification
						
						<span class="badge" id="amountNotifikasi">
						
						</span>
						
					</a>
						<ul  class="dropdown-menu dropdown-cart" id="mininotif" role="menu">
 
            
						
						 
						
				
              
              
          </ul>
					</li> 
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="openexpanded"><i class="fa fa-shopping-basket"></i> Status Order
					<span class="badge" id="amountOrder">
						
						</span></a>
						<ul  class="dropdown-menu dropdown-cart" id="ministatus" role="menu">

				          </ul>
					</li>

					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
						
          				<li><a href="<?php echo base_url(); ?>Pagein/MyProfile">My Profile</a></li>
          				<li><a href="<?php echo base_url(); ?>Auth/Logout">Logout</a></li>
          			</ul>
          		</li>
             
						
						 
						
				
              
              
          



          				<?php } else { ?>
          		<li class="dropdown head-dpdn">
						<a href="<?php echo base_url(); ?>Auth/Login" class="dropdown-toggle"><i class="fa fa-sign-in aria-hidden="true"></i> Login</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url(); ?>Auth/Register" class="dropdown-toggle"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
					</li>

							<?php } ?>
							
							
					
					<!-- <li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="offers.html">Cash Back Offers</a></li> 
							<li><a href="offers.html">Product Discounts</a></li>
							<li><a href="offers.html">Special Offers</a></li> 
						</ul> 
					</li>  -->
					<!-- <li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="offers.html">Product Gift card</a></li> 
							<li><a href="offers.html">Occasions Register</a></li>
							<li><a href="offers.html">View Balance</a></li> 
						</ul> 
					</li> --> 
				

					
					<!-- <li class="dropdown head-dpdn">
						<a href="card.html" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit Card</a>
					</li>  -->
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url(); ?>page/help" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>

		<div class="header-two">
			<div class="container">
				<div class="header-logo">
				<a href="<?php echo base_url(); ?>page">
					<img src="<?php echo base_url(); ?>/assets/images/mtt.png" width="165px">
					<!-- <h6>Beli sekaligus sedekah.</h6>  -->
					</a>
				</div>	
				<div class="header-search">
					<form action="<?php echo base_url(); ?>Page/filter_product" method="get" enctype="multipart/form-data">
						<input type="search" name="keyword" id="keyword" placeholder="Cari berdasarkan nama produk atau nama merchant..." value="<?php if(!empty($keyword)){ echo $keyword; } ?>" required="">

						<input type="submit" id="search" class="btn btn-default" aria-label="Left Align" value="Search"/>
						
					</form>
					
				</div>
				<div class="">
					
				</div>
					 
			
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div>


	</div>

		<?php 
		$this->load->view($main_view);
		 ?>

<!-- subscribe -->
<div class="col-md-12"></div>
	<div class="subscribe"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#fbmtt" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#twmtt" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#gmtt" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#igmtt" class="fa fa-instagram icon instagram"> </a></li>
					 
				</ul> 
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#playstoremtt" class="fa fa-android"></a></li>

					<!-- <li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li> -->
				</ul>
				<ul>
					<li><h4><a href="<?php echo base_url(); ?>page/contactus" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a></h4></li>
				</ul> 
			</div> 
			<div class="col-md-6 subscribe-right">
				<h4>Type your email for newsletter and promo !</h4>  
				<form action="#" method="post"> 
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe -->

<div class="copy-right"> 
		<div class="container">
			<p>© 2017 JualBeli MTT . All rights reserved | Design by <a href="http://w3layouts.com"> MTT Digital.</a></p>
		</div>
	</div>


	  <!-- modal notif validasi -->
  <div class="modal fade product_view" id="notif_no_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="" id="close_notif" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    
                    <div class="col-md-12 product_content">
                     
                       <h5>Maaf, anda harus login terlebih dahulu.</h5>
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php if (!empty($notif_log)): ?>
    
<input type="hidden" name="notif" class="this" id="notif_log_password" value="<?php echo $notif_log_password; ?>">
    <div class="modal fade product_view" id="notif_pop_password" style="position: fixed;top: 50% !important;left: 50%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="" id="close_pop_password" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    
                    <div class="col-md-12 product_content">
                    
                     	<h5><?php echo $notif_log_password ?></h5>
               
                       
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          <?php endif ?>
</div>

<!-- modal notif validasi  end-->

<!-- batas untuk script href bawah-->
	<!-- cart-js -->
	<!-- <script src="<?php echo base_url(); ?>/assets/js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>   -->
	<!-- //cart-js -->	

	<!-- add cart jquery -->
	<script type="text/javascript">
	
	$(document).ready(function() {
	$(".this").each(function(i) {
    	
    	// $("#opencart").attr('class', "dropdown open");
        // $("#openexpanded").attr('aria-expanded', "true");
    	$("#id1").attr('id', (i + 1));
        $("#id_produk").attr('id', "id_produk" + (i+1));
        $("#nama_produk").attr('id', "nama_produk" + (i+1));
    	$("#harga_produk").attr('id', "harga_produk" + (i+1));
    	$("#jumlah_produk").attr('id', "jumlah_produk" + (i+1));
    	$("#merchant_id").attr('id', "merchant_id" + (i+1));
    
    });

  


		$(".this").each(function() {
    var notif_log_password =document.getElementById("notif_log_password").value;
    	if (notif_log_password != '' || notif_log_password != null ) {
    						$("#notif_pop_password").addClass('in');
                        	$("#notif_pop_password").attr('aria-hidden', "false");
                        	$("#notif_pop_password").attr('style', "display:block");
    	}
    	   });
    //get id tambah cart who tambahcart active=true
	 $("button#tambahcart").mouseenter(function(){
        $(this).addClass("intro");
        // var id_produk = document.getElementById("id_produk1").value;
        // alert(id_produk);
    });
    $("button#tambahcart").mouseleave(function(){
        $(this).removeClass("intro");
    });

  
    });
	
	$("#close_notif").click(function(event){
        $("#notif_no_add").removeClass('in');
    	$("#notif_no_add").attr('aria-hidden', "true");
    	$("#notif_no_add").attr('style', "display:none");
    });
    $("#close_pop_password").click(function(event){
        $("#notif_pop_password").removeClass('in');
    	$("#notif_pop_password").attr('aria-hidden', "true");
    	$("#notif_pop_password").attr('style', "display:none");
    });
   
$( "button#print" ).click(function() {
  $(this).prev().submit();
});
  		 $('button#tambahcart').click(function(event) {
  		 	
        	var index = $(this).prev().attr('id');
       		var jumlah_produk = document.getElementById("jumlah_produk"+index).value;
       		var id_produk = document.getElementById("id_produk"+index).value;
       		var harga_produk = document.getElementById("harga_produk"+index).value;
       		var nama_produk = document.getElementById("nama_produk"+index).value;
			var merchant_id = document.getElementById("merchant_id"+index).value;
			// alert(id_produk + merchant_id + nama_produk + harga_produk + jumlah_produk);
			
			 if ( id_produk == "" ||  nama_produk == "" || harga_produk == "" || jumlah_produk == "" || merchant_id == "") {
                 alert('Anda belum memilih produk');
                
            }
            else{
            	// alert(id_produk + merchant_id + nama_produk + harga_produk + jumlah_produk);
            	$.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Cartin',
                    type: 'post',
                    data: {id : id_produk, jumlah : jumlah_produk, merchant : merchant_id},
                    success: function(e){
                        if (e == "true") {
                        $('body').load(window.location.href);
                          $("#opencart").attr('class', "dropdown open");
                            $("#openexpanded").attr('aria-expanded', "true");
                       		// setTimeout(function(){// wait for 5 secs(2)
				        	// location.reload(); // then reload the page.(3)
				      		// }, 001);
                        } else if(e == "false") {
                            alert('Tambah Gagal');
                        }
                        else if(e == "logged_id_null"){
                        	$("#notif_no_add").addClass('in');
                        	$("#notif_no_add").attr('aria-hidden', "false");
                        	$("#notif_no_add").attr('style', "display:block");
                        }
                    }
                });

            } 
	  
        	});

  	$("button#tambahwishlist").on('click', tambahwishlist);
  	$("button#deletewishlist").on('click', deletewishlist);	  
  		 	function tambahwishlist(){
  		 	
        	var index = $(this).prev().prev().prev().attr('id');
       		var id_produk = document.getElementById("id_produk"+index).value;
       	
			// alert(index);
			
			 if ( id_produk == "") {
                 alert('Anda belum memilih produk');
                
            }
            else{
            	// alert(id_produk + merchant_id + nama_produk + harga_produk + jumlah_produk);
            	$.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Wishproductin',
                    type: 'post',
                    context: this,
                    data: {id : id_produk},
                    success: function(e){
                        
                         if(e == "false") {
                            alert('Tambah Wishlist Gagal');
                        }
                        else if(e == "wish_null"){
                        	alert('Anda sudah menambahkannya ke wishlist');
                        }
                        else if(e == "logged_id_null"){
                        	$("#notif_no_add").addClass('in');
                        	$("#notif_no_add").attr('aria-hidden', "false");
                        	$("#notif_no_add").attr('style', "display:block");
                        }
                        else  {
                         if($(this).hasClass('w3ls-cart w3ls-cart-like')){
                        $(this).attr('id',"deletewishlist");
                        $(this).html('<i class="fa fa-heart" aria-hidden="true"></i> Unwishlist');
                        
                        $(this).off('click').on('click', deletewishlist);
                        $(this).prev().val(e);



                        }
                        else{
                        $(this).attr('id',"deletewishlist");
                        $(this).children().removeClass("fa fa-heart-o").addClass("fa fa-heart");

                        $(this).off('click').on('click', deletewishlist);
                        $(this).prev().val(e);
                        }
                    }
                        
                    }
                });
            }
            
            } 
	  
      
  		  	function deletewishlist() {
  		 	
        	 if (confirm('Are you sure you want to un wishlist this?')) {
        	 	var id_wish =  $(this).prev().val();
        		
			 if ( id_wish == "" ) {
                 alert('Tidak ada data keranjang');
            }
            else{
            	// alert(id_cart);
            	$.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Wishproductdel',
                    type: 'post',
                    context: this,
                    
                    data: {id : id_wish},
                    success: function(e){
                        if (e == "true") {
                        if($(this).hasClass('w3ls-cart w3ls-cart-like')){
                        $(this).attr('id',"tambahwishlist");
                        $(this).html('<i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist');
                        
                        $(this).off('click').on('click', tambahwishlist);
                        $(this).prev().val('');
                        }
                        else{
                        $(this).attr('id',"tambahwishlist");
                        $(this).children().removeClass("fa fa-heart-o").addClass("fa fa-heart-o");

                        $(this).off('click').on('click', tambahwishlist);
                        $(this).prev().val('');
                           }
                        } else {
                            alert('Menghapus wishlist gagal');
                        }
                    }
                });

            } 
	  }
	}
        	

  		 $('button#delcart').click(function(event) {
  		 	
        	 if (confirm('Are you sure you want to delete this?')) {
        	 	var id_cart = $(this).prev().val();
        	
			 if ( id_cart == "" ) {
                 alert('Tidak ada data keranjang');
            }
            else{
            	// alert(id_cart);
            	$.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Cartdel',
                    type: 'post',
                    data: {id : id_cart},
                    success: function(e){
                        if (e == "true") {
                        	$('body').load(window.location.href);
                        	// setTimeout(function(){// wait for 5 secs(2)
				        	// location.reload(); // then reload the page.(3)
				      		// }, 001);
                        	// $('body').load('<?php echo base_url(); ?>Page');
                            // $("#opencart").attr('class', "dropdown open");
                            // $("#openexpanded").attr('aria-expanded', "true");
                        } else {
                            alert('Menghapus keranjang gagal');
                        }
                    }
                });

            } 
	  }
        	});

$("button#favoritemerchant").on('click', favoritemerchant);
  	$("button#unfavoritemerchant").on('click', unfavoritemerchant);	 
		function favoritemerchant(){
            var id_merchant = $(this).next().val();
       
            // alert(id_merchant);
            
             if ( id_merchant =="") {
                 alert('Data Merchant Tidak Ada');
                
            }
            else{
                // alert(id_produk + merchant_id + nama_produk + harga_produk + jumlah_produk);
             $.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Merchant_favorite',
                    type: 'post',
                    context: this,
                    data: {id : id_merchant},
                    success: function(e){
                        if(e == "false") {
                            alert('Tambah Merchant Gagal');
                        }
                        else if(e == "wish_null"){
                         alert('Anda sudah menambahkannya ke merchant favorite');
                        }
                        else if(e == "logged_id_null"){

                         $("#notif_no_add").addClass('in');
                         $("#notif_no_add").attr('aria-hidden', "false");
                         $("#notif_no_add").attr('style', "display:block");

                        }
                        else {
                        $(this).attr('id',"unfavoritemerchant");
                        $(this).children().html('Favorited');
                        $(this).removeClass('btn-dropbox').addClass('btn-facebook');
                        $(this).prev().val(e);
                        
                        $(this).off('click').on('click', unfavoritemerchant);
                        
                        }
                    }
                });

            } 
      
            }
		function unfavoritemerchant(){
	
            if (confirm('Are you sure you want to un favorite this?')) { 
            var id_merchant = $(this).prev().val();
       		
            // alert(id_merchant);
            
             if ( id_merchant =="") {
                 alert('Data Merchant Tidak Ada');
                
            }
            else{
                // alert(id_produk + merchant_id + nama_produk + harga_produk + jumlah_produk);
           $.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Merchant_favoritedel',
                    type: 'post',
                    context: this,
                    data: {id : id_merchant},
                    success: function(e){
                        if (e == "true") {
                        $(this).attr('id',"favoritemerchant");
                        $(this).children().html('Favorite');
                        $(this).removeClass('btn-facebook').addClass('btn-dropbox');
                        $(this).prev().val('');
                        $(this).off('click').on('click', favoritemerchant);
                        } else {
                            alert('Unfavorite Merchant Gagal.');
                        }
                    }
                });

            } 
	  }
	

        	}
	// $(document).on("click","#test-element",function() {
	$('.notification_null').click(function(event) {
  		 	var view = 'notification_null';
                    	 // $('#amountNotifikasi').html('');

        		if ($(this).parent().hasClass("dropdown head-dpdn open")) {
        	 	$.ajax({
                    url: '<?php echo base_url(); ?>Pagein/unseen_notification',
                    type: 'post',
                    data: {view : view},
                    success: function(e){
                    	 if (e == '0') {
                    	 	$('#amountNotifikasi').addClass('hidden');
                    	 }
                    	 else{
                    	 		$('#amountNotifikasi').removeClass('hidden');	
                    	 }
                    	 $('#amountNotifikasi').html(e);

                    	 // unseen_notification();
                    }
                });
        	 			}	
        	});


	
    setInterval(function(){ unseen_notification() }, 3000);
    setInterval(function(){ mini_status() }, 3000);

	</script>



	<!-- add cart jquery -->
	<!-- countdown.js -->	
	<!-- <script src="<?php echo base_url(); ?>/assets/js/jquery.knob.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.throttle.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.classycountdown.js"></script>
 -->

	<!-- menu js aim -->
	<script src="<?php echo base_url(); ?>/assets/js/jquery.menu-aim.js"> </script>
	<script src="<?php echo base_url(); ?>/assets/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
  <!--   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script> -->
</body>
</html>