  <style type="text/css">
        



/****** Searchable container */

.title{
 margin-left:20px
}
/*
.fa-user{
 font-size:80px   
}*/

.searchable-container{
    margin-top:40px;
}

.glyphicon-lg{
    font-size:4em
}
.info-block{
    border-right:5px solid #E6E6E6;margin-bottom:25px
}
.info-block .square-box {
    width:120px;
    min-height:120px;
    margin-right:22px;
    text-align:center!important;
    background-color:#676767;
    padding:20px 0
}
.info-block:hover .info-block.block-info {
    border-color:#20819e
}

.info-block.block-info .square-box {
    background-color:#5bc0de;
    color:#FFF
}






/*   */



.btn-compose-email {
    padding: 10px 0px;
    margin-bottom: 20px;
}

.btn-danger {
    background-color: #E9573F;
    border-color: #E9573F;
    color: white;
}

.panel-teal .panel-heading {
    background-color: #37BC9B;
    border: 1px solid #36b898;
    color: white;
}

.panel .panel-heading {
    padding: 5px;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    border-bottom: 1px solid #DDD;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
}

.panel .panel-heading .panel-title {
    padding: 10px;
    font-size: 17px;
}

form .form-group {
    position: relative;
    margin-left: 0px !important;
    margin-right: 0px !important;
}

.inner-all {
    padding: 10px;
}

/* ========================================================================
 * MAIL
 * ======================================================================== */
.nav-email > li:first-child + li:active {
  margin-top: 0px;
}
.nav-email > li + li {
  margin-top: 1px;
}
.nav-email li {
  background-color: white;
}
.nav-email li.active {
  background-color: transparent;
}
.nav-email li.active .label {
  background-color: white;
  color: black;
}
.nav-email li a {
  color: black;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.nav-email li a:hover {
  background-color: #EEEEEE;
}
.nav-email li a i {
  margin-right: 5px;
}
.nav-email li a .label {
  margin-top: -1px;
}

.table-email tr:first-child td {
  border-top: none;
}
.table-email tr td {
  vertical-align: top !important;
}
.table-email tr td:first-child, .table-email tr td:nth-child(2) {
  text-align: center;
  width: 35px;
}
.table-email tr.unread, .table-email tr.selected {
  background-color: #EEEEEE;
}
.table-email .media {
  margin: 0px;
  padding: 0px;
  position: relative;
}
.table-email .media h4 {
  margin: 0px;
  font-size: 14px;
  line-height: normal;
}
.table-email .media-object {
  width: 35px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
}
.table-email .media-meta, .table-email .media-attach {
  font-size: 11px;
  color: #999;
  position: absolute;
  right: 10px;
}
.table-email .media-meta {
  top: 0px;
}
.table-email .media-attach {
  bottom: 0px;
}
.table-email .media-attach i {
  margin-right: 10px;
}
.table-email .media-attach i:last-child {
  margin-right: 0px;
}
.table-email .email-summary {
  margin: 0px 110px 0px 0px;
}
.table-email .email-summary strong {
  color: #333;
}
.table-email .email-summary span {
  line-height: 1;
}
.table-email .email-summary span.label {
  padding: 1px 5px 2px;
}
.table-email .ckbox {
  line-height: 0px;
  margin-left: 8px;
}
.table-email .star {
  margin-left: 6px;
}
.table-email .star.star-checked i {
  color: goldenrod;
}

.nav-email-subtitle {
  font-size: 15px;
  text-transform: uppercase;
  color: #333;
  margin-bottom: 15px;
  margin-top: 30px;
}

.compose-mail {
  position: relative;
  padding: 15px;
}
.compose-mail textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #DDD;
}

.view-mail {
  padding: 10px;
  font-weight: 300;
}

.attachment-mail {
  padding: 10px;
  width: 100%;
  display: inline-block;
  margin: 20px 0px;
  border-top: 1px solid #EFF2F7;
}
.attachment-mail p {
  margin-bottom: 0px;
}
.attachment-mail a {
  color: #32323A;
}
.attachment-mail ul {
  padding: 0px;
}
.attachment-mail ul li {
  float: left;
  width: 200px;
  margin-right: 15px;
  margin-top: 15px;
  list-style: none;
}
.attachment-mail ul li a.atch-thumb img {
  width: 200px;
  margin-bottom: 10px;
}
.attachment-mail ul li a.name span {
  float: right;
  color: #767676;
}

