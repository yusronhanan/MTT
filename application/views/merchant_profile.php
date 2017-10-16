<style type="text/css">
  .custom-input-file {
    overflow: hidden;
    position: relative;
    width: 300px;
    height: 300px;
    background-repeat: no-repeat;
    /*background-attachment: fixed;*/
    background-position: center; 
    background-size: 300px;
    /*border-radius: 120px;*/
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

    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        User Profile
      </h1> -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
             
                 <div class="custom-input-file" id="previewavatar" style="background-image:url('http://lorempixel.com/180/180/people/9/');">
                                    
                                </div>


              <h3 class="profile-username text-center"><?php if(!empty($list_merchant->name)) {  echo $list_merchant->name;} else{ echo '-';} ?></h3>

              <p class="text-muted text-center">@<?php if(!empty($list_merchant->username)) {  echo $list_merchant->username;} else{ echo '-';} ?></p>

             <!--  <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul> -->
              <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
               <input type="hidden" id="wish_id" name="" value="<?php echo $list_merchant->wish_id ?>">

              <?php if (in_array($list_merchant->merchant_id, $user_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
                     <button class="btn btn-block btn-facebook" id="unfavoritemerchant"><span>Favorited</span></button>
                    <?php }
                    else { ?>
                    <button class="btn btn-block btn-dropbox" id="favoritemerchant"><span>Favorite</span></button>
                     <?php }
                    
                      ?>
                      <input type="hidden" id="id_merchant" name="" value="<?php echo $list_merchant->merchant_id ?>">
                     
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

              <p class="text-muted">
                <?php if(!empty($list_merchant->email)) {  echo $list_merchant->email;} else{ echo '-';}?>
              </p>

              <hr>
         <strong><i class="fa fa-envelope-o margin-r-5"></i> Email Telkomsel</strong>

              <p class="text-muted">
                <?php if(!empty($list_merchant->email_tsel)) {  echo $list_merchant->email_tsel;} else{ echo '-';}?>
              </p>
        <hr>

          <strong><i class="fa fa-user margin-r-5"></i> NIK Telkomsel</strong>

              <p class="text-muted">
                 <?php if(!empty($list_merchant->nik_tsel)) {  echo $list_merchant->nik_tsel;} else{ echo '-';}?>
              </p>
        <hr>
 <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

              <p class="text-muted">
                    <?php if(!empty($list_merchant->phone)) {  echo $list_merchant->phone;} else{ echo '-';}?>
              </p>

              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted"><?php if(!empty($list_merchant->address)) {  echo $list_merchant->address;} else{ echo '-';}?> </p>

              <hr>

<strong><i class="fa fa-industry margin-r-5"></i> Location Work Area</strong>

              <p class="text-muted"><?php if(!empty($list_merchant->location)) {  echo $list_merchant->location;} else{ echo '-';}?> </p>

              <hr>

             <!--  <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr> -->

              <!-- <strong><i class="fa fa-file-text-o margin-r-5"></i> Deskripsi Merchant</strong> -->

              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <!-- <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li> -->
              <li class="active"><a href="#merchant_product" data-toggle="tab">Merchant Product</a></li>
             <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
            </ul>
            <div class="tab-content">
             <div class="active tab-pane" id="merchant_product">
               
                <div class="post">
                  <div class="row margin-bottom">
           

                   
                      <div class="row">
                     
                          <?php
                      if (!empty($list_product)) {
                            
                             
                        $i = 1;
                        foreach ($list_product as $product): ?>
          <div class="col-md-3 product-grids">
            <div class="agile-products">
              <div class="new-tag"><h6><?php echo $i++; ?> <br> <!-- 20% --></h6></div>
              <a href="<?php echo base_url(); ?>page/detail_product/<?php echo $product->pro_id ?>"><img title="<?php echo $product->name ?>" src="<?php echo base_url(); ?>/assets/images/madusuper.jpg" class="img-responsive" alt="img"></a>
              <div class="agile-product-text">              
                <h5 title="<?php echo $product->name ?>"><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $product->pro_id ?>/<?php echo $product->category_id ?>"><?php echo substr($product->name,0,9).".."; ?></a></h5> 
                <h6><!-- <del>$700</del> -->Rp. <?php echo $product->price; ?></h6> 
                <input type="hidden" id="id_produk" name="" value="<?php echo $product->pro_id;?>" />
              <input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $product->name;?>" /> 
              <input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $product->price;?>" /> 
              <input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
              <input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $product->merchant_id;?>"/>
            <input type="hidden" id="id1" class="this" name="" value=""/> 
            <button type="submit" id="tambahcart"  class="this btn btn-primary" ><i class="fa fa-cart-plus"></i></button>
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
           }
            else{
              ?>
              <div class="box-body">
              <div class="callout callout-danger">
                <h4>Maaf!</h4>

                <p style="color:white">List Produk Merchant <?php if(!empty($list_merchant->name)) {  echo $list_merchant->name;} else{ echo $list_merchant->username;} ?> belum ditambahkan.</p>
              </div>
            </div>
         <?php   } ?>
                        
                    </div>
                  

                 




                  <!-- /.row -->

                 

                  
                </div>
                <!-- /.post -->
              </div>
            </div>
            

          
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->


<script type="text/javascript">


    document.getElementById("filefoto").onchange = function() {
    document.getElementById("formfoto").submit();
    $('body').load(window.location.href); 
}  


</script>