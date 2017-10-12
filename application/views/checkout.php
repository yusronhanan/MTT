<div class='container'>
<div class='row' style='padding-top:25px; padding-bottom:25px;'>
<div class='col-md-12'>
<div id='mainContentWrapper'>
<div class="col-md-8 col-md-offset-2">
<h2 style="text-align: center;">
Review Your Order &amp; Complete Checkout
</h2>
<?php if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
          } ?>
<hr/>
<a href="<?php echo base_url(); ?>/page/cart" class="btn btn-tsel" style="width: 100%;">Add More Products &amp; Services</a>
<hr/>
<div class="shopping_cart">
<form class="form-horizontal" role="form" action="<?php echo base_url(); ?>Transaksi/InsertCheckout" method="post" id="payment-form">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
    <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review
            Your Order</a>
    </h4>
</div>
<div id="collapseOne" class="panel-collapse collapse in">
    <div class="panel-body">
        <div class="items">
            <div class="col-md-9">

                <table class="table table-striped">
                <!-- start checkout -->
                <?php
                        $i = 1;
                        $total = 0;
                        foreach ($list_keranjang as $keranjang): 
                        // $i++
                         ?>
                    <tr>
                        <td colspan="2">
                            <!-- <a class="btn btn-tsel btn-sm pull-right"
                               href="#delete"
                               title="Remove Item">X</a> -->
                            <b><?php echo $keranjang->product_name; ?> dari <?php echo $keranjang->merchant_name; ?> </b></td>
                    </tr>
                    <tr>
                    <?php 
                            $price = $keranjang->price;
                            $value = $keranjang->value;
                            $ongkir = 1000;
                            $subTotal = $price * $value + $ongkir;
                            $total += $subTotal;
                    ?>
                        <td>
                                <li><span>Harga Satuan</span> Rp <?php echo $price ?></li>
                                <li><span>Jumlah Pesanan</span>  <?php echo $value ?></li>
                                <li><span>Ongkos Kirim</span> <?php echo $ongkir ?></li>
                                
                        </td>
                        <td>
                            <b><?php echo $subTotal; ?></b>
                        </td>
                    </tr>
                    <!-- batas 1 dan 2 -->
                    <!-- checkout end -->
                <?php endforeach; ?>
                   
                    <?php
                        $i = 0;
                        // $total = 0;
                        foreach ($list_keranjang as $keranjang): 
                        ?>
                        <input type="hidden" id="product_id" name="field[product_id][]" class="this" value="<?php echo $keranjang->product_id; ?>">
                        <input type="hidden" id="product_name" name="field[product_name][]" class="this" value="<?php echo $keranjang->product_name; ?>">
                         <input type="hidden" id="product_price" name="field[product_price][]" class="this" value="<?php echo $keranjang->price; ?>">
                         <input type="hidden" id="merchant_id" name="field[merchant_id][]" class="this" value="<?php echo $keranjang->merchant_id; ?>">
                         <input type="hidden" id="merchant_name" name="field[merchant_name][]" class="this" value="<?php echo $keranjang->merchant_name; ?>">
                         <input type="hidden" id="merchant_email" name="field[merchant_email][]" class="this" value="<?php echo $keranjang->email; ?>">
                         <input type="hidden" id="merchant_phone" name="field[merchant_phone][]" class="this" value="<?php echo $keranjang->phone; ?>">
                         <input type="hidden" id="created_at" name="field[created_at][]" class="this" value="<?php echo strtotime(date('Y-m-d H:i:s'))?>">
                         <input type="hidden" id="last_update" name="field[last_update][]" class="this" value="<?php echo strtotime(date('Y-m-d H:i:s'))?>">
                         <input type="hidden" id="amount" name="field[amount][]" class="this" value="<?php echo $keranjang->value ?>">



                        <input type="hidden" id="cart_id" name="field[cart_id][]" class="this" value="<?php echo $keranjang->id_cart; ?>">
                        
                    <?php 
                        $i += 1;
                    endforeach; ?>

                        <input type="hidden" id="index" name="index[]" class="this" value="<?php echo $i; ?>">
                    <input type="hidden" id="total" name="total" class="this" value="<?php echo $total;?>">
                    <input type="hidden" id="created" name="created" class="this" value="<?php echo strtotime(date('Y-m-d H:i:s'))?>">
                    
                </table>

            </div>
            <div class="col-md-3">
                <div style="text-align: center;">
                    <h3>Total Harga</h3>
                    <h3><span style="color:green;">Rp <?php echo $total; ?></span></h3>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
    <div style="text-align: center; width:100%;"><a style="width:100%;"
                                                    data-toggle="collapse"
                                                    data-parent="#accordion"
                                                    href="#collapseTwo"
                                                    class=" btn btn-tsel"
                                                    onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">Lanjut ke Informasi Pembayaran&raquo;</a></div>
</h4>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        Data Pembeli
    </a>
