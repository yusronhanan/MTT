
<div class="products">	 
		<div class="container">
			
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
				<?php
				if(empty($list_product)){
						echo '<li class="active">';
						echo 'Pencarian tidak ditemukan';
						echo '</li>'; 
					}
					else{
				 if (empty($keyword)): ?>
					<li><a href="index.html">Home</a></li>
					<li class="active">Products</li>
					<?php if (!empty($category_name)) { 
						echo '<li class="active">';
						echo $category_name;
						echo '</li>'; 
						}?>
				</ol> 
				<?php endif;
					if  (!empty($keyword)): ?>
					<li><a href="index.html">Hasil Pencarian dari</a></li>
					<li class="active"><?php echo $keyword; ?></li>
					  
						
				</ol>
					<?php endif;

					}?>
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
				<?php if (!empty($category_name)) { 
						echo '<h4>';
						echo $category_name;
						echo '</h4>'; 
						}
						else{
						echo '<h4>';
						echo 'Products';
						echo '</h4>'; 
							}?>
					
					
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					<!-- loop product -->
					<?php
					if(empty($list_product)){
						echo '<h2>';
						echo 'Maaf, barang yang anda cari tidak ditemukan';
						echo '</h2>';
					}
					else{
                        $i = 1;
                        foreach ($list_product as $product): ?>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6><?php echo $i++; ?> <br> <!-- 20% --></h6></div>
							<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $product->pro_id ?>"><img title="<?php echo $product->name ?>" src="<?php echo base_url(); ?>/assets/images/e2.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5 title="<?php echo $product->name ?>"><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $product->pro_id ?>/<?php echo $product->category_id ?>"><?php echo substr($product->name,0,14)."..<br>"; ?></a></h5> 
								<h6><!-- <del>$700</del> -->Rp. <?php echo $product->price; ?></h6> 
								<input type="hidden" id="id_produk" name="" value="<?php echo $product->pro_id;?>" />
							<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $product->name;?>" /> 
							<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $product->price;?>" /> 
							<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
							<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $product->merchant_id;?>"/>
						<input type="hidden" id="id1" class="this" name="" value=""/> 
						
													<?php if ($product->approve == '1') { ?>
													<button type="submit" id="tambahcart"  class="this btn btn-primary"><i class="fa fa-cart-plus"></i> </button>
													<?php
												} else{

													?>
													<button class="this btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Produk Iklan"><i class="fa fa-info"></i> </button>
													<?php } ?>
					
						<input type="hidden" id="wishlist_id" name="" value="<?php echo $product->wish_id;?>" />
						
							<?php
						if (array_key_exists($product->pro_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
						<button class="btn btn-primary" id="deletewishlist"><i class="fa fa-heart" aria-hidden="true"></i></button>
						<?php 

					} else{
						?>
							<button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>	
						<?php } ?>



				</div>
						</div>
					</div>
					 <?php endforeach;
					 } ?>
					 <!-- loop product end -->
					<div class="clearfix"> </div>
				</div>
				<!-- add-products --> 
				
				<!-- //add-products -->
			
			<div class="col-md-3 rsidebar">
				<!-- <div class="rsidebar-top">
					<div class="slider-left">
						<h4>Filter By Price</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - $100 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100 - $200 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200 - $250  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$250 - $300 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$350 - $400 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$450 - $500  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label> 
						</div> 
					</div>
					<div class="sidebar-row">
						<h4> Electronics</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Mobile phones<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Smart phones</a></li>										
									<li class="subitem1"><a href="#">Accessories</a></li>										
									<li class="subitem1"><a href="#">Tabs</a></li>										
								</ul>
							</li>
							<li class="item2"><a href="#">Large appliances<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Refrigerators </a></li>										
									<li class="subitem1"><a href="#">Washing Machine </a></li>										
									<li class="subitem1"><a href="#">Kitchen Appliances </a></li>										
									<li class="subitem1"><a href="#">Air Conditioner</a></li>										
								</ul>
							</li>
							<li class="item3"><a href="#">Entertainment<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#"> Tv & Accessories</a></li>										
									<li class="subitem1"><a href="#">Digital Camera </a></li>										
									<li class="subitem1"><a href="#">Computer</a></li>										
								</ul>
							</li>
						</ul>
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					<!-- </div> -->
					<!-- <div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
					<div class="sidebar-row">
						<h4>Color</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>White</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Blue</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> Brown</label> 
						</div>
					</div>			 
				</div> -->
				<!-- <div class="related-row">
					<h4>Related Searches</h4>
					<ul>
						<li><a href="products.html">Air conditioner </a></li>
						<li><a href="products.html">Gaming</a></li>
						<li><a href="products.html">Monitors</a></li>
						<li><a href="products.html">Pc </a></li>
						<li><a href="products.html">Food Processors</a></li>
						<li><a href="products.html">Oven</a></li>
						<li><a href="products.html">Purifiers</a></li>
						<li><a href="products.html">Oven</a></li>
						<li><a href="products.html">Cleaners</a></li>
						<li><a href="products.html">Small devices</a></li>
					</ul>
				</div> -->
				<!-- <div class="related-row">
					<h4>YOU MAY ALSO LIKE</h4>
					<div class="galry-like">  
						<a href="#"><img src="<?php echo base_url(); ?>/assets/images/e1.png" class="img-responsive" alt="img"></a>             
						<h4><a href="products.html">Ini iklan</a></h4> 
						<h5>ini harga iklan</h5>       
					</div>
				</div> -->
			</div>
			<div class="clearfix"> </div>
		
		</div>
	</div>
	<!--//products-->

	<script type="text/javascript">
		// $("#keyword").keyup(function(event) {
  //   			if( this.value.length < 4 ) return;
  //           var keyword = $(this).val();
  //           if (keyword != "") {
  //              // alert(keyword);
  //               $.ajax({
  //                   url: "<?php echo base_url(); ?>Page/Product",
  //                   type: 'post',
  //                   data: {keyword: keyword},
  //                   success: function(e){
  //                       $('body').load(window.location.href);
  //                   }
  //               });
  //           }
  //       });
	</script>