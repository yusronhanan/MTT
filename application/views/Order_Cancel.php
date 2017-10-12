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
    </style>

<!-- order status non cancel-->
	
	<div class="container">

	<input type="hidden" id="last_update" name="last_update" class="this" value="<?php echo strtotime(date('Y-m-d H:i:s'))?>">
	<a href="<?php echo base_url(); ?>Page/Cart"><button class="btn btn-primary" id="cart2" style="margin-top:10px"><i class="fa fa-shopping-cart"></i> Keranjang</button></a>
	<div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-top:10px" ><i class="fa fa-reorder"></i> Status <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(); ?>Page/OrderAnda">Order Anda</a></li>
            <li><a href="<?php echo base_url(); ?>Page/OrderSelesai">Order Selesai</a></li>
            <li><a href="<?php echo base_url(); ?>Page/Order_Cancel">Order Cancel</a></li>
          </ul>
    </div>


	<!-- <a href="<?php echo base_url(); ?>Page/Status_order"><button class="btn btn-primary" id="status2" style="margin-top:10px"><i class="fa fa-reorder"></i> Status</button></a> -->
					<!-- <?php if (empty($list_order)): ?>
							<h2>Order Anda Kosong</h2>
					<?php endif ?>
					<?php if (!empty($list_order)): ?>
						<h3 style="padding-top:10px">Status Order Anda</h3>
						<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:40%">Produk</th>
							<th style="width:10%">Harga</th>
							<th style="width:10%">Status</th>
							<th style="width:5%">Jumlah</th>
							<th style="width:10%">Ongkos Kirim</th>
							<th style="width:10%">Infaq</th>
							<th style="width:22%" class="text-center">Sub Harga</th>
							<th style="width:10%">Aksi</th>
						</tr>
					</thead>
					<tbody> -->
						<!-- loop status non cancel -->
					<!-- <?php
                        $i = 1;
                        $total = 0;
                        foreach ($list_order as $order): 
						$i++
						 ?>

						<tr>
							<td data-th="Produk">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?php echo base_url(); ?>/assets/images/madusuper.jpg" class="img-responsive" width="100px" /></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $order->product_name; ?> <span>dari</span> <?php 
										 echo $order->merchant_name;
											 ?></h4> -->
										<!-- <p><span>Alamat : </span>masih belum</p>
										<p><span>Catatan : </span>Dikemas rapi aja ya, mau saya bawa pulang</p> -->
									<!-- </div>
								</div>
							</td>
							<?php 
							$price = $order->price_item;
							$value = $order->amount;
							$infaq = $order->fee_infaq;
							$ongkir = 1000;
							$subTotal = $price * $value + $ongkir + $infaq;
							$total += $subTotal;
							 ?>

							<td data-th="Harga">Rp. <?php echo $price;?></td>
							<td data-th="Status"><?php 
										 echo $order->status_order_detail;
											 ?></td>
							
							<td data-th="Jumlah"><?php echo $value; ?></td>
							<td data-th="Ongkos Kirim">Rp. <?php echo $ongkir; ?></td>
							<td data-th="Infaq" id="infaqclick1">click for see</td>
							<td data-th="Infaq" id="infaqclick2" class="hidden">Rp. <?php echo $infaq; ?></td>
							<td data-th="Sub Harga" class="text-center">Rp. <?php echo $subTotal;?></td>
							<td class="actions" data-th="">
								
								<button class="one btn btn-info btn-sm" data-toggle="modal" data-target="#feedback<?php echo $i; ?>"><i class="fa fa-check"></i></button>
									<input type="hidden" id="order_detail_id" class="this" name="" value="<?php echo $order->product_order_detail_id;?>" />
								<button class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></button> 
								<button class="btn btn-danger btn-sm" id="cancelorder"><i class="fa fa-close"></i></button>								
							</td>
						</tr> -->
  <!-- modal feedback  -->
  <div class="two modal fade product_view" id="feedback<?php echo $i; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">Feedback</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    
                    <div class="col-md-12 product_content">
                      <p>Beri kami feedback supaya kami dan merchant dapat berkembang lebih baik.</p>
                       <h5>Feedback :</h5> 
                        <input type="text" id="feedinput" name="feedback" class="form-control">
                        
                           <button class="one btn btn-info btn-sm" style="margin-top:5px" id="orderselesai"><i class="fa fa-check"></i></button>
                            <input type="hidden" id="order_detail_id" class="this" name="" value="<?php echo $order->product_order_detail_id;?>" />
                            <p>Maksimal 100 Karakter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal feedback  end-->
						
					<!-- <?php endforeach; ?>
						loop status end
						</tbody>
					<tfoot>
						<tr class="hidden">
							<td class="text-center"><strong>Total Rp <?php echo $order->total_fees; ?></strong></td>
						</tr>
						<tr>
							<td colspan="6" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total Rp <?php echo $order->total_fees; ?></strong></td>
							
						</tr>
					</tfoot>
					</table>
					<?php endif ?>
					
 -->
						<!-- sampai tampilkan order status non cancel -->
					
				
</div>

<!-- order status non cancel end -->




