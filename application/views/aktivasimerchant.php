  <style type="text/css">
   

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
    </style>

    <div class="container">
    
    <h3 class="w3ls-title w3ls-title1" style="margin-top:20px">Aktivasi Merchant</h3>  
    <?php if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
          } ?>
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Data Umum</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Data Karyawan</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>File Merchant</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Finish</p>
        </div>
    </div>
</div>
<form action ="<?php echo base_url();?>Auth/aktivasi_merchant" method="post" enctype="multipart/form-data">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Data Umum</h3>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input   type="text" required="required" name="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo $user->name ?>"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input   type="text" required="required" name="last_name" class="form-control" placeholder="Enter Last Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Username</label>
                    <input   type="text" required="required" name="username" class="form-control" readonly value="<?php echo $user->username ?>"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input  type="email" required="required" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $user->email ?>" readonly />
                </div>
                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input  type="text" required="required" name="phone" class="form-control" placeholder="Enter your phone (Telkomsel)" value="<?php echo $user->phone ?>" />
                </div>
                <div class="form-group">
                    <label class="control-label">Address</label>
                    <textarea  type="text" required="required" name="address"  class="form-control counted2"><?php echo $user->address?></textarea>
                    <h6 class="pull-right" style="margin-top:10px" id="counter2">200 characters remaining</h6> 
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Data Karyawan</h3>
                <div class="form-group">
                    <label class="control-label">NIK Telkomsel</label>
                    <input  type="text" required="required" name="nik_tsel" class="form-control" placeholder="Enter NIK Telkomsel" value="<?php echo $user->nik_tsel?>" />
                </div>
                <div class="form-group">
                    <label class="control-label">Email Telkomsel</label>
                    <input  type="text" required="required" name="email_tsel" class="form-control" placeholder="Enter Your Email Telkomsel" value="<?php echo substr($user->email_tsel,0,-16) ?>" />
                    <p> without @telkomsel.co.id</p>

                </div>
                <div class="form-group">
                    <label class="control-label">Telegram</label>
                    <input  type="text" name="telegram" class="form-control" placeholder="Enter your Telegram ID" required="required" value="<?php echo $user->telegram?>" />
                </div>
                <div class="form-group">
                    <label class="control-label">Lantai Kantor & Bagian</label>
                    <input  type="text" required="required" name="location" class="form-control" placeholder="Enter Your Working Area" value="<?php echo $user->location?>"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
            <input type="date" name="last_update" class="visible-xs" value="<?php echo date('Y-m-d'); ?> " />
        </div>
    </div>
     <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">

                <h3> File Merchant</h3>
                <div class="form-group">
                    <label class="control-label">Nama Merchant</label>
                    <input   type="text" required="required" name="merchant_name" class="form-control" placeholder="Enter Your Merchant Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Foto Profil Merchant</label>
                    <input  type="file" required="required" name="profil_merchant" class="form-control"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Deskripsi Merchant</label>
                    <textarea  required="required" name="deskripsi" class="form-control counted" placeholder="Enter what you will sell in Jual Beli MTT in desciption"  ></textarea>

                <h6 class="pull-right" style="margin-top:10px" id="counter">200 characters remaining</h6> 
                </div>
                <br>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3 class="w3ls-title w3ls-title1" style="margin-top:20px">One Step Again !</h3>
                <div class="form-group">
                    <label class="control-label">Your Password</label>
                    <input  type="password" required="required" name="password" class="form-control" placeholder="Enter your password for validation" />
                </div>
                <input class="btn btn-success btn-lg pull-right" name="submit" type="submit" value="Finish!">
            </div>
        </div>
    </div>
</form>
</div>
<script type="text/javascript">
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
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
    $(".counted").charCounter(200,{container: "#counter"});
    $(".counted2").charCounter(200,{container: "#counter2"});
    
});

</script>