</h4>
</div>
<div id="collapseTwo" class="panel-collapse collapse">
<div class="panel-body">
    <b>Harap bantu kami dengan mengisi data anda dengan benar.</b>
    <br/><br/>
    <table class="table table-striped" style="font-weight: bold;">
        <tr>
            <td style="width: 175px;">
                <label for="id_email">Email:</label></td>
            <td>
                <input type="hidden" name="id_user"
                       required="required" type="text" value="<?php echo $this->session->userdata('logged_id'); ?>"/>
                       <div class="form-group">
                <input class="form-control" id="id_email" name="email" required="required" type="text" value="<?php echo $user->email ?>"/>
            </div>
            </td>
        </tr>
        <tr>
            <td style="width: 175px;">
                <label for="id_name">Nama:</label></td>
            <td>
                <div class="form-group">
                <input class="form-control" id="id_name" name="name" required="required" type="text" value="<?php echo $user->name ?>" />
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 175px;">
                <label for="id_address">Alamat Penerima:</label></td>
            <td><div class="form-group">
                <input class="form-control" id="id_address" name="address" required="required" type="text" value="<?php echo $user->address ?>"/>
           </div> </td>
        </tr>
        <tr>
            <td style="width: 175px;">
                <label for="id_phone">Nomor Telkomsel:</label></td>
            <td>
                <div class="form-group">
                <input class="form-control" id="id_phone" name="phone" type="text" value="<?php echo $user->phone ?>"/>
                </div>
            </td>
        </tr>

        <tr>
            <td style="width: 175px;">
                <label for="id_comment">Keterangan :</label></td>
            <td>
                <div class="form-group">
                <textarea class="form-control" id="id_comment" name="comment" type="text"> </textarea>
                </div>
            </td>
        </tr>

        <tr>
            <td style="width: 175px;">
                <label for="id_shipping">Shipping :</label></td>
            <td>
                <div class="form-group">
                <select class="form-control" id="id_shipping" name="shipping">
                <option value="">--- Pilih Jenis Shipping ---</option>
                <option value="COD (Cash On Delivery)">COD (Cash On Delivery)</option>
                <option value="TOD (T-Cash On Delivery)">TOD (T-Cash On Delivery)</option>
                <option value="Ambil di lokasi Merchant">Ambil di lokasi Merchant</option>
                <option value="Ambil di Sekret MTT">Ambil di Sekret MTT</option>
                
                </select>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 175px;">
                <label for="date_ship">Date Ship :</label></td>
            <td>
                <div class="form-group">
               <input type="date" id="date_ship" name="date_ship" class="form-control" value="<?php print(date("Y-m-d")); ?>">
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 175px;">
                <label for="infaq">Infaq :</label></td>
            <td>
                <div class="form-group inputInfaq">
               <input type="number" id="infaq" name="infaq" class="form-control" min="0" step="500" value="0">
                </div>
            </td>
        </tr>
       
                <input class="form-control" id="random" name="random" type="hidden" value="<?php $this->load->helper('string');
                    echo random_string('alnum',9); ?>"/>
          <input type="date" id="date_ship" name="date_buy" class="form-control hidden" value="<?php print(date("Y-m-d")); ?>">
       

    </table>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
    <div style="text-align: center;"><a data-toggle="collapse"
                                        data-parent="#accordion"
                                        href="#collapseThree"
                                        class=" btn   btn-tsel" id="payInfo"
                                        style="width:100%;display: none;" onclick="$(this).fadeOut();  
document.getElementById('collapseThree').scrollIntoView()">Lanjut ke Pembayaran &raquo;</a>
    </div>
</h4>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        <b>Data Pembayaran</b>
    </a>
</h4>
</div>
<div id="collapseThree" class="panel-collapse collapse">
<div class="panel-body">
    <span class='payment-errors'></span>
    <fieldset>
        <legend>Pembayaran</legend>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="card-holder-name">Nomor HP T-CASH</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" stripe-data="name"
                       id="noTCASH" name="noTCASH" placeholder="Masukkan Nomor T-CASH Anda">
            </div>
        </div>
            <div class="col-sm-9">
               <img class="pull-right"
                          src="<?php echo base_url(); ?>/assets/images/tcash-logo.png"
                          style="max-width: 250px; padding-bottom: 20px;">
                </div>
</div>
    </fieldset>
    <input type="submit" name="submit" id="pay" class="btn btn-tsel btn-lg" style="width:100%;" value="Buy Now"/>
    <br/>
    <div style="text-align: left;"><br/>
        By submiting this order you are agreeing to our <a href="/legal/billing/">universal
            billing agreement</a>, and <a href="/legal/terms/">terms of service</a>.
        If you have any questions about our products or services please contact us
        before placing this order.
    </div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>

<script type="text/javascript">
    
  $("input.form-control,textarea.form-control,select.form-control").bind('keyup mouseup', function (event) {

    var input = $(this).val();

     if (input == '' || input == null || $.trim(input).length < 1 || input == '0') {
        if ($(this).parent().hasClass('inputInfaq')) {
         $(this).parent().addClass('has-warning');
        }
        else{
        $(this).parent().addClass('has-error');
        }
     }
     else{
       $(this).parent().removeClass('has-error');
     }
        
});

    </script>