@media (max-width: 640px) {
  .compose-mail-wrapper .compose-mail {
    padding: 0px;
  }
}
@media (max-width: 360px) {
  .mail-wrapper .panel-sub-heading {
    text-align: center;
  }
  .mail-wrapper .panel-sub-heading .pull-left, .mail-wrapper .panel-sub-heading .pull-right {
    float: none !important;
    display: block;
  }
  .mail-wrapper .panel-sub-heading .pull-right {
    margin-top: 10px;
  }
  .mail-wrapper .panel-sub-heading img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
  }
  .mail-wrapper .panel-footer {
    text-align: center;
  }
  .mail-wrapper .panel-footer .pull-right {
    float: none !important;
    margin-left: auto;
    margin-right: auto;
  }
  .mail-wrapper .attachment-mail ul {
    padding: 0px;
  }
  .mail-wrapper .attachment-mail ul li {
    width: 100%;
  }
  .mail-wrapper .attachment-mail ul li a.atch-thumb img {
    width: 100% !important;
  }
  .mail-wrapper .attachment-mail ul li .links {
    margin-bottom: 20px;
  }

  .compose-mail-wrapper .search-mail input {
    width: 130px;
  }
  .compose-mail-wrapper .panel-sub-heading {
    padding: 10px 7px;
  }
}











/*Comment List styles*/
.comment-list .row {
  margin-bottom: 0px;
}
.comment-list .panel .panel-heading {
  padding: 4px 15px;
  position: absolute;
  border:none;
  /*Panel-heading border radius*/
  border-top-right-radius:0px;
  top: 1px;
}
.comment-list .panel .panel-heading.right {
  border-right-width: 0px;
  /*Panel-heading border radius*/
  border-top-left-radius:0px;
  right: 16px;
}
.comment-list .panel .panel-heading .panel-body {
  padding-top: 6px;
}
.comment-list figcaption {
  /*For wrapping text in thumbnail*/
  word-wrap: break-word;
}
/* Portrait tablets and medium desktops */
@media (min-width: 768px) {
  .comment-list .arrow:after, .comment-list .arrow:before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-color: transparent;
  }
  .comment-list .panel.arrow.left:after, .comment-list .panel.arrow.left:before {
    border-left: 0;
  }
  /*****Left Arrow*****/
  /*Outline effect style*/
  .comment-list .panel.arrow.left:before {
    left: 0px;
    top: 30px;
    /*Use boarder color of panel*/
    border-right-color: inherit;
    border-width: 16px;
  }
  /*Background color effect*/
  .comment-list .panel.arrow.left:after {
    left: 1px;
    top: 31px;
    /*Change for different outline color*/
    border-right-color: #FFFFFF;
    border-width: 15px;
  }
  /*****Right Arrow*****/
  /*Outline effect style*/
  .comment-list .panel.arrow.right:before {
    right: -16px;
    top: 30px;
    /*Use boarder color of panel*/
    border-left-color: inherit;
    border-width: 16px;
  }
  /*Background color effect*/
  .comment-list .panel.arrow.right:after {
    right: -14px;
    top: 31px;
    /*Change for different outline color*/
    border-left-color: #FFFFFF;
    border-width: 15px;
  }
}
.comment-list .comment-post {
  margin-top: 6px;
}







/**** resumee ****/
                    
    /* uses font awesome for social icons */

.page-header{
  text-align: center;    
}

/*social buttons*/
.btn-social{
  color: white;
  opacity:0.9;
}
.btn-social:hover {
  color: white;
    opacity:1;
}
.btn-facebook {
background-color: #3b5998;
opacity:0.9;
}
.btn-twitter {
background-color: #00aced;
opacity:0.9;
}
.btn-linkedin {
background-color:#0e76a8;
opacity:0.9;
}
.btn-github{
  background-color:#000000;
  opacity:0.9;
}
.btn-google {
  background-color: #c32f10;
  opacity: 0.9;
}
.btn-stackoverflow{
  background-color: #D38B28;
  opacity: 0.9;
}

/* resume stuff */

