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
	<div class="register">
		<div class="container">
			<div class="register-top heading">
				<h2>Marka Ekleme</h2>
			</div>
			<div class="register-main">
				<div class="col-md-6 account-left">
					<input placeholder="Marka Adı" type="text" tabindex="1" required> <p></p>
					<input placeholder="Markanın Türü" type="text" tabindex="2" required>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="address submit">
				<input type="submit" value="Markayı Ekle">
			</div>
			<div class="register-top heading">
				<h2>Model Ekleme</h2>
			</div>
			<div class="register-main">
				<div class="col-md-6 account-left">
					<input placeholder="Model Adı" type="text" tabindex="1" required><p></p>
					<input placeholder="Marka Adı" type="text" tabindex="1" required><p></p>
					<input placeholder="Model Türü" type="text" tabindex="2" required>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="address submit">
				<input type="submit" value="Modeli Ekle">
			</div>
			<div class="register-top heading">
				<h2>Ürün Ekleme</h2>
			</div>
			<div class="register-main">
				<div class="col-md-6 account-left">
					<input placeholder="Ürün Adı" type="text" tabindex="1" required><p></p>
					<input placeholder="Model Adı" type="text" tabindex="1" required><p></p>
					<input placeholder="Marka Adı" type="text" tabindex="1" required><p></p>
					<input placeholder="Ürünün Türü" type="text" tabindex="2" required><p></p>
					<form action="/action_page.php">
						<input type="file" id="myFile" name="filename"><p></p>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="address submit">
				<input type="submit" value="Ürünü Ekle">
			</div>
		</div>
	</div>