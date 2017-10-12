<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Jual Beli MTT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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
  window.onload = unseen_notification;
      

        </script>


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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.js"></script>  -->
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

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
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

</head>

<body>


<div class="header">
<div class="w3ls-header" id="scrollablees"><!--header-one--> 
			<!-- <div class="w3ls-header-left">
				<p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
			</div> -->
			<div class="w3ls-header-right" >
				<ul>
				

          					<li class="dropdown head-dpdn" id="openNotifikasi">
						<a href="#" class="dropdown-toggle notification_null" data-toggle="dropdown" role="button" aria-expanded="false" id="openexpanded"><i class="fa fa-bell" aria-hidden="true"></i> Notification
						
						<span class="badge" id="amountNotifikasi">
						
						</span>
						
					</a>
						<ul  class="dropdown-menu dropdown-cart" id="mininotif" role="menu">
 
            
						
						 
						
				
              
              
          </ul>
					</li> 
					

					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
						
          				<li><a href="<?php echo base_url(); ?>Pagein/MyProfile">My Profile</a></li>
          				<li><a href="<?php echo base_url(); ?>Auth/Logout">Logout</a></li>
          			</ul>
          		</li>
             
						
						 
						
							
							
					
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
		</div>
		


<?php 
$this->load->view($main_view); 
?>
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
	<!-- countdown.js -->	
	<script src="<?php echo base_url(); ?>/assets/js/jquery.knob.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.throttle.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.classycountdown.js"></script>
	

	<script src="<?php echo base_url(); ?>/assets/js/jquery.menu-aim.js"> </script>
	<script src="<?php echo base_url(); ?>/assets/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>
<script type="text/javascript">
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
  
	</script>
</script>