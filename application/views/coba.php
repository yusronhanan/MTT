<form method="post" class action="<?php echo base_url(); ?>page/namametodkechekout" target>
<!-- <button type="button" class="sbmincart-closer"></button> -->
<!-- <ul> -->
<tr> <td colspan="2">
                            <!-- <a class="btn btn-tsel btn-sm pull-right"
                               href="#delete"
                               title="Remove Item">X</a> -->
                               	<button type="button" class="sbmincart-remove" data-sbmincart-idx="0"></button> <b>

	<!-- <li class="sbmincart-item">
		<div class="sbmincart-details-name">
	 -->		<a href="<?php echo base_url() ?>page">namacart</a>
			<!-- <ul class="sbmincart-attributes"></ul>
		</div> -->
		</b></td> </tr>  <tr> <td>
		<!-- <div class="sbmincart-details-remove"> -->
		<!-- 	<button type="button" class="sbmincart-remove" data-sbmincart-idx="0"></button> -->
		<!-- </div> -->
		<!-- <div class="sbmincart-price"><span>Rp. harga</span></div> -->

		<li><span>Harga</span> Rp 100.000</li>
                                <li><span>Ongkos Kirim</span> Rp 2.000</li>
                                
                        </td>

		<!-- jgn lupa input hidden id -->
		<input type="hidden" name="w3ls_item1" value="nama">
		<input type="hidden" name="amount_1" value="20000">
		<input type="hidden" name="shipping_1" value="undefined">
		<input type="hidden" name="shipping2_1" value="undefined">
	</tr>
	<!-- </li>
</ul> -->
	<!-- <div class="sbmincart-footer">
		<div class="sbmincart-subtotal">
			Subtotal : 4900000 IDR
		</div>
		<div class="sbmincart-subtotal">
			Checkout
		</div>
	</div> -->


                </table>
            </div>
            <div class="col-md-3">
                <div style="text-align: center;">
                    <h3>Total Harga</h3>
                    <h3><span style="color:green;">Rp 304.000</span></h3>
                </div>
            </div>

	<input type="hidden" name="cmd" value="_cart">
	<input type="hidden" name="upload" value="1">
	<input type="hidden" name="bn" value="sbmincart_AddToCart_WPS_US">


	
</form>
<!-- </div> -->
