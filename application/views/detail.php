

   <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>


  <style type="text/css">
        /*
    Image credits:
    uifaces.com (http://uifaces.com/authorized)
*/

#login { display: none; }
.login,
.logout { 
    position: absolute; 
    top: -3px;
    right: 0;
}
.page-header { position: relative; }
.reviews {
    color: #555;    
    font-weight: bold;
    margin: 10px auto 20px;
}
.notes {
    color: #999;
    font-size: 12px;
}
.media .media-object { max-width: 120px; }
.media-body { position: relative; }
.media-date { 
    position: absolute; 
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before { 
    content: '.'; 
    margin-left: -2px; 
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }

.btn-circle {
    font-weight: bold;
    font-size: 12px;
    padding: 6px 15px;
    border-radius: 20px;
}
.btn-circle span { padding-right: 6px; }
.embed-responsive { margin-bottom: 20px; }
.tab-content {
    padding: 50px 15px;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
.custom-input-file {
    overflow: hidden;
    position: relative;
    width: 120px;
    height: 120px;
    background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');    
    background-size: 120px;
    border-radius: 120px;
}
input[type="file"]{
    z-index: 999;
    line-height: 0;
    font-size: 0;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
    margin: 0;
    padding:0;
    left:0;
}
.uploadPhoto {
    position: absolute;
    top: 25%;
    left: 25%;
    display: none;
    width: 50%;
    height: 50%;
    color: #fff;    
    text-align: center;
    line-height: 60px;
    text-transform: uppercase;    
    background-color: rgba(0,0,0,.3);
    border-radius: 50px;
    cursor: pointer;
}
.custom-input-file:hover .uploadPhoto { display: block; }
    </style>
<div class="container"> 
		<ol class="breadcrumb breadcrumb1">
			<li><a href="index.html">Home</a></li>
			<li class="active"><?php echo $detail->product_name ?></li>
		</ol> 
		<div class="clearfix"> </div>
		<?php if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
          } ?>
	</div>
<!-- arah ke done -->

<!-- detail products -->
	<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<!-- <li data-thumb="<?php echo base_url(); ?>/assets/images/s1.jpg">
									<div class="thumb-image detail_images"> <img src="<?php echo base_url(); ?>/assets/images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="<?php echo base_url(); ?>/assets/images/s2.jpg">
									 <div class="thumb-image"> <img src="<?php echo base_url(); ?>/assets/images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li> -->
								<li data-thumb="<?php echo base_url(); ?>/assets/images/s3.jpg">
								   <div class="thumb-image"> <img src="<?php echo base_url(); ?>/assets/images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $detail->product_name ?></h3>
						<h4>Merchant : <?php echo $detail->merchant_name ?></h3>
						<!-- <p>Processing Time: Item will be shipped out within 2-3 working days. </p> -->
						<!-- <div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div> -->
						<div class="single-price">
							<ul>
								<li>Rp. <?php echo $detail->price ?></li>  
								<!-- <li><del>$600</del></li>  -->
								<!-- <li><span class="w3off">10% OFF</span></li>  -->
								<li>Stock : <?php echo $detail->stock ?></li>
								<!-- <li><a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Coupon</a></li> -->
							</ul>	
						</div> 
            <?php 

            if (substr($detail->phone, 0,1) == '8') {
                $phone = '0'.$detail->phone;
                $whatsapp = '62'.$detail->phone;
              }
              else if (substr($detail->phone, 0,1) == '0') {
                $phone = $detail->phone;
                $whatsapp = '62'.substr($detail->phone, 1);
              }
              else if (substr($detail->phone, 0,1)== '6') {
                $phone = '0'.substr($detail->phone,2);
                $whatsapp = $detail->phone;
              }
              else if (substr($detail->phone, 0,1) == '+' ){
                $phone = '0'.substr($detail->phone,3);
                $whatsapp = substr($detail->phone, 1);
              }

               ?>
              
            <p style="font-size:30px"><a href="tel://<?php echo $phone ?>"><i class="fa fa-phone fa-5"></i></a>
            <a href="sms:<?php echo $phone ?>"><i class="fa fa-envelope  fa-5"></i></a>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp ?>"><i class="fa fa-whatsapp fa-5"></i></a></p>
						<p class="single-price-text">Last Update : <?php 
						$date = gmdate('Y-m-d H:i:s', $detail->last_update_product/1000);
						echo $date; ?></p>
						<h4>Deskripsi : </h4>
						<p class="single-price-text">
              <?php if ($detail->approve == '0') { ?>
             <strong> (Produk Iklan, anda dapat langsung menghubungi ke Merchant terkait) </strong>
              <br>
              <?php
              }
              if ($detail->description != null || $detail->description != '') {
                 echo $detail->description .' <br> (jika ada penjelasan deskripsi yang kurang jelas, hubungi merchant atau buat diskusi untuk keterangan produk lebih lanjut.)';
               } 
               else {
                echo '-     (merchant tidak mencamtumkan deskripsi, hubungi merchant atau buat diskusi untuk keterangan produk lebih lanjut.)';
               } ?></p>
						<!-- <form action="#" method="post"> -->
							<input type="hidden" id="id_produk" class="this" name="" value="<?php echo $detail->product_id;?>" /> 
							<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $detail->name;?>" /> 
							<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $detail->price;?>" /> 
				    	<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
							
              <input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $detail->merchant_id;?>"/>
					 <input type="hidden" id="id1" class="this" name="" value=""/> 
                         <?php if ($detail->approve == '1') { ?>
                          <button type="submit" id="tambahcart"  class="w3ls-cart" ><i class="fa fa-cart-plus"></i> Add to cart</button>
                          <?php
                        } else{

                          ?>
                            <button data-toggle="tooltip" data-placement="bottom" title="Produk Iklan"  class="w3ls-cart" ><i class="fa fa-info"></i> Iklan Produk</button>
                         
                          <?php } ?>
					
						<input type="hidden" id="wishlist_id" name="" value="<?php echo $detail->wish_id;?>" />
            
                  <?php
            if (in_array($detail->product_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { ?>
            <button class="w3ls-cart w3ls-cart-like" id="deletewishlist"><i class="fa fa-heart" aria-hidden="true"></i> Unwishlist</button>
            <?php 

          } else{
            ?>
              <button class="w3ls-cart w3ls-cart-like" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
            <?php } ?>

					</div>
				   <div class="clearfix"> </div>  
				</div>
				<div class="single-page-icons social-icons"> 
					<ul>
          <?php $id_pro =  $detail->product_id;?> 
             
						<li><h4>Share on</h4></li>
						<!-- <li><a target="_blank" data-href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" class="fa fa-facebook icon facebook"> </a></li> -->
						<li><a href="https://twitter.com/share?url=<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&amp;text=<?php echo $detail->product_name;?>&amp;hashtags=mttjualbeli" target="_blank" class="fa fa-twitter icon twitter"> </a></li>
						<!-- <li><a href="https://plus.google.com/share?url=<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" target="_blank" class="fa fa-google-plus icon googleplus"> </a></li> -->
            <!-- testing nnt ganti -->
            <li><a href="https://plus.google.com/share?url=https://twitter.com/yusron_hzvi" target="_blank" class="fa fa-google-plus icon googleplus"> </a></li>
						<li><a  href="whatsapp://send?text=<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>%20<?php echo $detail->product_name?>%20Di%20MTT%20Jual%20Beli"  class="fa fa-whatsapp icon whatsapp visible-xs"> </a></li> 
            
            <!-- <li><a href="javascript:;" onclick="window.print()" class="fa fa-print icon instagram"> </a></li>  -->

					</ul>
				</div>
			</div> 

				<!-- loop rekomendasi mulai -->
<!-- 				<?php
                        $i = 1;
                        foreach ($list_rekomendasi as $rekom): 
						// $i++
						 ?>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6><?php echo $i++ ?></h6></div>
							<a href="<?php echo base_url(); ?>page/detail_product/<?php echo $rekom->id ?>/<?php echo $detail->category_id ?>"><img src="<?php echo base_url(); ?>/assets/images/f2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="<?php echo base_url(); ?>page/detail_product/<?php echo $rekom->id ?>/<?php echo $detail->category_id ?>"><?php echo $rekom->name ?></a></h4>
								<h4><?php echo $rekom->price ?></h4>
								<p><?php echo $rekom->description ?></p>
								
								
									<input type="hidden" id="id_produk" name="" value="<?php echo $rekom->id;?>" />
								<input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $rekom->name;?>" /> 
								<input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $rekom->price;?>" /> 
								<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
								<input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $detail->merchant_id;?>"/>
								<input type="hidden" id="id1" class="this" name="" value=""/> 
								<button type="submit" id="tambahcart"  class="this btn btn-primary" ><i class="fa fa-cart-plus"></i> Add to cart</button>
								
							</div>        
						</div> 
					</div>
					<?php endforeach; ?>
					<!-- loop rekomendasi selesai -->

				</div>    
			</div> 
			<!-- //recommendations -->
			<!-- discuss -->

<div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="page-header">
            <h3 class="reviews">Leave your comment</h3>
         
        </div>
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                <li><a href="#add-comment" id="newcomment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                <!-- <li><a href="#account-settings" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Account settings</h4></a></li> -->
            </ul>            
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                   <?php if (empty($list_discussion)){ ?>
                   		<div class="box-body">
              <div class="callout callout-success">
                <h4>Maaf,</h4>

                <p style="color:white">Diskusi pada produk <strong><?php echo $detail->product_name ?></strong> masih kosong. Silahkan menambah komentar untuk memulai diskusi.</p>
              </div>
            </div>
                   <?php } else{ ?>

                    <ul class="media-list">
                    <?php
                        $i = 1;
                        foreach ($list_discussion as $discuss): 
						// $i++
						 ?>
                      <li class="media">
                        <!--<a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                        </a>-->
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">
                              
                              <?php echo $discuss->user_name ?>
                                
                              </h4>
                              <?php
                             if ($discuss->level == '1') {
                              ?>
                              <span class="badge" style="background-color:green">Merchant</span>
                              <?php } ?>
                              <ul class="media-date text-uppercase reviews list-inline">
                             <?php
                             if ($this->session->userdata('logged_id') == $discuss->id_user) {
                         
                              ?>
                              <li> <button style="margin-left:20em;" class="btn btn-danger btn-sm" id="delete_discuss"><i class="fa fa-close"></i></button> 
                              
                                <input type="hidden" name="id_discuss" id="id_discuss" value="<?php echo $discuss->id_discussion ?>"/>
                                </li>
                              <?php }?>
                                
                               
                              </ul>
                              
                              
                                

                              <p class="media-comment">
                                <?php echo $discuss->comment ?>
                              </p>
                            
                          </div>

                                <?php echo $discuss->created_at_discuss ?>
                        </div>
                   	
                      </li>          
                      <?php endforeach; 
                      }?>
                     <!--  <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lady_katherine/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Kriztine</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Yehhhh... Thanks for sharing.
                              </p>
                              
                          </div>              
                        </div>
                       
                      </li> -->
                    </ul> 
                </div>
                <div class="tab-pane" id="add-comment">
                <p>Anda harus login terlebih dahulu. Jika anda belum login, maka anda akan di redirect ke laman login.</p>
                    <form action="<?php echo base_url(); ?>pagein/discussion" method="post" class="form-horizontal" id="commentForm" role="form"> 
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control counted" name="addComment" id="addComment" rows="5" maxlength="100"></textarea>
                              <p class="pull-right" id="counter">Maksimal 100 Karakter</p>
                               <p class="pull-left hidden" id="alert_comment" style="color:red">(Bidang komentar harus diisi)</p>
                            </div>
                            <input type="hidden" id="id_produk" class="this" name="product_id" value="<?php echo $detail->product_id;?>" />
							<input type="hidden" id="merchant_id" class="this" name="merchant_id" value="<?php echo $detail->merchant_id;?>">
                        </div>
                        <!-- <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
                            <div class="col-sm-10">                    
                                <div class="input-group">
                                  <div class="input-group-addon">http://</div>
                                  <input type="text" class="form-control" name="uploadMedia" id="uploadMedia">
                                </div>
                            </div>
                        </div> -->
                        </form>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary" id="submitComment">Submit Comment </button>
                            </div>
                        </div>            
                    
                </div>
                <!-- <div class="tab-pane" id="account-settings">
                    <form action="#" method="post" class="form-horizontal" id="accountSetForm" role="form">
                        <div class="form-group">
                            <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                            <div class="col-sm-10">                                
                                <div class="custom-input-file">
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="avatar" id="avatar">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Vilma palma">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickName" class="col-sm-2 control-label">Nick name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nickName" id="nickName" placeholder="Vilma">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="email" placeholder="vilma@mail.com">
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 control-label">New password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="newPassword" id="newPassword">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-2 control-label">Confirm password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit">Save changes</button>
                            </div>
                        </div>            
                    </form>
                </div> -->
            </div>
        </div>
	</div>
  </div>
  
</div>
			<!-- discuss -->
			<!-- offers-cards --> 
			<div class="w3single-offers offer-bottom" style="margin-top:25px"> 
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info2">
						<h4>Madu Spesial</h4> 
						<h6>Madu asik</h6>
					</div>
				</div>
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info">
						<h4>Umroh Murah</h4> 
						<h6>Umroh cuma 20 juta !</h6>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //offers-cards -->
		</div>
	</div>
	<!-- detail products book -->

	<script type="text/javascript">
		 $('button#delete_discuss').click(function(event) {
  		 	
        	 if (confirm('Are you sure you want to delete this comment?')) {
        	 	var id_discuss = $(this).next().val();
        	
			 if ( id_discuss == "" ) {
                 alert('Tidak ada data komentar');
            }
            else{
            	// alert(id_cart);
            	$.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Discussdel',
                    type: 'post',
                    data: {id : id_discuss},
                    success: function(e){
                        if (e == "true") {
                        	$('body').load(window.location.href);
                        	// setTimeout(function(){// wait for 5 secs(2)
				        	// location.reload(); // then reload the page.(3)
				      		// }, 001);
                        	// $('body').load('<?php echo base_url(); ?>Page');
                            // $("#opencart").attr('class', "dropdown open");
                            // $("#openexpanded").attr('aria-expanded', "true");
                        } else {
                            alert('Menghapus komentar gagal');
                        }
                    }
                });

            } 
	  }
        	});

   (function($) {
    /**
     * attaches a character counter to each textarea element in the jQuery object
     * usage: $("#myTextArea").charCounter(max, settings);
     */
    
    $.fn.charCounter = function (max, settings) {
        max = max || 100;
        settings = $.extend({
            container: "<span></span>",
            classname: "charcounter",
            format: "(%1 characters remaining)",
            pulse: true,
            delay: 0
        }, settings);
        var p, timeout;
        
        function count(el, container) {
            el = $(el);
            if (el.val().length > max) {
                el.val(el.val().substring(0, max));
                if (settings.pulse && !p) {
                    pulse(container, true);
                };
            };
            if (settings.delay > 0) {
                if (timeout) {
                    window.clearTimeout(timeout);
                }
                timeout = window.setTimeout(function () {
                    container.html(settings.format.replace(/%1/, (max - el.val().length)));
                }, settings.delay);
            } else {
                container.html(settings.format.replace(/%1/, (max - el.val().length)));
            }
        };
        
        function pulse(el, again) {
            if (p) {
                window.clearTimeout(p);
                p = null;
            };
            el.animate({ opacity: 0.1 }, 100, function () {
                $(this).animate({ opacity: 1.0 }, 100);
            });
            if (again) {
                p = window.setTimeout(function () { pulse(el) }, 200);
            };
        };
        
        return this.each(function () {
            var container;
            if (!settings.container.match(/^<.+>$/)) {
                // use existing element to hold counter message
                container = $(settings.container);
            } else {
                // append element to hold counter message (clean up old element first)
                $(this).next("." + settings.classname).remove();
                container = $(settings.container)
                                .insertAfter(this)
                                .addClass(settings.classname);
            }
            $(this)
                .unbind(".charCounter")
                .bind("keydown.charCounter", function () { count(this, container); })
                .bind("keypress.charCounter", function () { count(this, container); })
                .bind("keyup.charCounter", function () { count(this, container); })
                .bind("focus.charCounter", function () { count(this, container); })
                .bind("mouseover.charCounter", function () { count(this, container); })
                .bind("mouseout.charCounter", function () { count(this, container); })
                .bind("paste.charCounter", function () { 
                    var me = this;
                    setTimeout(function () { count(me, container); }, 10);
                });
            if (this.addEventListener) {
                this.addEventListener('input', function () { count(this, container); }, false);
            };
            count(this, container);
        });
    };

})(jQuery);

$(function() {
    $(".counted").charCounter(100,{container: "#counter"});
    
});

$("textarea.form-control").bind('keyup mouseup', function (event) {

    var input = $(this).val();

     if ($.trim($(this).val()).length < 1) {
        $(this).parent().parent().addClass('has-error');
     }
     else{
       $(this).parent().parent().removeClass('has-error');
     }
        
});

$( "button#submitComment" ).click(function() {
  var text_comment = $("#addComment").val();
  if (text_comment != '' || text_comment != null) {
    if ($.trim($('textarea.form-control').val()).length < 1) {
      $("#alert_comment").removeClass('hidden');
    }
    else{
    $("#commentForm").submit();    
    }
  }
  else{
    $("#alert_comment").removeClass('hidden');
  }
  
});
	</script>