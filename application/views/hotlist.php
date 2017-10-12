<style type="text/css">



</style>


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
<!-- banner Done -->
<!-- banner 2  -->
<div style="margin-top:20px"></div>
 <div class="row" >
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
 <ul class="nav nav-pills nav-justified">
            <li ><a id="feed" href="<?php echo base_url(); ?>page"><h4><i class="fa fa-list-alt"></i>  Feed</h4></a></li>
            <?php if ($this->session->userdata('logged_in') == TRUE ) {?>

            <li ><a id="wishlist" href="<?php echo base_url(); ?>pagein/wishlist"><h4><i class="fa fa-heart"></i>  Wishlist</h4></a></li>
            <?php } ?>
            <li class="active" ><a id="hotlist" href="<?php echo base_url(); ?>page/hotlist"><h4><i class="fa fa-fire"></i>  Hot List</h4></a></li>
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
  <section class="row">
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <!-- <h3>Hot list header</h3> -->
    </article>
    <a href="">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170kurma.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Kurma</h4>
        <p class="card-text" >Kesehatan | Sunnah</p>
                 <p class="card-text" style="color:green" >Mulai dari 55.000</p>
      </div>
    </div>
    </a>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170madu.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Makan Siang</h4>
        <p class="card-text" >TSO Cafe | Snacks</p>
         <p class="card-text" style="color:green">Mulai dari 15.000</p>
      </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170kaos.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Kaos</h4>
        <p class="card-text" >Fashion | Casual</p>
               <p class="card-text" style="color:green">Mulai dari 75.000</p>
      </div>
    </div>
 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170kurma.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Kurma</h4>
        <p class="card-text" >Kesehatan | Sunnah</p>
                 <p class="card-text" style="color:green">Mulai dari 55.000</p>
      </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170kaos.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Kaos</h4>
        <p class="card-text" >Fashion | Casual</p>
               <p class="card-text" style="color:green">Mulai dari 75.000</p>
      </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170madu.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Makan Siang</h4>
        <p class="card-text" >TSO Cafe | Snacks</p>
         <p class="card-text" style="color:green">Mulai dari 15.000</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170kurma.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Kurma</h4>
        <p class="card-text" >Kesehatan | Sunnah</p>
                 <p class="card-text" style="color:green">Mulai dari 55.000</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170madu.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Makan Siang</h4>
        <p class="card-text" >TSO Cafe | Snacks</p>
         <p class="card-text" style="color:green">Mulai dari 15.000</p>
      </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:10px">
      <img src="<?php echo base_url(); ?>assets/images/350x170kaos.png" width="350px" height="170px" alt="" class="card-img-top img-fluid" />
      <div class="card card-block">
        <h4 class="card-title">Kaos</h4>
        <p class="card-text" >Fashion | Casual</p>
               <p class="card-text" style="color:green">Mulai dari 75.000</p>
      </div>
    </div>
  </section>
</div>