<!-- order status  selesai-->
	<div class="container">
	
					<?php if (!empty($list_selesai)){ ?>
						<h3 style="padding-top:10px">Status Cancel Order Anda</h3>
						<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:40%">Produk</th>
							<th style="width:10%">Harga</th>
							<th style="width:10%">Status</th>
							<th style="width:5%">Jumlah</th>
							<th style="width:10%">Ongkos Kirim</th>
							<th style="width:10%">Infaq</th>
							<th style="width:22%" class="text-center">Sub Harga</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<!-- loop status selesai-->
					<?php
                        $i = 1;
                        $total = 0;
                        foreach ($list_selesai as $selesai): 
						// $i++
						 ?>

						<tr>
							<td data-th="Produk">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?php echo base_url(); ?>/assets/images/madusuper.jpg" class="img-responsive" width="100px" /></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $selesai->product_name; ?> <span>dari</span> <?php 
										 echo $selesai->merchant_name;
											 ?></h4>
										<!-- <p><span>Alamat : </span>masih belum</p>
										<p><span>Catatan : </span>Dikemas rapi aja ya, mau saya bawa pulang</p> -->
									</div>
								</div>
							</td>
							<?php 
							$price = $selesai->price_item;
							$value = $selesai->amount;
							$infaq = $selesai->fee_infaq;
							$ongkir = 1000;
							$subTotal = $price * $value + $ongkir + $infaq;
							$total += $subTotal;
							 ?>

							<td data-th="Harga">Rp. <?php echo $price;?></td>
							<td data-th="Status"><?php 
										 echo $selesai->status_order_detail;
											 ?></td>
							
							<td data-th="Jumlah"><?php echo $value; ?></td>
							<td data-th="Ongkos Kirim">Rp. <?php echo $ongkir; ?></td>
							<td data-th="Infaq" id="infaqclick1">click for see</td>
							<td data-th="Infaq" id="infaqclick2" class="hidden">Rp. <?php echo $infaq; ?></td>
							<td data-th="Sub Harga" class="text-center">Rp. <?php echo $subTotal;?></td>
							<td class="actions" data-th="">
								
									
								<form action="<?php echo base_url(); ?>Transaksi/paymentslip" method="post" target="_blank"> 
									<input type="hidden" id="order_id" class="this" name="order_detail" value="<?php echo $selesai->product_order_detail_id;?>" />
								</form>
								<button class="btn btn-info btn-sm" id="print"><i class="fa fa-print"></i></button>
								<!-- <button class="btn btn-danger btn-sm" id="selesaiorder"><i class="fa fa-close"></i></button>								 -->
							</td>
						</tr>

						
					<?php endforeach; ?>
					
						<!--loop status end-->
						</tbody>
					<!-- <tfoot>
						<tr class="hidden">
							<td class="text-center"><strong>Total Rp <?php echo $order->total_fees; ?></strong></td>
						</tr>
						<tr>
							<td colspan="6" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total Rp <?php echo $order->total_fees; ?></strong></td>
							
						</tr>
					</tfoot> -->
					</table>
					<div class="text-center">
					<?php echo "<br /><div>" .$this->pagination->create_links() ."</div>";?>
                    </div>
					<?php } else { ?>
							 <div class="box-body">
              <div class="callout callout-info">
                <h4>Order Cancel Anda Kosong</h4>

                <p style="color:white">Silahkan lakukan order untuk kenyamanan transaksi.</p>
              </div>
            </div>
					<?php } ?>

						<!-- sampai tampilkan order status  selesai -->
					
				
</div>

<!-- order status selesai end -->
<script type="text/javascript">
	
		$('td#infaqclick1').click(function(event) {
  		 	$(this).addClass('hidden');
  		 	$(this).next().removeClass('hidden');
  		 	});
		$('td#infaqclick2').click(function(event) {
  		 	$(this).addClass('hidden');
  		 	$(this).prev().removeClass('hidden');
  		 	});
	
	

	$('button#cancelorder').click(function(event) {
  		 	
        	 if (confirm('Are you sure you want to cancel this order?')) {
        	 	var order_id = $(this).prev().val();
        	 	var last_update	= document.getElementById("last_update").value;
        	 	
        	
			 if ( order_id	 == "" ) {
                 alert('Tidak ada data Order');
            }
            else{										
            	$.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Orderdel',
                    type: 'post',
                    data: {id : order_id, last_update : last_update},
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
                            alert('Cancel Order Gagal.');
                        }
                    }
                });

            } 
	  }
        	});

	$('button#orderselesai').click(function(event) {
  		 	
        	
        	 	var last_update	= document.getElementById("last_update").value;
        	 	var order_id = $(this).next().val();
        	 	var feedback = $(this).prev().val();
        	
			 if ( order_id	 == "" ) {
                 alert('Tidak ada data Order');
            }
            else{
            	// alert(feedback);
            	$.ajax({
                    url: '<?php echo base_url(); ?>Transaksi/Orderselesai',
                    type: 'post',
                    data: {id : order_id, last_update : last_update, feedback : feedback},
                    success: function(e){
                        if (e == "true") {
                        	// $('body').load(window.location.href);
                        	setTimeout(function(){// wait for 5 secs(2)
				        	location.reload(); // then reload the page.(3)
				      		}, 001);
                        	// $('body').load('<?php echo base_url(); ?>Page');
                            // $("#opencart").attr('class', "dropdown open");
                            // $("#openexpanded").attr('aria-expanded', "true");
                        } else {
                            alert('Confirm Order Selesai Gagal.');
                        }
                    }
                });

            } 
	  
        	});

	// $('#cart2').click(function(event) {
 //      		$('body').load('<?php echo base_url(); ?>Page/Cart');
                           
 //        	});
	//   $('#status2').click(function(event) {
 //      		$('body').load('<?php echo base_url(); ?>Page/status_order');
                           
 //        	});
</script>