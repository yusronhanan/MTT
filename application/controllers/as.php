if (in_array($product->pro_id, $product_validation) && $this->session->userdata('logged_in') == TRUE ) { 
						$button ='<button class="btn btn-primary" id="deletewishlist"><i class="fa fa-heart" aria-hidden="true"></i></button>';
						 

					} else{
						
							$button ='<button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>';	
						 } 

			$output .=	'<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>'.  $i++.'  <br> <!-- 20% --></h6></div>
							<a href="'.  base_url() .'index.php/page/detail_product/'.  $product->pro_id .'"><img title="'.  $product->name .'" src="'.  base_url() .'/assets/images/e2.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5 title="'.  $product->name .'"><a href="'.  base_url().'index.php/page/detail_product/'. $product->pro_id .'/">'.  substr($product->name,0,14)."..<br>";'. </a></h5> 
								<h6><!-- <del>$700</del> -->Rp. '.  $product->price .'</h6> 
								<input type="hidden" id="id_produk" name="" value="'.  $product->pro_id.'" />
							<input type="hidden" id="nama_produk" class="this" name="" value="'.  $product->name.'" /> 
							<input type="hidden" id="harga_produk" class="this" name="" value="'.  $product->price.'" /> 
							<input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
							<input type="hidden" id="merchant_id" class="this" name="" value="'.  $product->merchant_id.'"/>
							<input type="hidden" id="id1" class="this" name="" value=""/> 
							<button type="submit" id="tambahcart"  class="this btn btn-primary" ><i class="fa fa-cart-plus"></i> </button>
							<input type="hidden" id="wishlist_id" name="" value="'.  $product->wish_id.'" />
						'. $button.'
							</div>
						</div>
					</div>
					';
				}
	
		$output .= '<div class="clearfix"> </div>';