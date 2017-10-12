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
<script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js "></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css" />
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
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
    <!-- /.container -->
<!-- banner Done -->
<!-- banner 2  -->
<div style="margin-top:20px"></div>
 <div class="row" >
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
 <ul class="nav nav-pills nav-justified">
            <li ><a id="feed" href="<?php echo base_url(); ?>page"><h4><i class="fa fa-list-alt"></i>  Feed</h4></a></li>
            <?php if ($this->session->userdata('logged_in') == TRUE ) {?>
            <li class="active"><a id="wishlist" href="<?php echo base_url(); ?>pagein/wishlist"><h4><i class="fa fa-heart"></i>  Wishlist</h4></a></li>
            <?php } ?>
           <li ><a id="merchant" href="<?php echo base_url(); ?>page/merchant"><h4><i class="fa fa-shopping-bag"></i>  Merchant</h4></a></li>
            <?php if ($this->session->userdata('logged_in') == TRUE ) {?>
            <li ><a id="merchantfavorit" href="<?php echo base_url(); ?>pagein/merchantfavorite"><h4><i class="fa fa-shopping-basket"></i>  Merchant Favorit</h4></a></li>
             <?php } ?>
        </ul>
        </div>
        </div>
        </div>
        <!-- banner 2 end -->
<div class="container">
<div class="products-row">
					<!-- loop wishlisht -->
					<?php
                        $i = 1;
                        foreach ($list_wish as $wish): ?>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6><?php echo $i++; ?> <br> <!-- 20% --></h6></div>
							<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $wish->product_id ?>"><img src="<?php echo base_url(); ?>/assets/images/e2.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $wish->product_id ?>/<?php echo $wish->category_id ?>"><?php echo substr($wish->name,0,14)."..<br>"; ?></a></h5> 
								<h6><!-- <del>$700</del> -->Rp. <?php echo $wish->price; ?></h6> 
								<input type="hidden" id="id_produk" name="" value="<?php echo $wish->product_id;?>" />
							<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $wish->name;?>" /> 
							<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $wish->price;?>" /> 
							<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
							<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $wish->merchant_id;?>"/>
						<input type="hidden" id="id1" class="this" name="" value=""/> 
						<?php if ($wish->approve == '1') { ?>
                          <button type="submit" id="tambahcart"  class="this btn btn-primary"><i class="fa fa-cart-plus"></i> </button>
                          <?php
                        } else{

                          ?>
                          <button class="this btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Produk Iklan"><i class="fa fa-info"></i> </button>
                          <?php } ?>
                        <input type="hidden" id="wishlist_id" name="" value="<?php echo $wish->wishlist_id;?>" />
                        
						      <?php
                        if (in_array($wish->product_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
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
					 <!-- loop wish end -->
					<div class="clearfix"> </div>
				</div>
				</div>

				