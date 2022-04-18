<!DOCTYPE html>
<html>
<head>
<title>İzmir Saat</title>
<link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<div class="clearfix"></div>
                        
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
        <i ><img src="{{url('images/logo.png')}}" width="75px" height="75px"></i>
		<a href="adminana"><h1>İZMİR SAATLERİ</h1></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="adminana">AnaSayfa</a></li>
						<li class="grid"><a href="adminekle">Ekleme işlemler</a>
							
						</li>
						<li class="grid"><a href="adminkul">Kullanıcılar</a>
						</li>
						<li class="grid"><a href="adminsip">Siparişler</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
    <div class="bnr" id="home">
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <img src="images/bnr-1.jpg" alt=""/>
                </li>
                <li>
                    <img src="images/bnr-2.jpg" alt=""/>
                </li>
                <li>
                    <img src="images/bnr-3.jpg" alt=""/>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--Slider-Starts-Here-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
       // You can also use "$(window).load(function() {"
       $(function () {
         // Slideshow 4
         $("#slider4").responsiveSlides({
           auto: true,
           pager: true,
           nav: true,
           speed: 500,
           namespace: "callbacks",
           before: function () {
             $('.events').append("<li>before event fired.</li>");
           },
           after: function () {
             $('.events').append("<li>after event fired.</li>");
           }
         });
   
       });
     </script>
   <!--End-slider-script-->
<!--about-starts-->
<div class="about"> 
<div class="container">
   <div class="about-top grid-1">
       <div class="col-md-4 about-left">
           <figure class="effect-bubba">
               <img class="img-responsive" src="images/abt-1.jpg" alt=""/>
               <figcaption>
                   <h2>Lüks Saatler</h2>
               </figcaption>			
           </figure>
       </div>
       <div class="col-md-4 about-left">
           <figure class="effect-bubba">
               <img class="img-responsive" src="images/abt-2.jpg" alt=""/>
               <figcaption>
                   <h4>Klasik Saatler</h4>
               </figcaption>			
           </figure>
       </div>
       <div class="col-md-4 about-left">
           <figure class="effect-bubba">
               <img class="img-responsive" src="images/abt-3.jpg" alt=""/>
               <figcaption>
                   <h4>Dijital Saatler</h4>
               </figcaption>			
           </figure>
       </div>
       <div class="clearfix"></div>
   </div>
</div>
</div>
<!--about-end-->