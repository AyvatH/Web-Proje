<title>İzmir Saat</title>
<link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="{{asset('js/simpleCart.min.js')}}"> </script>
<script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
<link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--dropdown-->
<script src="{{asset('js/jquery.easydropdown.js')}}"></script>
</head>
<body>
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<div class="clearfix">

                           <?php $JSON= json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);?>
                            <ul>
                                <li style="color: white">
                                    <span>USD</span>
                                    <span>Fiyat: <?php echo $JSON['USD']['satis']; ?></span>
                                </li>
                                <li style="color: white">
                                    <span>EUR</span>
                                    <span>Fiyat: <?php echo $JSON['EUR']['satis']; ?></span>
                                </li>

                            </ul></div>

					</div>
				</div>
				<div class="col-md-6 top-header-main">
					<div class="cart box_1">

                             <form id="addCustomer"  class="form-group" method="GET" action="{{route("checkout")}}" >
                                @csrf
                                <input type="hidden" id="sepet" name="sepet" />
						<button type="submit" style="background-color:black;">
							 <div class="total">
								<span class="simpleCart_total" style="color:white;"></span></div>
								<img src="{{asset('images/cart-1.png')}}" alt="" />
                        </button>
						<p><a href="javascript:;" onclick="temizle()" class="simpleCart_empty">Sepeti Boşalt</a></p>
                        <p><a href="{{route("siparis")}}" onclick="temizle()" class="simpleCart_empty">Siparişler</a></p>
						<div class="clearfix"> </div>
                             </form>

					</div>

                    @if(session()->get('kull')==null)
					<div style="margin-right:50px;" class="cart box_1">
						<p><a href="giris" onclick="temizle()" class="simpleCart_empty">
							<img src="{{asset('images/arr.png')}}" height="20px" width="20" alt="" />
						</a></p>
						<p><a href="giris" onclick="temizle()" class="simpleCart_empty">Giriş Yap</a></p>
						<div class="clearfix"> </div>
@else
<div style="margin-right:50px;" class="cart box_1">
    <p><a href="#">
        <img src="{{asset('images/arr.png')}}" height="20px" width="20" alt="" />
    </a></p>
    <p><a href="{{route("home")}}" class="simpleCart_empty"> {{ session()->get('kull')->ad.' '.session()->get('kull')->soyad }}</a></p>
    <p><a href="{{route("kullcikis")}}"  onclick="temizle()" class="simpleCart_empty"> Çıkış Yap</a></p>
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
        <i ><img src="{{url('images/logo.png')}}" width="75px" height="75px"></i>
		<a href="index"><h1>İZMİR SAATLERİ</h1></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="{{route("home")}}">AnaSayfa</a></li>
						<li class="grid"><a href="#">Erkek</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Alışveriş</h4>
										<ul>
											<li><a href="{{route("products")}}">Yeni Gelenler</a></li>
											<li><a href="{{route("products")}}">Saatler</a></li>
										</ul>
									</div>

									<div class="col1 me-one">
										<h4>Popüler Markalar</h4>
										<ul>
											<li><a href="{{route("products")}}">499 Store</a></li>
											<li><a href="{{route("products")}}">Fastrack</a></li>
											<li><a href="{{route("products")}}">Casio</a></li>
											<li><a href="{{route("products")}}">Fossil</a></li>
											<li><a href="{{route("products")}}">Maxima</a></li>
											<li><a href="{{route("products")}}">Timex</a></li>
											<li><a href="{{route("products")}}">TomTom</a></li>
											<li><a href="{{route("products")}}">Titan</a></li>
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
											<li><a href="{{route("products")}}">Yeni Gelenler</a></li>
											<li><a href="{{route("products")}}">Saatler</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popüler Markalar</h4>
										<ul>
											<li><a href="{{route("products")}}">499 Store</a></li>
											<li><a href="{{route("products")}}">Fastrack</a></li>
											<li><a href="{{route("products")}}">Casio</a></li>
											<li><a href="{{route("products")}}">Fossil</a></li>
											<li><a href="{{route("products")}}">Maxima</a></li>
											<li><a href="{{route("products")}}">Timex</a></li>
											<li><a href="{{route("products")}}">TomTom</a></li>
											<li><a href="{{route("products")}}">Titan</a></li>
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
											<li><a href="{{route("products")}}">Yeni Gelenler</a></li>
											<li><a href="{{route("products")}}">Saatler</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popüler Markalar</h4>
										<ul>
											<li><a href="{{route("products")}}">499 Store</a></li>
											<li><a href="{{route("products")}}">Fastrack</a></li>
											<li><a href="{{route("products")}}">Casio</a></li>
											<li><a href="{{route("products")}}">Fossil</a></li>
											<li><a href="{{route("products")}}">Maxima</a></li>
											<li><a href="{{route("products")}}">Timex</a></li>
											<li><a href="{{route("products")}}">TomTom</a></li>
											<li><a href="{{route("products")}}">Titan</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>

						<li class="grid"><a href="{{route("contact")}}">İletişim</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
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
					<a href="{{route("products")}}"><img src="{{asset('images/bnr-1.jpg')}}" alt=""/></a>
				</li>
				<li>
					<a href="{{route("products")}}"><img src="{{asset('images/bnr-2.jpg')}}" alt=""/></a>
				</li>
				<li>
					<a href="{{route("products")}}"><img src="{{asset('images/bnr-3.jpg')}}" alt=""/></a>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
    <script>
        function temizle()
        {
            localStorage.removeItem("spt");
            console.log("asd");
            var sepet=document.getElementById('sepet');
        sepet.value=null;
        location.href="index";
        }
        var dizi=[];
        var sepet=document.getElementById('sepet');
        sepet.value=localStorage.getItem('spt');
        function sepet(id)
        {
            var sepet=document.getElementById('sepet');
            if(localStorage.getItem('spt')==null)
            {
                console.log("if");
                dizi=[];
                dizi.push(id);
                console.log(dizi);
                localStorage.setItem('spt',dizi);

            }
            else
            {
                console.log("else");

                dizi=[];
                dizi.push(localStorage.getItem('spt'));
                dizi.push(id);
                console.log(dizi);
                 localStorage.setItem('spt',dizi);

            }

            sepet.value=localStorage.getItem('spt');


           console.log(localStorage.getItem('spt'));
        }
        </script>
	<!--banner-ends-->

