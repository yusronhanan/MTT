<style type="text/css">
.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 20px 80px;
    z-index: 9;
    width: 20%; 
}

/***
Bootstrap Line Tabs by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

/* Tabs panel */
.tabbable-panel {
  border:1px solid #eee;
  padding: 10px;
}

/* Default mode */
.tabbable-line > .nav-tabs {
  border: none;
  margin: 0px;
}
.tabbable-line > .nav-tabs > li {
  margin-right: 2px;
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: #737373;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
  border-bottom: 4px solid #fbcdcf;
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
  border-bottom: 4px solid #f3565d;
  position: relative;
}
.tabbable-line > .nav-tabs > li.active > a {
  border: 0 !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
}
.tabbable-line > .tab-content {
  margin-top: -3px;
  background-color: #fff;
  border: 0;
  border-top: 1px solid #eee;
  padding: 15px 0;
}
.portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
}

/* Below tabs mode */

.tabbable-line.tabs-below > .nav-tabs > li {
  border-top: 4px solid transparent;
}
.tabbable-line.tabs-below > .nav-tabs > li > a {
  margin-top: 0;
}
.tabbable-line.tabs-below > .nav-tabs > li:hover {
  border-bottom: 0;
  border-top: 4px solid #fbcdcf;
}
.tabbable-line.tabs-below > .nav-tabs > li.active {
  margin-bottom: -2px;
  border-bottom: 0;
  border-top: 4px solid #f3565d;
}
.tabbable-line.tabs-below > .tab-content {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}

.menu_title {
    padding: 15px 10px;
    border-bottom: 1px solid #eee;
    margin: 0 5px;
}


@media (max-width:768px){
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
}

#slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
#slider-control img{
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}



    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
//       $(document).ready(function(){

// $('#itemslider').carousel({ interval: 3000 });

// $('.carousel-showmanymoveone .item').each(function(){
// var itemToClone = $(this);

// for (var i=1;i<6;i++) {
// itemToClone = itemToClone.next();

// if (!itemToClone.length) {
// itemToClone = $(this).siblings(':first');
// }

// itemToClone.children(':first-child').clone()
// .addClass("cloneditem-"+(i))
// .appendTo($(this));
// }
// });
// });

    </script>
</head>
<body>
<div style="margin-top:20px"></div>
<div class="container">

  <div class="col-sm-8">

      <div data-spy="scroll" class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#tab_product" data-toggle="tab">
              Produk </a>
            </li>
           <!--  <li>
              <a href="#tab_discuss" data-toggle="tab">
             Diskusi </a>
            </li> -->
            <li>
              <a href="#tab_feedback" data-toggle="tab">
             Ulasan </a>
            </li>
             <li>
              <a href="#tab_information" data-toggle="tab">
             Informasi Merchant</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_product">
            Produk
   

           <div class="products-row">
          <!-- loop product -->
          <?php
                        $i = 1;
                        foreach ($list_product as $product): ?>
          <div class="col-md-3 product-grids">
            <div class="agile-products">
              <div class="new-tag"><h6><?php echo $i++; ?> <br> <!-- 20% --></h6></div>
              <a href="<?php echo base_url(); ?>page/detail_product/<?php echo $product->id ?>"><img title="<?php echo $product->name ?>" src="<?php echo base_url(); ?>/assets/images/madusuper.jpg" class="img-responsive" alt="img"></a>
              <div class="agile-product-text">              
                <h5 title="<?php echo $product->name ?>"><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $product->id ?>/<?php echo $product->category_id ?>"><?php echo substr($product->name,0,9).".."; ?></a></h5> 
                <h6><!-- <del>$700</del> -->Rp. <?php echo $product->price; ?></h6> 
                <input type="hidden" id="id_produk" name="" value="<?php echo $product->id;?>" />
              <input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $product->name;?>" /> 
              <input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $product->price;?>" /> 
              <input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
              <input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $product->merchant_id;?>"/>
            <input type="hidden" id="id1" class="this" name="" value=""/> 
            <button type="submit" id="tambahcart"  class="this btn btn-primary" ><i class="fa fa-cart-plus"></i></button>
            <button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
        </div>
            </div>
          </div>
           <?php endforeach; ?>
           <!-- loop product end -->
          <div class="clearfix"> </div>
        </div>
            </div>
            <!-- <div class="tab-pane" id="tab_discuss">
              <p>
                Diskusi
              </p>
              <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                     <label for="email">Highest Education:</label>
                      <p> MBA/PGDM</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>

               </div>
              </div>

             
           
            </div> -->
            <div class="tab-pane" id="tab_feedback">
              <p>
                Ulasan
              </p>
              <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                     <label for="email">Highest Education:</label>
                      <p> MBA/PGDM</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>

               </div>
              </div>
            </div>
             <div class="tab-pane" id="tab_information">
              <p>
               Informasi Merchant

              </p>
               <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                     <label for="email">Nama :</label>
                      <p><?php echo $list_merchant->name ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Username</label>
                      <p><?php echo $list_merchant->username ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Phone</label>
                      <p><?php echo $list_merchant->phone ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                      <p><?php echo $list_merchant->email ?></p>
                 </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
                     <label for="email">Telegram</label>
                      <p><?php echo $list_merchant->telegram ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Email Telkomsel</label>
                      <p><?php echo $list_merchant->email_tsel ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">NIK Telkomsel</label>
                      <p><?php echo $list_merchant->nik_tsel ?></p>
                 </div>

               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  </div>
  <div class="col-sm-4">
   <div class="panel panel-default">
    <div class="menu_title">
       Horoscope
    </div>
    <div class="panel-body">
        <div class="row">
        <div class="col-lg-12">
        <img class="img-responsive"  align="left"  src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
            <!-- <div class="col-lg-12">
                 <div class="form-group">
                  
        <div class="fb-profile-text">
            
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                      <label for="email">Date of Birth:</label>
                      <p> 26 Sep 2017</p>
                  </div>
                  <div class="form-group">
                      <label for="email">Time of Birth:</label>
                      <p> 11:20 min.</p>
                  </div>
                   <div class="form-group">
                      <label for="email">Horroscoe Match not Necessory</label>
                   </div>
                    <div class="form-group">
                      <label for="email">Sun Sign:</label>
                      <p> Scorpio</p>
                    </div>
                    <div class="form-group">
                      <label for="email">Rashi/ Moon sign:</label>
                      <p> Mesh</p>
                    </div>
                     <div class="form-group">
                      <label for="email">Nakshtra:</label>
                      <p> Bharani</p>
                    </div>
                      <div class="form-group">
                      <label for="email">Manglik:</label>
                      <p> Manglik</p>
                    </div>
                <button type="submit" class="btn btn-danger btn-block">Submit</button>
            </div>
        </div> -->
    </div>
</div>
  </div>
</div>
<script type="text/javascript">

</script>