.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4 {
    margin-bottom: 10px;
    margin-top: 0;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4{
    color: #d9534f;
}

.resume .list-group-item:first-child, .resume .list-group-item:last-child{
  border-radius:0;
}

/*makes an anchor inactive(not clickable)*/
.inactive-link {
   pointer-events: none;
   cursor: default;
}

.resume-heading .social-btns{
  margin-top:15px;
}
.resume-heading .social-btns i.fa{
  margin-left:-5px;
}



@media (max-width: 992px) {
  .resume-heading .social-btn-holder{
    padding:5px;
  }
}


/* skill meter in resume. copy pasted from http://bootsnipp.com/snippets/featured/progress-bar-meter */

.progress-bar {
    text-align: left;
    white-space: nowrap;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  cursor: pointer;
}

.progress-bar > .progress-type {
  padding-left: 10px;
}

.progress-meter {
  min-height: 15px;
  border-bottom: 2px solid rgb(160, 160, 160);
  margin-bottom: 15px;
}

.progress-meter > .meter {
  position: relative;
  float: left;
  min-height: 15px;
  border-width: 0px;
  border-style: solid;
  border-color: rgb(160, 160, 160);
}

.progress-meter > .meter-left {
  border-left-width: 2px;
}

.progress-meter > .meter-right {
  float: right;
  border-right-width: 2px;
}

.progress-meter > .meter-right:last-child {
  border-left-width: 2px;
}

.progress-meter > .meter > .meter-text {
  position: absolute;
  display: inline-block;
  bottom: -20px;
  width: 100%;
  font-weight: 700;
  font-size: 0.85em;
  color: rgb(160, 160, 160);
  text-align: left;
}

.progress-meter > .meter.meter-right > .meter-text {
  text-align: right;
}



.custom-input-file {
    overflow: hidden;
    position: relative;
    width: 200px;
    height: 200px;
        
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
                        
/**** resume ****/
    </style>
   <div class="container">
        <!-- resumt --><br>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 lead">User profile<hr></div>
             <?php if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
          } ?>
          </div>
          <div class="row">
      <div class="col-md-4 text-center">
                           <figure>
                           <form id="formfoto" action ="<?php echo base_url();?>pagein/EditProfilePhoto" method="post" enctype="multipart/form-data">
                              <!-- <img class="img-responsive blah" id="img-profile" width="400px" alt="Photo Profile" src="<?php echo base_url(); ?>/assets/images/<?php echo $user->image ?>"> -->
                              
                              <!-- <input type='file' id="filefoto" name="fotoprofile" class="imgInp" class="uploadinput" /> -->

                              <input type="date" name="last_update" class="hidden" value="<?php echo date("Y-m-d"); ?> " />
                               <div class="custom-input-file" id="previewavatar" style="background: #eee url('<?php echo base_url() ?>/assets/images/<?php echo $user->image ?>');">
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" id="filefoto" name="fotoprofile" class="change-avatar" name="avatar" id="avatar">
                                    </label>
                                </div>
                                <!-- <input type="hidden" id="buttonfoto" name="submit" class="btn btn-success" value="OK"> -->
                              </form>
                            
                           </figure>
                           <!-- <div class="row">
                              <div class="col-xs-12 social-btns">
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-google">
                                    <i class="fa fa-google"></i> </a>
                                 </div>
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-facebook">
                                    <i class="fa fa-facebook"></i> </a>
                                 </div>
                              </div>
                              
                              
                           </div> -->
                       
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="only-bottom-margin"><?php echo $user->username ?></h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span class="text-muted">Email:</span> <?php echo $user->email?><br>
                  <span class="text-muted">Birth date:</span> <?php echo $user->phone ?><br>
                  <span class="text-muted">Gender:</span> <?php echo $user->address ?><br><br>
                  <small class="text-muted">Created: 01.01.2015</small>
                </div>
                <div class="col-md-6">
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-comment text-muted"></i> 500
                  </div>
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-thumbs-up text-muted"></i> 1500
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <hr><button class="btn btn-default pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <div class="panel panel-default">
               <div class="panel-heading resume-heading">
                  <div class="row">
                     <div class="col-lg-12">
                      <div style="padding-top:20px"></div>
                        
         
          <div style="padding-top:20px"></div>

                      
                        <form action ="<?php echo base_url();?>pagein/EditProfile" method="post" enctype="multipart/form-data">
                        <div class="col-xs-12 col-sm-5">
                           <ul class="list-group">
                              <!-- <i class="fa fa-key"></i><label>&nbsp Merchant ID</label> -->
                              <input type="hidden" name="merchant_id" placeholder="Nama Produk" class="form-control" required="" value="" readonly><br>
                              <input type="date" name="last_update" class="hidden" value="<?php echo date('Y-m-d'); ?> " />
                              <!-- batas -->
                              <label>&nbsp Nama</label>
                              <input type="text" name="name" placeholder="Username" class="form-control" required="" value="<?php echo $user->name ?>"><br>
                             <label>&nbsp Username</label>
                              <input type="text" name="username" placeholder="Username" class="form-control" required="" value="<?php echo $user->username ?>"><br>
                                  <label>&nbsp Email</label>
                              <input type="text" name="email" placeholder="Email" class="form-control" required="" value="<?php echo $user->email ?>"><br>
                              <label>&nbsp Phone</label>
                             <input type="text" name="phone" placeholder="Phone +62" class="form-control" required="" value="<?php echo $user->phone ?>"><br>
                            <label>&nbsp Address</label>
                             <textarea name="address" class="form-control" required="" value=""><?php echo $user->address ?> </textarea><br>
                              <label>&nbsp Telegram</label>
                             <input type="text" name="telegram" placeholder="Telegram" class="form-control" required="" value="<?php echo $user->telegram ?>"><br>
                              <label>&nbsp NIK Telkomsel</label>
                             <input type="text" name="nikTsel" placeholder="NIK Telkomsel" class="form-control" required="" value="<?php echo $user->nik_tsel ?>"><br>

                              <label>&nbsp Email Telkomsel</label>
                             <input type="text" name="emailTsel" placeholder="Email Telkomsel" class="form-control float-left" required="" value="<?php echo substr($user->email_tsel,0,-16) ?>"> <p>@telkomsel.co.id</p><br>
                           </ul>
                           <!-- <input type="submit" name="submit" class="btn btn-success" value="update"> -->
                        <!-- <a href=""> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateprofile"><i class="fa fa-pencil"></i> Update</button>

                          <button type="button" id="cancelupdate" class="btn btn-danger">Cancel</button>

                           <!-- modal password validasi -->
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
</div>
</form>
</div>
</div>
</div>
</div>
</div>
