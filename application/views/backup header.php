<div class="w3ls-header" id="scrollablees"><!--header-one--> 
			<!-- <div class="w3ls-header-left">
				<p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
			</div> -->
			<div class="w3ls-header-right" >
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<?php if ($this->session->userdata('logged_in') == true) {
          				?>
          				<li><a href="<?php echo base_url(); ?>Pagein/MyProfile">My Profile</a></li>
          				<li><a href="<?php echo base_url(); ?>Auth/Logout">Logout</a></li>
          				<?php } else { ?>
          		
							<li><a href="<?php echo base_url(); ?>Auth/Login">Login </a></li> 
							<li><a href="<?php echo base_url(); ?>Auth/Register">Sign Up</a></li>
							<?php } ?>
							
							
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
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url(); ?>Page/OrderAnda" class="dropdown-toggle"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Status Order<?php  if ($this->session->userdata('logged_in') == TRUE) {?> 
						<span class="badge">
						<?php echo $amountorder; ?> 
						</span>
						<?php }  ?></a>
					</li>

					<li class="dropdown head-dpdn" id="opencart">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="openexpanded"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart<?php  if ($this->session->userdata('logged_in') == TRUE) {?> 
						<span class="badge">
						<?php echo $amountCart; ?> 
						</span>
						<?php }  ?></a>
						<ul  id="ul1" class="dropdown-menu dropdown-cart" role="menu">
              <li id="minicart"></li>

              <?php 

		
	
          				
              if (empty($list_cart)): ?>
							 <li class="text-center" >Silahkan Berbelanja</li>
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
              <?php endif; 
              ?>
             
						
						 
						
				
              
              
          </ul>
					</li> 
					



					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url(); ?>page/contactus" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a>
					</li> 
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