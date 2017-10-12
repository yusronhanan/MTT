<li class="dropdown head-dpdn" id="openNotifikasi">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="openexpanded"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Notifikasi<?php  if ($this->session->userdata('logged_in') == TRUE) {?> 
						<span class="badge">
						<!-- <?php echo $amountNotifikasi; ?>  -->
						</span>
						<?php }  ?></a>
						<ul  id="ul1" class="dropdown-menu dropdown-cart" role="menu">
              <li id="minicart"></li>

              <?php 

		
	
          				
              if (empty($list_notif)): ?>
							 <li class="text-center" >Tidak ada notifikasi terbaru</li>
							 <li class="divider"></li>
              <li><a class="text-center" href="<?php echo base_url(); ?>page/notifikasi">Lihat Semua Pemberitahuan</a></li>
					<?php endif ?>

					<?php if (!empty($list_notif)): ?>
              <!-- loop notifikasi -->
               <?php
                        $i = 1;
                        foreach ($list_notif as $notifikasi): 
						// $i++
						 ?>
               <li>
                  <span class="item">
                    <span class="item-left">
                        <!-- <img src="http://lorempixel.com/50/50/" alt="" /> -->
                        <span class="item-info">
                            <span><?php echo substr($notifikasi->subject,0,9); ?>...</span>
                            <span><?php echo $notifikasi->text; ?></span>
                        </span>
                    </span>
                    <span class="item-right">
                    	<input type="hidden" id="id_notifikasi" class="this" name="" value="<?php echo $notifikasi->id_notifikasi;?>" />
                        
                    </span>
                </span>
              </li>
              <?php endforeach; ?>
              
              <!-- loop notifikasi end -->
				<li class="divider"></li>
              <li><a class="text-center" href="<?php echo base_url(); ?>page/notifikasi">Lihat Semua Pemberitahuan</a></li>
              <?php endif; 
              ?>
             
						
						 
						
				
              
              
          </ul>
					</li>