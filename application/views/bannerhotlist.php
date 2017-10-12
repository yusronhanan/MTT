<style type="text/css">
    * {
  font-family: 'Sansita', sans-serif
}


.overhidden {
  overflow: hidden
}

.heightiframevideo {
  height: 300px !important
}

.embed-responsive-4by3 {
  padding-bottom: 43%
}

.hiden {
  display: none
}


/************************
Start TopBar Site
*************************/

select,
select >option,
input {
  border-width: 0px;
  outline: none;
  cursor: pointer
}

.Topbar {
  padding: 20px;
  font-size: 17px;
}

.Topbar .open-mune {
  position: relative
}

.Topbar .open-mune,
.Topbar .mune {
  list-style-type: none;
  cursor: pointer
}

.Topbar .mune {
  display: none;
  position: absolute;
  left: 100px
}

.Topbar .center-div >span {
  margin: 0 5px;
  letter-spacing: 1px;
}

.Topbar .socail ul {
  list-style-type: none;
  float: left;
  display: inline-flex;
  float: right;
}

.Topbar .socail ul li {
  margin: 0 10px;
  cursor: pointer;
}

.Topbar .socail ul li:hover {
  transform: scale(1.3);
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.secondbar {
  padding: 25px 0 60px 0
}

.secondbar .search {
  margin-top: 45px;
}

.secondbar .search input {
  border-width: 0;
  font-style: italic;
  width: 70%
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: black;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: black;
}

:-ms-input-placeholder {
  /* IE 10+ */
  color: black;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: black;
}

.secondbar .search button {
  border: none;
  background: transparent;
  outline: none
}

.secondbar .search .line {
  background-color: rgb(204, 204, 204);
  opacity: 0.502;
  width: 77%;
  height: 1px
}

.secondbar .brand {
  text-align: center;
  font-size: 56px;
  text-transform: uppercase;
  font-weight: bolder;
  letter-spacing: 2px;
}

.secondbar .itemcart ul {
  list-style-type: none;
  float: left;
  display: inline-flex;
  float: right;
  margin-top: 45px;
}

.secondbar .itemcart ul li {
  margin-right: 8px;
  cursor: pointer;
}

.secondbar .itemcart ul li:nth-child(even) {
  color: rgb(204, 204, 204);
}

.hot {
  position: absolute;
  top: -16px;
  left: 47px;
}
.blog h3 {
  margin-bottom: 30px;
  letter-spacing: 1px;
}

.blog .blog-title {
  position: absolute;
  bottom: 0;
  color: #fff;
  padding: 24px;
}

.blog .blog-title span {
  margin-right: 10px
}

.blog .blog-title i {
  margin-right: 10px
}
.subscribe h3 {
  letter-spacing: 1px;
}

.subscribe a {
  color: rgba(158, 157, 157, 0.9);
  letter-spacing: 1px
}

.subscribe form {
  border: 1px solid #ccc;
  padding: 10px;
  top: 20px;
  overflow: hidden;
  margin-bottom: 50px;
}

.subscribe input {
  float: left;
  line-height: 30px;
  letter-spacing: 1px;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: rgba(158, 157, 157, 0.9);
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: rgba(158, 157, 157, 0.9);
}

:-ms-input-placeholder {
  /* IE 10+ */
  color: rgba(158, 157, 157, 0.9);
}

:-moz-placeholder {
  /* Firefox 18- */
  color: rgba(158, 157, 157, 0.9);
}

.subscribe button {
  float: right;
  background-color: black;
  color: #fff;
  padding-right: 30px;
  padding-left: 30px;
  letter-spacing: 1px;
}


.fotter {
  padding: 50px 0 25px 0
}

.fotter h2,
.fotter h4 {
  letter-spacing: 1px
}

.fotter h2 {
  margin-top: 3px
}

.fotter .part1 p {
  color: rgba(158, 157, 157, 0.9);
  line-height: 32px;
  letter-spacing: .2px;
}

.fotter .part2 h4 {
  margin-left: 23px;
}

.fotter .part2 ul,
.fotter .part3 ul {
  list-style-type: square;
  color: rgba(158, 157, 157, 0.9);
  line-height: 35px;
  letter-spacing: 1px;
}

.fotter .part2 ul li a,
.fotter .part3 ul li a {
  color: rgba(158, 157, 157, 0.9);
}

.fotter .part2 ul li a:hover,
.fotter .part3 ul li a:hover {
  color: black
}

.fotter .part4 ul {
  color: rgba(158, 157, 157, 0.9);
  line-height: 30px;
  letter-spacing: 1px;
  margin-top: 23px;
}

.fotter .copyright {
  color: rgba(158, 157, 157, 0.9);
  letter-spacing: 1px;
}

.fotter .copyright p a {
  color: black
}


@media (max-width: 767px) {
  .Topbar .languge,
  .Topbar .socail ul {
    padding: 0
  }
  .Topbar .socail ul {
    float: initial;
    margin-top: 20px;
  }
  .Topbar .mune {
    left: 24px;
    background: rgba(0, 0, 0, 0.72);
    color: #fff;
    border-radius: 10px;
    padding: 20px;
  }
  .Topbar .open-mune i {
    font-size: xx-small
  }
  .Topbar .center-div >span {
    margin: 0;
    letter-spacing: 1px;
    font-size: 15px;
  }
  .secondbar {
    padding: 0
  }
  .Topbar {
    padding: 20px 0 0 0
  }
  .secondbar .itemcart ul {
    display: -webkit-inline-box;
    float: right;
    margin-top: 0
  }
  .navbar .navbar-collapse {
    text-align: center;
    position: absolute;
    background: rgba(0, 0, 0, 0.93);
    z-index: 9999;
    width: 100%;
  }
  .front-header .header-slider .carousel-caption h2 {
    font-size: 13px
  }
  .front-header .header-slider .carousel-caption p {
    display: none
  }
  .front-header .header-slider .carousel-caption button {
    padding: 0
  }
  .front-header .header-slider .carousel-indicators {
    left: 50% !important
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right {
    top: 5%
  }
  .dash {
    display: none
  }
  .fotter {
    text-align: center
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* Small Devices, Tablets */
  .Topbar .center-div >span {
    margin: 0;
  }
  .front-header .header-slider .carousel-indicators {
    left: 50% !important
  }
  .blog .row div img {
    text-align: center
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  /* Medium Devices, Desktops */
  .front-header .header-slider .carousel-caption {
    left: 20%
  }
  .front-header .header-slider .carousel-indicators {
    left: 50% !important
  }
  .front-header .super-sale {
    height: 358px
  }
  .front-header .super-sale h2 {
    margin-top: 87px
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right {
    top: 5%
  }
  .carousel-control .glyphicon-chevron-right {
    right: 249%;
  }
  carousel-control .glyphicon-chevron-left {
    left: 259%;
  }
  .product-slider .item .slide-img:hover .hover-slideproduct {
    right: 46px
  }
}

@media (min-width: 1200px)
/* Large Devices, Wide Screens */

{}


/* End Media Quary*/
.bestSeller{
    position: relative
}
.bestSeller>h5{
    
 font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    text-transform: uppercase;
   letter-spacing: 1.5;
    text-shadow: 1px 1px 1px #eee;
    margin-top: 40px;
    margin-bottom: 15px 
}
.bestSeller h5 .active{
    color:#000
}

.bestSeller span{
    color: #999}
.bestSeller .glyphicon{
    /*border: 1px solid #eee;*/
    padding: 5px;
    top:4px
}
.bestSeller .glyphicon:hover{
    /*background: #000;*/
    /*color:#fff*/
}

.bestSeller .productsSlider{
    margin-top: 30px;
    width: 1140px;
  /*  height: 490px;*/
    overflow: hidden;
    
}

.bestSeller .productsSlider .products{
       width: 3420px;
   
    display: flex;
    justify-content: space-between;
    
}
.bestSeller .productsSlider .product {
    
    display: inline-block;
   /* float: left;
    margin: 0 7px
*/}
.bestSeller .productsSlider .product img{
    margin-bottom: 10px;
    max-width: 100%
}
.bestSeller .productsSlider .product h6,.bestSeller .productsSlider .product h5{
     font-family: 'Montserrat',  'Lato';
   
    font-weight: bold
}
.bestSeller .productsSlider .product h6{
     color: #b8b8b8; 
    text-transform: uppercase
}
.bestSeller .productsSlider .product h5{
    margin: 25px 0
}
.bestSeller .productsSlider .product h5 span{
    text-decoration: line-through
}
.bestSeller .productsSlider .product a{
    display: inline-block;
         font-size: 13px;
    color: #000;
    text-shadow: 1px 1px 1px #eee;
    font-family: 'Montserrat', 'Lato';

    border: 1px solid #999;
    padding: 8px 15px;
    text-decoration: none;
}
.bestSeller .productsSlider .product .fa{
    /*color:#999;*/
        padding: 2px 0;
}
.bestSeller .productsSlider .product a:hover{
       background-color: #000;
    border: 1px solid #fff;
    color: #fff
}
.bestSeller .productsSlider .product a:hover .fa{
    color: #fff
}
.bestSeller hr{
 /*   margin-top: 50px*/
}
@media(min-width: 768px) and (max-width: 991px) { /* Small Screen */
    .bestSeller .productsSlider .product a {
    font-size: 9px;
  padding: 8px 10px;
    }
    .bestSeller .productsSlider .product h6{
    font-size: 10px}
}
@media(min-width: 100px) and (max-width: 767px) { /* X Small Screen */
     .bestSeller .productsSlider .product a {
    font-size: 9px;
  padding: 8px 10px;
    }
    .bestSeller .productsSlider .product{
        position: relative
    }
    .bestSeller .productsSlider .product h6,.bestSeller .productsSlider .product h5{
    font-size: 8px}
    .bestSeller .productsSlider .product h5{
      /*  position: absolute;
       top:40%;
        left: 25%;
     */
 margin: 0 0 5px 0;
    }
      .bestSeller .productsSlider .product a:first-of-type{
       /* position: absolute;
        top:50%;
        left: 17%;*/
           width: 80px;
  
    margin: 0 auto;
  
     
    }
   .bestSeller .productsSlider .product a {
    font-size: 8px;
    padding: 2px 2px;
    }
      .bestSeller .productsSlider .product a:nth-of-type(2){
      /*  position: absolute;
        top:56%;
        left: 25%;
     */
    }
    
      .bestSeller .productsSlider .product a:nth-of-type(3){
       /* position: absolute;
        top:56%;
        left: 60%;
     */
    }
}
@media(min-width: 100px) and (max-width: 499px) { /* XX Small Screen */
 .bestSeller .productsSlider .product h6{
    display: none
    }
       .bestSeller .productsSlider .product a:first-of-type{
           width:63px
    }
}
.sliderAndPromotions {
    margin-bottom: 20px
}
.sliderAndPromotions .container{
    padding: 0
}
.sliderAndPromotions .slider{
    float: left;
    margin-right: 30px;
  width:100%;
   /*  height: 576px;*/
    padding-top:calc(57600%/870);
    
position: relative;
    overflow: hidden;
    margin-bottom: 20px
    
    
}
.sliderAndPromotions .slider > img{
    position: absolute;
    left:0;
    top:0;
    bottom: 0;
    right: 0;
    width: 870px;
    
}
.sliderAndPromotions .slider input[name="slide_switch"]{
    display: none;
}
.sliderAndPromotions .slider label{
    
    margin: 1px;
    border: 2px solid #000;
    float: left;
    cursor: pointer;
    opacity: 0.6;
    width: 25px;
    height: 7px;
    background-color: transparent;
    z-index: 999;
    position: absolute;
   right: 100px;
    bottom: 15px;

    
}
.sliderAndPromotions .slider label:nth-of-type(2){
   right: 70px;
    bottom: 15px; 
}
.sliderAndPromotions .slider label:nth-of-type(3){
          right: 40px;
    bottom: 15px;
}
.sliderAndPromotions .slider input[name="slide_switch"]:checked+label{
     background-color: #000;
    
}

.sliderAndPromotions .slider input[name="slide_switch"]~img{
    opacity: 0;
    max-width: 100%;
    max-height: 100%
    
}
.sliderAndPromotions .slider input[name="slide_switch"]:checked+label+img{
    opacity: 1;
  
}
.sliderAndPromotions .promotions1 img{
    margin-bottom: 20px;
    max-width: 100%;
    
}
.sliderAndPromotions .promotions1 .promotion{
    background: #00cc33;
    color: #fff;
    float: left;
    width: 270px;
    max-width: 100%;
    
        padding: 9%;
    text-align: center;
    text-shadow: 1px 1px 1px #000
        
        
    
}
.sliderAndPromotions .promotions1 .promotion h4{
    text-transform: uppercase;
    
}
.sliderAndPromotions .promotions1 .promotion p{
    text-transform:capitalize;
    margin:25px 0;
    color:#a3a3a3
}
.sliderAndPromotions .promotions1  button{
    text-transform:uppercase;
    border: 1px solid #fff;
    padding: 5px 10px;
    background: transparent;
    box-shadow: 1px 1px 1px #000;
}
.sliderAndPromotions .promotions1  button:hover{
    border: 1px solid #000;
   color: #000;
    background: #fff;
    box-shadow: 1px 1px 1px #fff,
      -1px -1px 1px #fff  ;
}

@media(min-width: 1200px) {
    .sliderAndPromotions .promotions1 .promotion{
    padding:14%
    }
}
.promotions .prom{
     margin-bottom: 36px;
  
}
.promotions .prom.first{
     margin-right: 30px;
}
.promotions .prom:nth-of-type(2){
    margin-bottom: 25px
}
.promotions .prom img{
    margin-bottom: 0
/*max-width: 100%;*/
}
@media(min-width: 768px) and (max-width: 991px) { /* Small Screen */
    .sliderAndPromotions .slider{
        margin-bottom: 40px
    }
    .sliderAndPromotions .promotions1 #image1{
       
    }
    .sliderAndPromotions .promotions1 .promotion {
    height: 328px;
     
   /* padding: 22%;*/
    }
    .promotions h5 {
       
        margin-bottom: 18px;
    }
    .promotions .prom {
     margin-bottom: 0
}
    
    
}
@media(min-width: 992px) and (max-width: 1199px) { /* Medium Screen */
   .promotions .prom img{
    
max-width: 100%;
}
    .promotions .prom.first{
     margin-right: 0;
}
    .promotions .prom {
    margin-bottom: 20px;
}
    
}
.promotions h5{
 font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    text-shadow: 1px 1px 1px #eee;
  
    margin-bottom: 22px
}
@media(min-width: 768px) and (max-width: 991px) { /* Small Screen */
    .promotions .prom img{
        max-width: 100%
    }
    .promotions .prom:not(.first) img{
        height: 200px
    }
}
@media(min-width: 100px) and (max-width: 767px) { /*  XX Small Screen */
    .sliderAndPromotions {
    margin-top: 35px
    }
        
.promotions .prom img {
  margin:0 auto;
    max-width: 100%;
    display: block;
    }
  .sliderAndPromotions .container {
       padding: 0 15px
    }
    .sliderAndPromotions .promotions1 .promotion {
        float: none;
        margin: 0 auto
    }
    .promotions .prom.first {
   margin-right: 0
    }
    .sliderAndPromotions .promotions1 img {
        display: block;
        margin: 0 auto;
        margin-bottom: 20px
    }
}
.sliderAndPromotions {
    margin-bottom: 20px
}
.sliderAndPromotions .container{
    padding: 0
}
.sliderAndPromotions .slider{
    float: left;
    margin-right: 30px;
  width:100%;
   /*  height: 576px;*/
    padding-top:calc(57600%/870);
    
position: relative;
    overflow: hidden;
    margin-bottom: 20px
    
    
}
.sliderAndPromotions .slider > img{
    position: absolute;
    left:0;
    top:0;
    bottom: 0;
    right: 0;
    width: 870px;
    
}
.sliderAndPromotions .slider input[name="slide_switch"]{
    display: none;
}
.sliderAndPromotions .slider label{
    
    margin: 1px;
    border: 2px solid #000;
    float: left;
    cursor: pointer;
    opacity: 0.6;
    width: 25px;
    height: 7px;
    background-color: transparent;
    z-index: 999;
    position: absolute;
   right: 100px;
    bottom: 15px;

    
}
.sliderAndPromotions .slider label:nth-of-type(2){
   right: 70px;
    bottom: 15px; 
}
.sliderAndPromotions .slider label:nth-of-type(3){
          right: 40px;
    bottom: 15px;
}
.sliderAndPromotions .slider input[name="slide_switch"]:checked+label{
     background-color: #000;
    
}

.sliderAndPromotions .slider input[name="slide_switch"]~img{
    opacity: 0;
    max-width: 100%;
    max-height: 100%
    
}
.sliderAndPromotions .slider input[name="slide_switch"]:checked+label+img{
    opacity: 1;
  
}
.sliderAndPromotions .promotions1 img{
    margin-bottom: 20px;
    max-width: 100%;
    
}
.sliderAndPromotions .promotions1 .promotion{
    background: #333333;
    color: #fff;
    float: left;
    width: 270px;
    max-width: 100%;
    
        padding: 9%;
    text-align: center;
    text-shadow: 1px 1px 1px #000
        
        
    
}
.sliderAndPromotions .promotions1 .promotion h4{
    text-transform: uppercase;
    
}
.sliderAndPromotions .promotions1 .promotion p{
    text-transform:capitalize;
    margin:25px 0;
    color:#a3a3a3
}
.sliderAndPromotions .promotions1  button{
    text-transform:uppercase;
    border: 1px solid #fff;
    padding: 5px 10px;
    background: transparent;
    box-shadow: 1px 1px 1px #000;
}
.sliderAndPromotions .promotions1  button:hover{
    border: 1px solid #000;
   color: #000;
    background: #fff;
    box-shadow: 1px 1px 1px #fff,
      -1px -1px 1px #fff  ;
}

@media(min-width: 1200px) {
    .sliderAndPromotions .promotions1 .promotion{
    padding:14%
    }
}
.promotions .prom{
     margin-bottom: 36px;
  
}
.promotions .prom.first{
     margin-right: 30px;
}
.promotions .prom:nth-of-type(2){
    margin-bottom: 25px
}
.promotions .prom img{
    margin-bottom: 0
/*max-width: 100%;*/
}
@media(min-width: 768px) and (max-width: 991px) { /* Small Screen */
    .sliderAndPromotions .slider{
        margin-bottom: 40px
    }
    .sliderAndPromotions .promotions1 #image1{
       
    }
    .sliderAndPromotions .promotions1 .promotion {
    height: 328px;
     
   /* padding: 22%;*/
    }
    .promotions h5 {
       
        margin-bottom: 18px;
    }
    .promotions .prom {
     margin-bottom: 0
}
    
    
}
@media(min-width: 992px) and (max-width: 1199px) { /* Medium Screen */
   .promotions .prom img{
    
max-width: 100%;
}
    .promotions .prom.first{
     margin-right: 0;
}
    .promotions .prom {
    margin-bottom: 20px;
}
    
}
.promotions h5{
 font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    text-shadow: 1px 1px 1px #eee;
  
    margin-bottom: 22px
}
@media(min-width: 768px) and (max-width: 991px) { /* Small Screen */
    .promotions .prom img{
        max-width: 100%
    }
    .promotions .prom:not(.first) img{
        height: 200px
    }
}
@media(min-width: 100px) and (max-width: 767px) { /*  XX Small Screen */
    .sliderAndPromotions {
    margin-top: 35px
    }
        
.promotions .prom img {
  margin:0 auto;
    max-width: 100%;
    display: block;
    }
  .sliderAndPromotions .container {
       padding: 0 15px
    }
    .sliderAndPromotions .promotions1 .promotion {
        float: none;
        margin: 0 auto
    }
    .promotions .prom.first {
   margin-right: 0
    }
    .sliderAndPromotions .promotions1 img {
        display: block;
        margin: 0 auto;
        margin-bottom: 20px
    }
}
</style><script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js "></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css" />
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div style="height:40px"></div>
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo base_url(); ?>assets/images/madusuper.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url(); ?>assets/images/sedekah.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url(); ?>assets/images/umroh.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url(); ?>assets/images/sedekah.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" style="color:red;"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" style="color:red;"></span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div style="height:40px"></div>
            <form class="col-md-6" role="form">
                <div class="form-group">
                    <label for="destination">Destination, property name</label>
                    <input type="text" class="form-control" id="destination" placeholder="eg country, city" autofocus>
                </div>

                <div class="date-time row">
                    <!-- <div class="co-md-12">-->
                    <div class="form-group col-md-6">
                        <input type="text" class="check form-control" id="check_in" placeholder="Date">
                    </div>

                    <div class="form-group col-md-6">
                        <select class="date form-control" placeholder="Please Select">
                            <option>Please Select</option>
                            <option>10:00</option>
                            <option>12:00</option>
                            <option>14:00</option>
                            <option>16:00</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" class=""> <strong>Book as a gift</strong>
                </div>

                <div class="btn-group btn-group-justified">
                    <a href="#" class="btn btn-default">Book Now</a>
                    <a href="#" class="btn btn-default"><i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i> Add to favourite</a>
                </div>
                <!-- button group ---->

               
                <!-- Tabs --->
            </form>
        </div>
    </div>
    <!-- /.container -->
<!-- banner Done -->
<!-- banner 2  -->
<div style="margin-top:20px"></div>
 <div class="row" >
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
 <ul class="nav nav-pills nav-justified">
            <li ><a id="feed" href="<?php echo base_url(); ?>page"><h4><i class="fa fa-list-alt"></i>  Feed</h4></a></li>
            <li ><a id="wishlist" href="<?php echo base_url(); ?>pagein/wishlist"><h4><i class="fa fa-heart"></i>  Wishlist</h4></a></li>
            <li class="active" ><a id="hotlist" href="<?php echo base_url(); ?>page/hotlist"><h4><i class="fa fa-fire"></i>  Hot List</h4></a></li>
            <li ><a id="merchant" href="<?php echo base_url(); ?>page/merchant"><h4><i class="fa fa-shopping-bag"></i>  Merchant</h4></a></li>
            <li ><a id="merchantfavorit" href="<?php echo base_url(); ?>pagein/merchantfavorite"><h4><i class="fa fa-shopping-basket"></i>  Merchant Favorit</h4></a></li>
        </ul>
        </div>
        </div>
        </div>
        <!-- banner 2 end -->


    <section class="sliderAndPromotions"  style="margin-top:20px">
             <div class="container">
                 <div class="row">
                     <div class="col-xs-12 col-md-9">
             <div class="slider"> 
                 <input type="radio" name="slide_switch" id="id1" checked="">
                 <label for="id1">
                 </label>
                 <img src="http://localhost/MTT//assets/images/sedekah.jpg" style="height: 576px;">
                 
                  <input type="radio" name="slide_switch" id="id2">
                 <label for="id2">
                 </label>
                 <img src="http://localhost/MTT//assets/images/umroh.jpg" style="height: 576px;">
                 
                  <input type="radio" name="slide_switch" id="id3">
                 <label for="id3">
                 </label>
                 <img src=http://localhost/MTT//assets/images/madusuper.jpg style="height: 576px;">            
            </div></div> 
                 <div class="promotions1">
                      <div class="col-sm-offset-1 col-sm-5 col-md-offset-0 col-md-3">
                     <img id="image1" src="http://placehold.it/270x328">
                     </div>
                         <div class="col-sm-4 col-md-3">
                     
                    <img id="image1" src="http://placehold.it/270x225">
                  
                     
                  </div> 
                 </div>
                 </div>
                     <div class="clearfix"></div>
            </div>
        </section>
    <section class="promotions">
                     <div class="container">
                     <div class="row">
                         <div class="col-sm-6 col-md-5">
                      <div class="prom first">
                     <h5>Kurma Collection</h5>
                      <img src="<?php echo base_url() ?>assets/images/470x672kurma.jpg">
                     </div>
                         </div>
                         <div class="col-sm-6 col-md-7">
                      <div class="prom">
                      <h5>Makan Siang</h5>
                      <!-- <img src="http://placehold.it/670x246"> -->
                      <img src="<?php echo base_url() ?>assets/images/670x246makansiang.jpg">
                     </div>
                         
                      <div class="prom">
                      <h5>Kopi anti Kantuk</h5>
                      <img src="<?php echo base_url() ?>assets/images/670x352kopi.jpg">
                      <!-- <img src="http://placehold.it/670x352"> -->
                     </div>
                         </div>
                         <div class="clearfix"></div>
                 </div>
                     <hr>
                     </div>    
        </section>
  <section class="bestSeller text-center">
            <h5><span class="most"> Paling banyak dibeli</span></h5>
            <span class="glyphicon glyphicon-chevron-left"></span><span>------</span><span class="glyphicon glyphicon-chevron-right "></span>
                  <div class="container">
            <div class="productsSlider" style="width: 1125px;">
                <div class="products" style="width: 4500px; margin-left: -1125px;">
                <?php   $i = 1;
                        foreach ($list_product as $product): ?>
                       
                        <div class="product" style="width: 270px;">
                             <img src="http://placehold.it/270x360" width="270px" height="360px" >
                            <h6 title="<?php echo $product->name;?>"><?php echo substr($product->name, 0, 10);?>..</h6>
                            <h5>Rp. <?php echo $product->price;?></h5>
                            <input type="hidden" id="id_produk" name="" value="<?php echo $product->id;?>" />
              <input type="hidden" id="nama_produk" class="this" name="" value="<?php echo $product->name;?>" /> 
              <input type="hidden" id="harga_produk" class="this" name="" value="<?php echo $product->price;?>" /> 
              <input type="hidden" id="jumlah_produk" class="this" name="" value="1"/> 
              <input type="hidden" id="merchant_id" class="this" name="" value="<?php echo $product->merchant_id;?>"/>
                     <input type="hidden" id="id1" class="this" name="" value=""/> 
                    <button type="submit" id="tambahcart"  class="this btn btn-primary" ><i class="fa fa-cart-plus"></i></button>
                    <button class="btn btn-primary" id="tambahwishlist"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        </div>

                   <?php endforeach;
                     ?>
                    </div>
                
                       </div>
                        <hr>
                    </div>
            
        </section>

  <!-- Start Blog -->
<!--   <div class="blog">
    <div class="container">
      <h3 class=" text-center text-uppercase">from the blog</h3>
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <img class="img-responsive" src="http://placehold.it/370x255" style="width:370px;height:255px">
          <div class="blog-title">
            <h3></h3>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <img class="img-responsive" src="http://placehold.it/370x255" style="width:370px;height:255px">
          <div class="blog-title">
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <img class="img-responsive" src="http://placehold.it/370x255" style="width:370px;height:255px">
          <div class="blog-title">
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div> -->

<script>
    


/*global $, jQuery, console, alert, prompt, let */
$(document).ready(function () {

   "use strict";
    var width=1140;
    var animationSpeed=1000;
    var pause=3000;
    var currentSlide=1;
 
  var $slider=$(".productsSlider "),
       $container=$(".productsSlider .products"),
    $product=$(".productsSlider .products .product");
    //Reset Width and Height
    function resetWHOfSlider(){
      $slider.width($slider.parent().width()-15);/*.height($product.height());*/
        $container.width($slider.width()*4);/*.height($slider.height());*/
        $product.width($slider.width()*.24);/*.height($(slider.height()));*/
       
        
    }
    
    resetWHOfSlider();
        function resetWHOfSliderAndPromotion(){
         var images= $(".sliderAndPromotions .slider input[name='slide_switch']~img ");
            images.height(images.width()/870*576);
           /* console.log( images.height());*/
           /* $(".sliderAndPromotions .slider").height(images.height());*/
        }
    if(($(window).width()<500)&&($(window).width()>100)){
            removeFrontSlash();
        }
    resetWHOfSliderAndPromotion();
    // Resize Window
    $(window).on('resize', function () {
        resetWHOfSlider();
        resetWHOfSliderAndPromotion();
        if(($(window).width()<500)&&($(window).width()>100)){
            removeFrontSlash();
        }
    });
      // $slides=$container.find('.slide');
   // console.log($slides.length);
  var interval;
    function  goToCheck(){
             var marginLeft=$container.css("margin-left");
        
             if(marginLeft==="-"+$slider.width()+"px"){
               
               $(".bestSeller h5 span.new").addClass("active").siblings().removeClass("active"); 
             }
             else  if(marginLeft==="-"+$slider.width()*2+"px"){
               $(".bestSeller h5 span.most").addClass("active").siblings().removeClass("active");  
             }
             else{
                 $(".bestSeller h5 span.best").addClass("active").siblings().removeClass("active"); 
             }
             if(currentSlide===4){
                 currentSlide=1;
                  $container.css("margin-left",0);
                  
             }
         
        
    }
   function startSlider(){
  interval=  setInterval(function(){
         $container.animate({"margin-left":"-="+$slider.width()},animationSpeed,function(){
             currentSlide++;
            goToCheck();
            
         });
    },pause);
    }
  startSlider();
  
 /*  function pauseSlider(){
       clearInterval(interval);
   } $slider.on('mouseenter',pauseSlider).on('mouseleave',startSlider);
 
    
    */
    //right chevron
  $(".bestSeller .glyphicon-chevron-right").click(function(){
 
       $container.animate({"margin-left":"-="+$slider.width()},animationSpeed,function(){
              currentSlide++;
            if (($container).css("margin-left")==="-"+$slider.width()*2){
               
            }
               goToCheck();
       });
 });
      //left
  $(".bestSeller .glyphicon-chevron-left").click(function(){
       $container.animate({"margin-left":"+="+$slider.width()},animationSpeed,function(){
              currentSlide--;
           if(currentSlide===0)
            {
                currentSlide=3;
                 $container.css("margin-left","-"+$slider.width()*2+"px");
            }
             
               goToCheck();
       });
  });
   function removeFrontSlash(){
     
var elements = document.querySelectorAll("header .logging span");
elements[0].innerHTML = elements[0].innerHTML.replace(/\//g," ");
elements[1].innerHTML = elements[1].innerHTML.replace(/\//g," ");

   } 
  //links hidden collapse
    $(".links ul").hide(0);
    $(".links .container >i").click(function(){
      $(".links ul").fadeToggle(0);   
    })
 
  });




</script>
  