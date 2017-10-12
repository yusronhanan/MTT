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
                <a href="<?php echo base_url(); ?>page/merchant_profile/<?php echo $merchant->id ?>">
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
                    <div class="m-t-xs btn-group">
                        
                        
                        <a href="tel://<?php echo $phone ?>" class="btn btn-xs btn-white" style="text-decoration:none !important;"><i class="fa fa-2x fa-phone"></i><?php echo $i ?> </a>

                        <a href="sms:<?php echo $phone ?>" class="btn btn-xs btn-white" style="text-decoration:none !important;"><i class="fa fa-2x fa-envelope" ></i> </a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp ?>" style="text-decoration:none !important;"><i class="fa fa-2x fa-whatsapp"></i> </a> 

                    </div>
                    <input type="hidden" id="id_merchant" name="" value="<?php echo $merchant->id ?>">
                     <button class="profile-card" id="favoritemerchant">Favorite</button>
            <input type="hidden" id="id_merchant" name="" value="<?php echo $merchant->id ?>">
                </div>
        
            </div>
        </div>



                           <?php
                         
                            endforeach; ?>

