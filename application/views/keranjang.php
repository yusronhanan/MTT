<!-- cart -->
<style type="text/css">
        .table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
}
.show-on-hover:hover > ul.dropdown-menu {
    display: block;    
}
    </style>
<!-- cart end -->
<div class="container">
	<input type="hidden" id="last_update" name="last_update" class="this" value="<?php echo strtotime(date('Y-m-d H:i:s'))?>">
	<a href="<?php echo base_url(); ?>Page/Cart"><button class="btn btn-primary" style="margin-top:10px" id="cart2"><i class="fa fa-shopping-cart"></i> Keranjang</button></a>
	
	<div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-top:10px" ><i class="fa fa-reorder"></i> Status <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(); ?>Page/OrderAnda">Order Anda</a></li>
            <li><a href="<?php echo base_url(); ?>Page/OrderSelesai">Order Selesai</a></li>
            <li><a href="<?php echo base_url(); ?>Page/OrderCancel">Order Cancel</a></li>
          </ul>
    </div>





	<!-- <a href="<?php echo base_url(); ?>Page/Status_order"><button  class="btn btn-primary" style="margin-top:10px" id="status2"><i class="fa fa-reorder"></i> Status</button></a> -->

					<?php if (empty($list_keranjang)): ?>
							 <div class="box-body">
              <div class="callout callout-success">
                <h4>Keranjang Anda Kosong</h4>
                <p style="color:white">Silahkan mulai menambah produk ke keranjang anda supaya dapat melakukan proses checkout.</p>
              </div>
            </div>
					<?php endif ?>
					<?php if (!empty($list_keranjang)): ?>
						<h3 style="padding-top:10px">Keranjang Anda</h3>
						
						<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Produk</th>
							<th style="width:10%">Harga</th>
							<th style="width:8%">Jumlah</th>
							<th style="width:10%">Ongkos Kirim</th>
							<th style="width:22%" class="text-center">Sub Harga</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<!-- loop keranjang  -->
					<?php
                        $i = 1;
                        $total = 0;
                        foreach ($list_keranjang as $keranjang): 
						// $i++
						 ?>

						<tr>
							<td data-th="Produk">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?php echo base_url(); ?>/assets/images/madusuper.jpg" class="img-responsive" width="100px" /></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $keranjang->product_name; ?> <span>dari</span> <?php 
										if(empty($keranjang->username))
											{echo $keranjang->merchant_name;}
										else{
											{echo $keranjang->username;}
										}
											 ?></h4>
										<!-- <p><span>Alamat : </span>masih belum</p>
										<p><span>Catatan : </span>Dikemas rapi aja ya, mau saya bawa pulang</p> -->
									</div>
								</div>
							</td>
							<?php 
							$price = $keranjang->price;
							$value = $keranjang->value;
							$ongkir = 1000;
							$subTotal = $price * $value + $ongkir;
							$total += $subTotal;
							 ?>

							<td data-th="Harga">Rp. <?php echo $price;?></td>
							<td data-th="Jumlah">
							<input type="hidden" id="index" class="this" value="">
								<input type="number" id="amount" min="1" class="this form-control text-center" value="<?php echo $value; ?>">
							</td>
							<td data-th="Ongkos Kirim">Rp. <?php echo $ongkir; ?></td>
							<td data-th="Sub Harga" class="text-center">Rp. <?php echo $subTotal;?></td>
							<td class="actions" data-th="">
								<input type="hidden" id="cart_id" class="this" name="" value="<?php echo $keranjang->id_cart;?>" />
								<!-- <button class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></button> -->
								<button class="btn btn-danger btn-sm" id="delcart"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>

						
					<?php endforeach; ?>
					
						<!--loop keranjang end-->
						</tbody>
						
					<tfoot>
						<tr class="hidden">
							<td class="text-center"><strong>Total Rp <?php echo $total; ?></strong></td>
						</tr>
						<tr>
							<td><a href="<?php echo base_url(); ?>page/product" class="btn btn-primary"><i class="fa fa-angle-left"></i> Lanjut Belanja</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total Rp <?php echo $total; ?></strong></td>
							<td><a href="<?php echo base_url(); ?>pagein/checkout" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>

					</table>
					
					<?php endif ?>

					

						
					
				
</div>


<script type="text/javascript">


$(document).ready(function() {
	$(".this").each(function(i) {

    	// $("#amount").attr('id', "amount"+(i+1));
    	$("#cart_id").attr('id', "cart_id"+(i+1));
    	$("#index").attr('id', (i+1));
     
   
    });
  
   });

 $("input#amount").bind('keyup mouseup', function (event) {
 		var delayTimer;

 		
	 	var index = $(this).prev().attr('id');
	 	var amount = $(this).val();

	 	// var amount = document.getElementById("amount"+index).value;
        var cart_id = document.getElementById("cart_id"+index).value;
  		if (amount != "" || cart_id != "") {
  			if (amount == 0) {
  				 clearTimeout(delayTimer);
    			delayTimer = setTimeout(function() {
        		// Do the ajax stuff
    
  				$.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Cartdel',
                    type: 'post',
                    data: {id : cart_id},
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
                            alert('Menghapus keranjang gagal');
                        }
                    }
                });
                }, 1000);
  			} else{
               // alert(amount+cart_id);
                clearTimeout(delayTimer);
    			delayTimer = setTimeout(function() {
                $.ajax({
                    url: "<?php echo base_url(); ?>Transaksi/UpAmount",
                    type: 'post',
                    data: {id: cart_id, amount : amount},
                    success: function(e){
                        if (e == "true") {
                            $('body').load(window.location.href);
                        }
                        // else{
                        // 	alert("Maaf, gagal update jumlah pesanan");
                        // }
                    }
                });
                }, 1000);
            } 
            } else{
            	alert('data kosong');
            }          
});
	 // $('#cart2').click(function(event) {
  //     		$('body').load('<?php echo base_url(); ?>Page/Cart');
                           
  //       	});
	 //  $('#status2').click(function(event) {
  //     		$('body').load('<?php echo base_url(); ?>Page/Status_order');
                           
  //       	});
	  
</script>