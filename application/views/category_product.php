
<style type="text/css">
		.filter-col{
    padding-left:10px;
    padding-right:10px;
}
.contact-box {
  background-color: #ffffff;
  border: 1px solid #e7eaec;
  padding: 20px;
  margin-bottom: 20px;
}
.contact-box > a {
  color: inherit;
}
.contact-box.center-version {
  border: 1px solid #e7eaec;
  padding: 0;
}
.contact-box.center-version > a {
  display: block;
  background-color: #ffffff;
  padding: 20px;
  text-align: center;
}
.contact-box.center-version > a img {
  width: 80px;
  height: 80px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.contact-box.center-version address {
  margin-bottom: 0;
}
.contact-box .contact-box-footer {
  text-align: center;
  background-color: #ffffff;
  border-top: 1px solid #e7eaec;
  padding: 15px 20px;
}



.btn-dropbox:hover {
  opacity: 0.9;
  
  
}
.btn-dropbox:hover span {display:none;}

.btn-dropbox:hover:before {
    content: "Favorited"
}



.btn-facebook:hover {

  opacity: 0.9;
  
}
.btn-facebook:hover span {display:none;}

.btn-facebook:hover:before {
    content: "Unfavorite"
}
	</style>	
<?php 
$category_name = '';
if ($category_id == '11') { 
			$category_name = 'TSO Cafe';
		}
		if ($category_id == '12') { 
			$category_name = 'Kesehatan';
		}
	if ($category_id == '13') { 
			$category_name = 'Snack';
		}
		if ($category_id == '14') { 
			$category_name = 'Perlengkapan';
		}
		if ($category_id == '15') { 
			$category_name = 'Fashion';
		}
		if ($category_id == '16') { 
			$category_name = 'Properti';
		}
		if ($category_id == '17') { 
			$category_name = 'Buku';
		}
		if ($category_id == '18') { 
			$category_name = 'Travel dan Umroh';
		}
		if ($category_id == '19') { 
			$category_name = 'Otomotif';
		}
		if ($category_id == '20') { 
			$category_name = 'Usaha dan Jasa';
		}
		if ($category_id == '21') { 
			$category_name = 'Kerajinan';
		}
		if ($category_id == '22') { 
			$category_name = 'Hobi';
		}
		if ($category_id == 'all') { 
			$category_name = 'Semua Kategori';
		}
		
?>
<div class="products">	 
		<div class="container">
				<div class="row">
        <div id="filter-panel" class=" filter-panel">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" role="form" method="get" action="<?php echo base_url() ?>page/filter_product">
                         <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-searchby">Cari berdasarkan :</label>
                            <select id="pref-searchby" name="searchby" class="form-control">
                            	<?php 
                            	$array_searchby = ['product','merchant'];
                            	$array_search_by = ['Nama Produk','Nama Merchant'];
                            	for($i = 1; $i > count($array_searchby); $i++) {
                            	 	if ($search_by == $array_searchby[$i]) {
                            		
                            	 ?>
                            	 <option value="<?php echo $array_searchby[$i] ?>" selected="selected"	><?php echo $array_search_by[$i] ?></option>
                            	 <?php
                            	 } else{
                            	 ?>
                            	 	<option value="<?php echo $array_searchby[$i] ?>"><?php echo $array_search_by[$i] ?></option>
                            	 
                            	 <?php
                            	}
                            }
                            	 ?>

                            	 
                                <option value="product" selected="selected"	>Nama Produk</option>
                                <option value="merchant">Nama Merchant</option>
                                
                            </select>                                
                        </div>
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-category">Kategori:</label>
                            <select id="pref-category" name="category" class="form-control">
                              <?php 
                              if ($category_id == 'all') {
								?>
							
                              <option selected="selected" value="all">Semua Kategori</option>
                            <?php 
                            }
                            else{
                            	?>
                              <option value="all">Semua Kategori</option>
                            	
                            <?php
                            }

                            ?>  
                              <?php  foreach ($list_kategori as $kategori) {
                              if ($category_id == $kategori->id) {
								?>
								
									<option selected="selected" value="<?php echo $kategori->id; ?>"><?php echo $kategori->name; ?></option>
                              
								<?php                              		
                              }
                              else {
                              ?>

                              <option value="<?php echo $kategori->id; ?>"><?php echo $kategori->name; ?></option>
                              <?php
                              } 
                          }?>
                                
                            </select>                                
                        </div> <!-- form group [rows] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-minimum">Rp.</label>
                            <input type="number" step="1000" min="0" placeholder="Harga Minimum" class="form-control input-sm" id="pref-minimum" name="minimum" value="<?php if(!empty($minimum)){ echo $minimum;} ?>">
                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-maksimum">Rp.</label>
                            <input type="number" step="1000" min="1000" placeholder="Harga Maksimum" class="form-control input-sm" id="pref-maksimum" name="maksimum" value="<?php if(!empty($maksimum)){ echo $maksimum;} ?>">
                        </div>
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Urutkan:</label>
                            <select id="pref-orderby" name="order_by" class="form-control">
                            	<?php 
                            	$array_order_by = ['Terbaru','Termurah','Termahal'];
                            	$array_order_val = ['new','asc_price','desc_price'];
                            	 for($i = 0; $i < count($array_order_by); $i++) {
                            	 	if ($order_by == $array_order_val[$i]) {
                            		?>
                            		<option value="<?php echo $array_order_val[$i] ?>" selected="selected"	><?php echo $array_order_by[$i] ?></option>
                            		<?php 		
                            	 	}
                            	 	else{
                            	 		?>
                            	 		<option value="<?php echo $array_order_val[$i] ?>"><?php echo $array_order_by[$i] ?></option>
                            	 	<?php
                            	 	}
                            	 }
                            	 
                            	 ?>
                                
                            </select>                                
                        </div> <!-- form group [order by] --> 
                     	<input type="hidden" name="keyword" value="<?php if(!empty($keyword)){ echo $keyword; } ?>">
                        <div class="form-group pull-right">    
                            
                            <input type="submit"  class="btn btn-default filter-col pull-right" id="run" value="Run Fliters">
                                <!-- <span class="glyphicon glyphicon-record"></span> Run Filters -->
                              
                        </div>

                    </form>
                </div>
            </div>
        </div>    
 <!--        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-cog"></span> Advanced Search
        </button> -->
	</div>
				<!-- breadcrumbs --> 
			
					<!-- loop product -->
					<?php
					if (!empty($list_product)) {
						?>
							<ol class="breadcrumb breadcrumb1">
					<li><a href="#">Home</a></li>
					<li class="active">
					<?php 
					if (!empty($keyword)) {
						echo 'Search';
					}
					else{
						echo 'Products'; 
					}
					?>
					



				</li>
					<?php if (!empty($category_name)) { 
						echo '<li class="active">';
						echo $category_name;
						echo '</li>'; 
						}?>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
				<?php
				if (!empty($keyword)) {
					echo '<h4>';
				 	echo 'Search';
				 	echo '</h4>';
				 } 
				else if (!empty($category_name)) { 
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

				<div class="products-row" id="product-output">
						<?php
						
					
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
							<button type="submit" id="tambahcart"  class="this btn btn-primary" ><i class="fa fa-cart-plus"></i> </button>
							<input type="hidden" id="wishlist_id" name="" value="<?php echo $product->wish_id;?>" />
						
									<?php
						if (in_array($product->pro_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
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
					 }?>
					 <!-- loop product end -->
					<div class="clearfix"> </div>
					
					 <?php
					 	if (!empty($list_merchant)) {
						?>
						<!-- breadcrumbs --> 
		
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
				<?php
				if (!empty($keyword)) {
					echo '<h4>';
				 	echo 'Search';
				 	echo '</h4>';
				 } 
				else if (!empty($category_name)) { 
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
				<div class="container">
				<div class="products-row" id="product-output">
					<?php 
                        $i = 0;
                        foreach ($list_merchant as $merchant): ?>
                           <?php 
          $i+=1;
            if (substr($merchant->phone, 0,1) == '8') {
                $phone = '0'.$merchant->phone;
                $whatsapp = '62'.$merchant->phone;
              }
              else if (substr($merchant->phone, 0,1) == '0') {
                $phone = $merchant->phone;
                $whatsapp = '62'.substr($merchant->phone, 1);
              }
              else if (substr($merchant->phone, 0,1)== '6') {
                $phone = '0'.substr($merchant->phone,2);
                $whatsapp = $merchant->phone;
              }
              else if (substr($merchant->phone, 0,1) == '+' ){
                $phone = '0'.substr($merchant->phone,3);
                $whatsapp = substr($merchant->phone, 1);
              }

               ?>

                         <div class="col-md-3">
            <div class="contact-box center-version">
                <a href="<?php echo base_url(); ?>page/merchant_profile/<?php echo $merchant->username ?>">
                    <img src="<?php echo base_url(); ?>assets/images/madusuper.jpg" alt="<?php if(!empty($merchant->name))
                        { echo $merchant->name; } 
                        else { echo $merchant->username; } ?>" class="img-circle" >
                    <h3 class="m-b-xs"><strong><?php if(!empty($merchant->name))
                        { echo substr($merchant->name, 0,17); } 
                        else if(!empty($merchant->username)) { echo substr($merchant->username, 0,17); } else{ echo '-';} ?></strong></h3>
        
                    <div class="font-bold"><?php echo $merchant->email ?></div>
                    <address class="m-t-md">
                        <strong><?php echo $merchant->location ?></strong><br>
                         
                        <!-- 795 Folsom Ave, Suite 600<br> -->
                        <!-- San Francisco, CA 94107<br> -->
                        <!-- <abbr title="Phone">P:</abbr> (123) 456-7890 -->
                    </address>
        
                </a>
                <div class="contact-box-footer">
                        
                        <div class="btn-group">
          
            
                        <a href="tel://<?php echo $phone ?>" class="btn btn-social-icon btn-tumblr"><i class="fa fa-2x fa-phone"></i> </a>  
    </div> <div class="btn-group">
                        <a href="sms:<?php echo $phone ?>" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-2x fa-envelope" ></i> </a>  
                           </div> 
                           <div class="btn-group">
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp ?>" class="btn btn-social-icon btn btn-success"><i class="fa fa-2x fa-whatsapp"></i></a> 
</div> 
<div class="clearfix" style="margin-top:5px"></div>
                    
                    <input type="hidden" id="wish_id" name="" value="<?php echo $merchant->wish_id ?>">
                    <?php

                     if (in_array($merchant->merchant_id, $user_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
                     <button class="btn btn-block btn-facebook" id="unfavoritemerchant"><span>Favorited</span></button>
                    <?php }
                    else { ?>
                    <button class="btn btn-block btn-dropbox" id="favoritemerchant"><span>Favorite</span></button>
                     <?php }
                    
                      ?>
            <input type="hidden" id="id_merchant" name="" value="<?php echo $merchant->merchant_id ?>">
                </div>
        
            </div>
        </div>

</div>

                           <?php
                         
                            endforeach; 
                        }?>

				</div>
				</div>
				<!-- add-products --> 
				<div class="w3ls-add-grids w3agile-add-products">
					<a href="#"> 
						<h4>Pesan Umroh sekarang <span>15%</span> Diskon</h4>
						<h6>Umroh sekarang <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<!-- //add-products -->
			</div>
			<div class="col-md-3 rsidebar">
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
				
		
			<div class="clearfix"> </div>
			<!-- recommendations -->
			<!-- <div class="recommend">
				<h3 class="w3ls-title">Our Recommendations </h3> 
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
				<div id="owl-demo5" class="owl-carousel"> -->
					<!-- loop rekomendasi mulai -->
				<!-- <?php
                        $i = 1;
                        foreach ($list_rekomendasi as $rekom): 
						// $i++
						 ?>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6><?php echo $i++ ?></h6></div>
							<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $rekom->pro_id ?>/<?php echo $detail?>"><img src="<?php echo base_url(); ?>/assets/images/f2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $rekom->pro_id ?>/<?php echo $detail?>"><?php echo $rekom->name ?></a></h4>
								<h4><?php echo $rekom->price ?></h4>
								<p><?php echo $rekom->description ?></p>
								
								<input type="hidden" id="id_produk" name="" value="<?php echo $rekom->pro_id;?>" />
								<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $rekom->name;?>" /> 
								<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $rekom->price;?>" /> 
								<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
								<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $rekom->merchant_id;?>"/>
								<input type="hidden" id="id1" class="this" name="" value=""/> 
								<button type="submit" id="tambahcart"  class="this btn btn-primary" ><i class="fa fa-cart-plus"></i> </button>
							</div>        
						</div> 
					</div>
					<?php endforeach; ?>
					<!-- loop rekomendasi selesai -->
					  
				
				</div>    
			</div> 
			<!-- //recommendations -->
		</div>
	</div>
	<!--//products-->
	<script type="text/javascript">
		$('#pref-searchby').on('change', function (e) {
    		var searchby = $(this).val();
    		if (searchby == "merchant") {
    			$('#pref-category').addClass('hidden').parent().addClass('hidden');
    			$('#pref-minimum').addClass('hidden').parent().addClass('hidden');
    			$('#pref-maksimum').addClass('hidden').parent().addClass('hidden');
    			$('#pref-orderby').addClass('hidden').parent().addClass('hidden');
    		}
    		else if (searchby == "product") {
    			$('#pref-category').removeClass('hidden').parent().removeClass('hidden');
    			$('#pref-minimum').removeClass('hidden').parent().removeClass('hidden');
    			$('#pref-maksimum').removeClass('hidden').parent().removeClass('hidden');
    			$('#pref-orderby').removeClass('hidden').parent().removeClass('hidden');
    			
    		}
	});
		
	</script>

