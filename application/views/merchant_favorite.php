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

/* CONTACTS */
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
<!-- banner -->
<script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js "></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css" />
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<!-- Page Content -->
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
            <li ><a id="merchant" href="<?php echo base_url(); ?>page/merchant"><h4><i class="fa fa-shopping-bag"></i>  Merchant</h4></a></li>
            <?php if ($this->session->userdata('logged_in') == TRUE ) {?>
            <li class="active"><a id="merchantfavorit" href="<?php echo base_url(); ?>pagein/merchantfavorite"><h4><i class="fa fa-shopping-basket"></i>  Merchant Favorit</h4></a></li>
            <?php } ?>
        </ul>
        </div>
        </div>
        </div>
        <!-- banner 2 end -->
<div class="container" style="margin-top:20px">
<div class="row">
    <?php if (empty($list_merchant)){ ?>
                      <div class="box-body">
              <div class="callout callout-success">
                <h4>Maaf,</h4>

                <p style="color:white">Anda belum menambahkan salah satu merchant ke list merchant favorit anda</p>
              </div>
            </div>
                   <?php } ?>
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
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp ?>" class="btn btn-social-icon btn btn-success"><i class="fa fa-2x fa-whatsapp"></i> </a> 
</div> 
<div class="clearfix" style="margin-top:5px"></div>
                    
                    <input type="hidden" id="id_merchant" name="" value="<?php echo $merchant->wish_id ?>">
                    <?php if (in_array($merchant->merchant_id, $user_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
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




                           <?php endforeach; ?>


 </div>

     <div class="clearfix"></div>
   
    </div>
 