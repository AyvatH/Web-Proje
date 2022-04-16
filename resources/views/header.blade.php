<title>İzmir Saat</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link rel="stylesheet" href="{{url('css/style.css')}}">
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
				<div class="col-md-6 top-header-main">
					<div class="cart box_1">
						<a href="checkout">
							 <div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Sepeti Boşalt</a></p>
						<div class="clearfix"> </div>

					</div>

                    @if(session()->get('kull')==null)
					<div style="margin-right:50px;" class="cart box_1">
						<p><a href="giris">
							<img src="images/arr.png" height="20px" width="20" alt="" />
						</a></p>
						<p><a href="giris" class="simpleCart_empty">Giriş Yap</a></p>
						<div class="clearfix"> </div>
@else
<div style="margin-right:50px;" class="cart box_1">
    <p><a href="#">
        <img src="images/arr.png" height="20px" width="20" alt="" />
    </a></p>
    <p><a href="index" class="simpleCart_empty"> {{ session()->get('kull')->ad.' '.session()->get('kull')->soyad }}</a></p>
    <p><a href="kullcikis" class="simpleCart_empty"> Çıkış Yap</a></p>
    <div class="clearfix"> </div>

@endif
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="index"><h1>İZMİR SAATLERİ</h1></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="index">AnaSayfa</a></li>
						<li class="grid"><a href="#">Erkek</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Alışveriş</h4>
										<ul>
											<li><a href="products">Yeni Gelenler</a></li>
											<li><a href="products">Saatler</a></li>
										</ul>
									</div>

									<div class="col1 me-one">
										<h4>Popüler Markalar</h4>
										<ul>
											<li><a href="products">499 Store</a></li>
											<li><a href="products">Fastrack</a></li>
											<li><a href="products">Casio</a></li>
											<li><a href="products">Fossil</a></li>
											<li><a href="products">Maxima</a></li>
											<li><a href="products">Timex</a></li>
											<li><a href="products">TomTom</a></li>
											<li><a href="products">Titan</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Kadın</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Alışveriş</h4>
										<ul>
											<li><a href="products">Yeni Gelenler</a></li>
											<li><a href="products">Saatler</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popüler Markalar</h4>
										<ul>
											<li><a href="products">499 Store</a></li>
											<li><a href="products">Fastrack</a></li>
											<li><a href="products">Casio</a></li>
											<li><a href="products">Fossil</a></li>
											<li><a href="products">Maxima</a></li>
											<li><a href="products">Timex</a></li>
											<li><a href="products">TomTom</a></li>
											<li><a href="products">Titan</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Çocuk</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Alışveriş</h4>
										<ul>
											<li><a href="products">Yeni Gelenler</a></li>
											<li><a href="products">Saatler</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popüler Markalar</h4>
										<ul>
											<li><a href="products">499 Store</a></li>
											<li><a href="products">Fastrack</a></li>
											<li><a href="products">Casio</a></li>
											<li><a href="products">Fossil</a></li>
											<li><a href="products">Maxima</a></li>
											<li><a href="products">Timex</a></li>
											<li><a href="products">TomTom</a></li>
											<li><a href="products">Titan</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="typo">Blog</a>
						</li>
						<li class="grid"><a href="contact">İletişim</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				</div>
			</div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
	<!--banner-starts-->
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
	<!--banner-ends-->
