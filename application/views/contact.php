
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>


    <!-- contact-page -->
    <div class="contact">
        <div class="container"> 
            <h3 class="w3ls-title w3ls-title1">Contact Us</h3>  
            <div class="map-info">
                <div class="col-md-6 map-grids">
                    <h4>Our Office 1</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.00840912857!2d106.8173426!3d-6.2304586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89cf090e52d3cf8!2sTelkomsel+Smart+Office+(TSO)+Head+Office!5e0!3m2!1sid!2sid!4v1502855523367" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 map-grids">
                    <h4>Our Office 2</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.00840912857!2d106.8173426!3d-6.2304586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89cf090e52d3cf8!2sTelkomsel+Smart+Office+(TSO)+Head+Office!5e0!3m2!1sid!2sid!4v1502855523367" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>  
                </div>
                <!-- email form contact -->

                <div class="contact-form-row">
                <h3 class="w3ls-title w3ls-title1">Contact Us</h3>  
                <div class="col-md-7 contact-left">
                    <form action="#" method="post">
                        <input type="text" name="Name" placeholder="Name" required="">
                        <input class="email" type="text" name="Email" placeholder="Email" required="">
                        <textarea placeholder="Message" name="Message" required=""></textarea>
                        <input type="submit" value="SUBMIT">
                    </form>
                </div> 
                 
                <div class="clearfix"> </div>   
            </div>
                </div>
        </div>
        <!-- contact page-->