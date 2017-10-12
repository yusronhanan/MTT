<style type="text/css">
	
/*Slider*/


#myCarousel .nav a small
{
    display: block;
}
#myCarousel .nav
{
    background: #eee;
}
.nav-justified > li > a
{
    border-radius: 0px;
}
.nav-pills>li[data-slide-to="0"].active a { background-color: #16a085; }
.nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
.nav-pills>li[data-slide-to="2"].active a { background-color: #2980b9; }
.nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }

/*Jumbotron*/

.jumbotron{
    margin-bottom:20px;
    margin-top:20px;
    position:center;
   
}

.pricing {
    text-align: center;
}

/*Page Header*/
.page-header{
    text-align:center;
}
</style>
<!-- banner -->
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div style="height:40px"></div>
                <div class="row carousel-holder" >
                    <div class="col-md-12" >
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image img-responsive" src="<?php echo base_url(); ?>assets/images/madusuper.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image img-responsive"  src="<?php echo base_url(); ?>assets/images/sedekah.jpg" alt="">
                                </div>
                           
                                <div class="item">
                                    <img class="slide-image img-responsive"  src="<?php echo base_url(); ?>assets/images/sedekah.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" style="color:green;"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" style="color:green;"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div style="height:70px"></div>
            </div>
            <div style="height:40px"></div>
            
                <div class="row">
  		 <nav class="sitemap-tabs" data-spy="affix" data-offset-top="400"> 
					<div>
						<ul> 
							<li><a href="<?php echo base_url(); ?>page/category_product/11"><i class="fa fa-coffee"></i> TSO Cafe</a></li>
							<li><a href="<?php echo base_url(); ?>page/category_product/15"><i class="fa fa-slideshare"></i>Fashion</a></li>
							<li><a href="<?php echo base_url(); ?>page/category_product/13"><i class="fa fa-cutlery"></i> Snack</a></li>
							<li><a href="<?php echo base_url(); ?>page/category_product/16"><i class="fa fa-home"></i> Properti</a></li>
							<li><a href="<?php echo base_url(); ?>page/category_product/22"><i class="fa fa-futbol-o"></i> Hobi</a></li> 
							<li><a href="<?php echo base_url(); ?>page/category_product/14"><i class="fa fa-shopping-basket"></i> Perlengkapan</a></li> 
							<li><a href="<?php echo base_url(); ?>page/category_product/18"><i class="fa fa-plane"></i> Travel dan Umroh</a></li> 
							<li><a href="<?php echo base_url(); ?>page/category_product/12"><i class="fa fa-medkit"></i> Kesehatan</a></li> 
							<li><a href="<?php echo base_url(); ?>page/category_product/19"><i class="fa fa-car"></i> Otomotif</a></li> 
							<li><a href="<?php echo base_url(); ?>page/category_product/17"><i class="fa fa-book"></i> Buku</a></li>
							<li><a href="<?php echo base_url(); ?>page/category_product/20"><i class="fa fa-pie-chart"></i> Usaha dan Jasa</a></li> 
							<li><a href="<?php echo base_url(); ?>page/category_product/21"><i class="fa fa-hand-scissors-o"></i> Kerajinan</a></li>  
							</ul>
							</div>
							</nav>
  </div>
    <!-- /.container -->

<!-- banner 2  -->
<div style="margin-top:20px"></div>
 <div class="row" >
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
 <ul class="nav nav-pills nav-justified">
            <li class="active"><a id="feed" href="<?php echo base_url(); ?>page"><h4><i class="fa fa-list-alt"></i>  Feed</h4></a></li>
            <?php if ($this->session->userdata('logged_in') == TRUE ) {?>
            <li ><a id="wishlist" href="<?php echo base_url(); ?>pagein/wishlist"><h4><i class="fa fa-heart-o"></i>  Wishlist</h4></a></li>
            <?php }?>
            <li ><a id="merchant" href="<?php echo base_url(); ?>page/merchant"><h4><i class="fa fa-shopping-bag"></i>  Merchant</h4></a></li>
            <?php if ($this->session->userdata('logged_in') == TRUE ) {?>
            <li ><a id="merchantfavorit" href="<?php echo base_url(); ?>pagein/merchantfavorite"><h4><i class="fa fa-shopping-basket"></i>  Merchant Favorit</h4></a></li>
             <?php }?>
        </ul>
        </div>
        </div>
        </div>
        <!-- banner 2 end -->
<!-- kategori beli cepat -->
<div class="welcome"> 
		<div class="container"> 
			<div class="welcome-info">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class=" nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#tsocafe" id="tso-cafe-tab" role="tab" data-toggle="tab" >
							<i class="fa fa-coffee" aria-hidden="true"></i> 
							<h5>TSO Cafe</h5>
						</a></li>
						<li role="presentation"><a href="#snacks" role="tab" id="snacks-tab" data-toggle="tab"> 
							<i class="fa fa-cutlery" aria-hidden="true"></i>
							<h5>Snacks</h5>
						</a></li>
						<li role="presentation"><a href="#kesehatan" role="tab" id="kesehatan-tab" data-toggle="tab"> 
							<i class="fa fa-medkit" aria-hidden="true"></i>
							<h5>Kesehatan</h5>
						</a></li>
						<li role="presentation"><a href="#buku" role="tab" id="buku-tab" data-toggle="tab"> 
							<i class="fa fa-book" aria-hidden="true"></i>
							<h5>Buku</h5>
						</a></li>
						<li role="presentation"><a href="#fashion" role="tab" id="fashion-tab" data-toggle="tab"> 
							<i class="fa fa-black-tie" aria-hidden="true"></i>
							<h5>Fashion</h5>
						</a></li> 
					</ul>
					<div class="clearfix"> </div>
					<h3 class="w3ls-title">Featured Products</h3>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="tsocafe" aria-labelledby="tso-cafe-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel tso"> 

								<!-- loop tso mulai -->
						<?php
                        $i = 1;
                        foreach ($list_tso as $tso): 
						// $i++
						 ?>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6><?php echo $i++ ?></h6></div>
											<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $tso->pro_id ?>"><img src="<?php echo base_url(); ?>/assets/images/e2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts" id="isicart">           
												<h4><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $tso->pro_id ?>"><?php echo $tso->name; ?></a></h4>
												<h4><?php echo $tso->price; ?></h4>
												<p><?php echo substr($tso->description, 0, 75)."..<br>"; ?></p> 
												<!-- <h5>Rp. <?php echo $tso->price;?></h5> -->
											
													<input type="hidden" id="id_produk" class="this" name="" value="<?php echo $tso->pro_id;?>" />
													<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $tso->name;?>" /> 
													<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $tso->price;?>" /> 
													<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
													<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $tso->merchant_id;?>"/>
													<input type="hidden" id="id1" class="this" name="" value=""/> 
													<?php
													if ($tso->approve == '1') { ?>
													<button type="submit" id="tambahcart"  class="this btn btn-primary"><i class="fa fa-cart-plus"></i> </button>
													<?php
												} else{

													?>
													<button class="this btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Produk Iklan"><i class="fa fa-info"></i> </button>
													<?php } ?>

													<input type="hidden" id="wishlist_id" name="" value="<?php echo $tso->wish_id;?>" />
													<?php
													if (in_array($tso->pro_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
													
													<button class="btn btn-primary" id="deletewishlist"><i class="fa fa-heart" aria-hidden="true"></i></button>
													<?php 

												} else{
													?>
														<button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>	
													<?php } ?>
											
											</div>       
										</div>  
									</div>
									<?php endforeach; ?>
								<!-- loop tso selesai -->
							 

								</div> 
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="snacks" aria-labelledby="snacks-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo1").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo1" class="owl-carousel"> 
										<!-- loop snacks mulai -->
						<?php
                        $i = 1;
                        foreach ($list_snack as $snack): 
						// $i++
						 ?>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6><?php echo $i++ ?></h6></div>
											<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $snack->pro_id ?>"><img src="<?php echo base_url(); ?>/assets/images/e2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $snack->pro_id ?>"><?php echo $snack->name; ?></a></h4>
												<h4><?php echo $snack->price; ?></h4>
												<p><?php echo substr($snack->description, 0, 75)."..<br>"; ?></p> 
												<!-- <h5>Rp. <?php echo $snack->price;?></h5> -->
												<input type="hidden" id="id_produk" class="this" name="" value="<?php echo $snack->pro_id;?>" />
													<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $snack->name;?>" /> 
													<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $snack->price;?>" /> 
													<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
													<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $snack->merchant_id;?>"/>
													<input type="hidden" id="id1" class="this" name="" value=""/> 
													<?php
													if ($snack->approve == '1') { ?>
													<button type="submit" id="tambahcart"  class="this btn btn-primary"><i class="fa fa-cart-plus"></i> </button>
													<?php
												} else{

													?>
													<button class="this btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Produk Iklan"><i class="fa fa-info"></i> </button>
													<?php } ?>

													<input type="hidden" id="wishlist_id" name="" value="<?php echo $snack->wish_id;?>" />
													<?php
													if (in_array($snack->pro_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
													
													<button class="btn btn-primary" id="deletewishlist"><i class="fa fa-heart" aria-hidden="true"></i></button>
													<?php 

												} else{
													?>
														<button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>	
													<?php } ?>
											
											</div>       
										</div>  
									</div>
									<?php endforeach; ?>
								<!-- loop snacks selesai -->   
								</div>   
							</div>
						</div> 
						<div role="tabpanel" class="tab-pane fade" id="kesehatan" aria-labelledby="kesehatan-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo2").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo2" class="owl-carousel"> 
									<!-- loop $kesehatan mulai -->
						<?php
                        $i = 1;
                        foreach ($list_kesehatan as $kesehatan): 
						// $i++
						 ?>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6><?php echo $i++ ?></h6></div>
											<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $kesehatan->pro_id ?>"><img src="<?php echo base_url(); ?>/assets/images/e2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $kesehatan->pro_id ?>"><?php echo $kesehatan->name; ?></a></h4>
												<h4><?php echo $kesehatan->price; ?></h4>
												<p><?php echo substr($kesehatan->description,0,16)."..<br>"; ?></p> 
												<!-- <h5>Rp. <?php echo $kesehatan->price;?></h5> -->
												<input type="hidden" id="id_produk" name="" value="<?php echo $kesehatan->pro_id;?>" />
													<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $kesehatan->name;?>" /> 
													<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $kesehatan->price;?>" /> 
													<input type="hidden" class="this" id="jumlah_produk" name="" value="1"/> 
													<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $kesehatan->merchant_id;?>"/>
													<input type="hidden" id="id1" class="this" name="" value=""/> 
													<?php
													if ($kesehatan->approve == '1') { ?>
													<button type="submit" id="tambahcart"  class="this btn btn-primary"><i class="fa fa-cart-plus"></i> </button>
													<?php
												} else{

													?>
													<button class="this btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Produk Iklan"><i class="fa fa-info"></i> </button>
													<?php } ?>
													<input type="hidden" id="wishlist_id" name="" value="<?php echo $kesehatan->wish_id;?>" />
													<?php
													if (in_array($kesehatan->pro_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
													
													<button class="btn btn-primary" id="deletewishlist"><i class="fa fa-heart" aria-hidden="true"></i></button>
													<?php 

												} else{
													?>
														<button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>	
													<?php } ?>
																						</div>       
										</div>  
									</div>
									<?php endforeach; ?>
								<!-- loop $kesehatan selesai -->  
								</div>    
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="buku" aria-labelledby="buku-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo3").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo3" class="owl-carousel"> 
										<!-- loop $buku mulai -->
						<?php
                        $i = 1;
                        foreach ($list_buku as $buku): 
						// $i++ 
					?>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6><?php echo $i++ ?></h6></div>
											<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $buku->pro_id ?>"><img src="<?php echo base_url(); ?>/assets/images/e2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $buku->pro_id ?>"><?php echo $buku->name; ?></a></h4>
												<h4><?php echo $buku->price; ?></h4>
												<p><?php echo substr($buku->description, 0, 75)."..<br>"; ?></p> 
												<!-- <h5>Rp. <?php echo $buku->price;?></h5> -->
												<input type="hidden" id="id_produk" name="" value="<?php echo $buku->pro_id;?>" />
													<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $buku->name;?>" /> 
													<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $buku->price;?>" /> 
													<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
													<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $buku->merchant_id;?>"/>
													<input type="hidden" id="id1" class="this" name="" value=""/> 
													
													<?php if ($tso->approve == '1') { ?>
													<button type="submit" id="tambahcart"  class="this btn btn-primary"><i class="fa fa-cart-plus"></i> </button>
													<?php
												} else{

													?>
													<button class="this btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Produk Iklan"><i class="fa fa-info"></i> </button>
													<?php } ?>
													<input type="hidden" id="wishlist_id" name="" value="<?php echo $buku->wish_id;?>" />
													<?php
													if (in_array($buku->pro_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
													
													<button class="btn btn-primary" id="deletewishlist"><i class="fa fa-heart" aria-hidden="true"></i></button>
													<?php 

												} else{
													?>
														<button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>	
													<?php } ?>
											
											</div>       
										</div>  
									</div>
									<?php endforeach; ?>
								<!-- loop $buku selesai -->   
								</div>    
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="fashion" aria-labelledby="fashion-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo4").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										}); 
									}); 
								</script>
								<div id="owl-demo4" class="owl-carousel"> 
											<!-- loop $fashion mulai -->
						<?php
                        $i = 1;
                        foreach ($list_fashion as $fashion): 
						// $i++ 
					?>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6><?php echo $i++ ?></h6></div>
											<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $fashion->pro_id ?>"><img src="<?php echo base_url(); ?>/assets/images/e2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $fashion->pro_id ?>"><?php echo $fashion->name; ?></a></h4>
												<h4><?php echo $fashion->price; ?></h4>
												<p><?php echo substr($fashion->description, 0, 75)."..<br>"; ?></p> 
												<!-- <h5>Rp. <?php echo $fashion->price;?></h5> -->
												<input type="hidden" id="id_produk" name="" class="this" value="<?php echo $fashion->pro_id;?>" />
													<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $fashion->name;?>" /> 
													<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $fashion->price;?>" /> 
													<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
													<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $fashion->merchant_id;?>"/>
													<input type="hidden" id="id1" class="this" name="" value=""/> 
													
													<?php if ($fashion->approve == '1') { ?>
													<button type="submit" id="tambahcart"  class="this btn btn-primary"><i class="fa fa-cart-plus"></i> </button>
													<?php
												} else{

													?>
													<button class="this btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Produk Iklan"><i class="fa fa-info"></i> </button>
													<?php } ?>
													<input type="hidden" id="wishlist_id" name="" value="<?php echo $fashion->wish_id;?>" />
													<?php
													if (in_array($fashion->pro_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
													
													<button class="btn btn-primary" id="deletewishlist"><i class="fa fa-heart" aria-hidden="true"></i></button>
													<?php 

												} else{
													?>
														<button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>	
													<?php } ?>
											
											</div>       
										</div>  
									</div>
									<?php endforeach; ?>
								<!-- loop $fashion selesai -->
								</div>    
							</div>
						</div> 
					</div>   
				</div>  
			</div>  	
		</div>  	
	</div> 
<!-- kategori beli cepat done -->

<!-- app promosi -->

<!-- app promosi done -->
<!-- <h3 class="w3ls-title w3ls-title1">Our Sitemap</h3> -->
			<!-- <div class="sitemap-row">  -->
				
				<!-- </div> -->

<!-- 4 bisa -->
<section id="services">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <h2 class="section-heading">4 <b>BISA</b></h2>
               <hr class="primary">
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
               <div class="service-box">
                  <i class="fa fa-4x fa-paper-plane-o text-primary sr-icons"></i>
                  <h3>Bisa Langsung Pesan</h3>
                  <p class="text-muted">Anda bisa langsung membuka web atau apps Jual Beli MTT, lalu langsung lakukan pemesanan</p>
               </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center">
               <div class="service-box">
                  <i class="fa fa-4x fa-cubes text-primary sr-icons"></i>
                  <h3>Bisa Borongan</h3>
                  <p class="text-muted">Anda bisa langsung memesan dalam jumlah banyak, asalkan jumlah stok masih tersedia</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
               <div class="service-box">
                  <i class="fa fa-4x fa-map-pin text-primary sr-icons"></i>
                  <h3>Bisa Ambil di Tempat</h3>
                  <p class="text-muted">Anda bisa pesan dari tempat anda dan ambil sendiri di Toko.  </p>
               </div>
            </div>
         
            <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
                  <i class="fa fa-4x fa-rocket text-primary sr-icons"></i>
                  <h3>Bisa Diantar</h3>
                  <p class="text-muted">Anda juga bisa pesan dari tempat anda, dan kami bisa langsung antar ke tempat anda. Waktu itu juga !</p>
               </div>
               </div>
            </div>
           </div>
         
      </div>
   </section>
<!-- 4 bisa done -->
<!-- tawaran jualan -->
<?php if ($this->session->userdata('level') == 0 || $this->session->userdata('level') == null): ?>
	

	<div class="subscribe">
			<div class="container">
			<div class="row">
            <div class="col-md-10 social-icons w3-agile-icons">
				<h4>Punya toko dan mau jualan?</h4>
				<p>Bagi anda yang sudah punya toko atau mau jualan, kalian bisa menjadi merchant di JualBeli MTT</p>
				<a href="#" id="aktivasi_merchant" class="btn btn-primary">Daftar atau Aktivasi Merchant disini !</a>
				</div>
				<div class="col-md-2 social-icons w3-agile-icons float-right">
				<img src="<?php echo base_url(); ?>/assets/images/toko-online.jpg" width="175px">  
               </div>
            </div>

            
				</div>
				<!-- <div class="header-cart"> 
					<div class="my-account">
						<a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
					<div class="cart"> 
						<form action="#" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>  
					</div>
					<div class="clearfix"> </div> 
				</div>  -->
				<div class="clearfix"> </div>
			</div>	
			<?php endif;
			if ($this->session->userdata('level') == 1): 
			 ?>	
			<div class="subscribe">
			<div class="container">
			<div class="row">
            <div class="col-md-10 social-icons w3-agile-icons">
				<h4>Kiat-Kiat berjualan islami untuk Merchant</h4>
				<p>Bagi anda merchant, silahkan untuk mengunjungi MTT web untuk kiat-kiat jualan syariah dan juga konten islami lainnya !</p>
				<a href="#lamanmerchant" class="btn btn-primary">Menuju ke laman Khusus Merchant disini!</a>
				</div>
				<div class="col-md-2 social-icons w3-agile-icons float-right">
				<img src="<?php echo base_url(); ?>/assets/images/toko-online.jpg" width="175px">  
               </div>
            </div>

            
				</div>
				<!-- <div class="header-cart"> 
					<div class="my-account">
						<a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
					<div class="cart"> 
						<form action="#" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>  
					</div>
					<div class="clearfix"> </div> 
				</div>  -->
				<div class="clearfix"> </div>
			</div>

			<?php endif;
			 ?>	
		</div>
		
<!-- tawaran jualan done -->

<script type="text/javascript">
	 $('#aktivasi_merchant').click(function(event) {
	swal({
  title: 'Persetujuan',
  html:
    'Apakah anda menyetujui ' +
    '<a href="<?php echo base_url() ?>page/SK">syarat dan ketentuan</a> ' +
    ' menjadi merchant ?',
  type: 'question',
  showCancelButton: true,
  cancelButtonText : 'Saya tidak setuju',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, saya setuju!'
}).then(function () {
  swal({
  title: 'Sedang diarahkan ke halaman Aktivasi Merchant',
  text: 'Beberapa detik menuju halaman berikutnya.',
  timer: 3000,
  onOpen: function () {
    swal.showLoading()
  }
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      window.location="<?php echo base_url(); ?>Auth/aktivasi_merchant" ;
    }
  }
)
})
});
</script>