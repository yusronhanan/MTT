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
    /*border-radius: 50px;*/
    cursor: pointer;
}
.custom-input-file:hover .uploadPhoto { display: block; }
   
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
              <form id="formfoto" action ="<?php echo base_url();?>pagein/EditProfilePhoto" method="post" enctype="multipart/form-data">
              <!-- <img class="img-responsive" width="300px" height="300px" src="<?php echo base_url() ?>/assets/images/<?php echo $user->image ?>" alt="profile photo"> -->

              <input type="date" name="last_update" class="hidden" value="<?php echo date("Y-m-d"); ?> " />
                               <div class="custom-input-file" id="previewavatar" style="background-image:url('<?php echo base_url() ?>/assets/images/<?php echo $user->image ?>');">
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" id="filefoto" name="fotoprofile" class="change-avatar" name="avatar" id="avatar">
                                    </label>
                                </div>

               </form>

              <h3 class="profile-username text-center"><?php echo $user->name ?></h3>

              <p class="text-muted text-center">@<?php echo $user->username ?></p>

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
                <?php echo $user->email ?>
              </p>

              <hr>
         <strong><i class="fa fa-envelope-o margin-r-5"></i> Email Telkomsel</strong>

              <p class="text-muted">
                <?php echo $user->email_tsel ?>
              </p>
        <hr>

          <strong><i class="fa fa-user margin-r-5"></i> NIK Telkomsel</strong>

              <p class="text-muted">
                <?php echo $user->nik_tsel ?>
              </p>
        <hr>
 <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

              <p class="text-muted">
                <?php echo $user->phone ?>
              </p>

              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted"><?php echo $user->address ?> </p>

              <hr>

<strong><i class="fa fa-industry margin-r-5"></i> Location Work Area</strong>

              <p class="text-muted"><?php echo $user->location ?> </p>

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
              <li class="active"><a href="#notification" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
             
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="notification">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">

                  
                  <!-- timeline time label -->
                  <!-- <li class="time-label">
                        <span class="bg-red">
                          <?php echo date("d-m-Y") ?>
                        </span>
                  </li> -->
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                 <!--  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li> -->
                  <!-- END timeline item -->
                  <!-- timeline item -->
                 <!--  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li> -->
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <?php foreach ($notification as $notiff) {
                   ?>
                     
                  <li>
                    <?php if ($notiff->type_notification == 'diskusi') {
                        ?>
                    <i class="fa fa-comments bg-yellow"></i>
                        <?php
                      } ?>
                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i><?php echo $notiff->created_at ?></span>

                      <h3 class="timeline-header"><a href="#"><?php echo $notiff->subject ?></a> <?php echo $notiff->text ?></h3>

                      <div class="timeline-body">
                        <?php echo $notiff->comment ?>
                      </div>
                      <?php if ($notiff->type_notification == 'diskusi') {
                        ?>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs" href="<?php echo base_url() ?>Page/detail_product/<?php echo $notiff->product_id ?>">View comment</a>
                      </div>

                        <?php
                      } ?>
                    </div>
                  </li>
                <?php }?>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <!-- <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li> -->
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <!-- <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li> -->
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form action ="<?php echo base_url();?>pagein/EditProfile" class="form-horizontal" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="merchant_id" placeholder="Nama Produk" class="form-control" required="" value="" readonly><br>
                              <input type="date" name="last_update" class="hidden" value="<?php echo date('Y-m-d'); ?> " />
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10 input-group">
                      
                      <input type="text" name="name" placeholder="Username" class="form-control" required="" value="<?php echo $user->name ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputUsername" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10 input-group">
                      <span class="input-group-addon">@</span>
                     <input type="text" name="username" placeholder="Username" class="form-control" required="" value="<?php echo $user->username ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10 input-group">
                      <input type="text" name="email" placeholder="Email" class="form-control" required="" value="<?php echo $user->email ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10 input-group">
                      <input type="text" name="phone" placeholder="Phone +62" class="form-control" required="" value="<?php echo $user->phone ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10 input-group">
                     <textarea name="address" class="form-control" required="" value=""><?php echo $user->address ?> </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTelegram" class="col-sm-2 control-label">Telegram</label>

                    <div class="col-sm-10 input-group">
                      <input type="text" name="telegram" placeholder="Telegram" class="form-control" required="" value="<?php echo $user->telegram ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNIKTSEL" class="col-sm-2 control-label">NIK Telkomsel</label>

                    <div class="col-sm-10 input-group">
                      <input type="text" name="nikTsel" placeholder="NIK Telkomsel" class="form-control" required="" value="<?php echo $user->nik_tsel ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmailTSEL" class="col-sm-2 control-label">Email Telkomsel</label>


                    <div class="col-sm-10 input-group">
                     <input type="text" name="emailTsel" placeholder="Email Telkomsel" class="form-control float-left" required="" value="<?php echo substr($user->email_tsel,0,-16) ?>">
                     <span class="input-group-addon">@telkomsel.co.id</span>
                    
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputLocation" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10 input-group">
                      <input type="text" name="location" placeholder="Enter your work are, example : LT.9 MTT" class="form-control" required="" value="<?php echo $user->location ?>">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 input-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 input-group">
                      <button type="button" class="btn btn-success" id="topassword" data-toggle="modal" data-target="#updateprofile"><i class="fa fa-pencil"></i> Update</button> 
                      <button type="button" id="cancelupdate" class="btn btn-danger">Cancel</button>
                    </div>
                  </div>
                    <div class="modal fade product_view" id="updateprofile">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">Update Profile</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    
                    <div class="col-md-12 product_content">
                      <p> Anda yakin akan mengganti data profil anda? Jika iya, masukkan password anda.</p>
                       <h5>Password :</h5>
                        <input type="password" name="password" class="form-control">
                           <br>
               <input type="submit" name="submit" class="btn btn-success" value="Update">
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </form>
              </div>
              <!-- /.tab-pane -->
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

   $('button#cancelupdate').click(function(event) {
            // setTimeout(function(){// wait for 00.1 secs(2)
            //       location.reload(); // then reload the page.(3)
            //       }, 001);
           $('body').load(window.location.href);       
          });

    document.getElementById("filefoto").onchange = function() {
    document.getElementById("formfoto").submit();
    $('body').load(window.location.href); 
}  

$("input.form-control,textarea.form-control").bind('keyup mouseup', function (event) {

    var input = $(this).val();

     if (input == '' || input == null || $.trim(input).length < 1) {
        $(this).parent().parent().addClass('has-error');
     }
     else{
       $(this).parent().parent().removeClass('has-error');
     }
        
});  
</script>