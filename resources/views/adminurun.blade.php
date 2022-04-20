<!DOCTYPE html>
<html>
<head>
<title>İzmir Saat</title>
<style>
    #sip {
    border-collapse: collapse;
    width: 100%;
    }

    #sip td, #sip th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #sip tr:nth-child(even){background-color: #f2f2f2;}

    #sip tr:hover {
    background-color: #2ecc71;
    color:#fff;
    }

    #sip th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #2c3e50;
    color: white;
    }
    </style>
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
            <div class="col-md-6 top-header-main">



<div style="margin-right:50px;" class="cart box_1">
<p><a href="#">
    <img src="{{asset('images/arr.png')}}" height="20px" width="20" alt="" />
</a></p>
<p><a href="{{route("adminhome")}}"> {{ session()->get('admin')->unvan}}</a></p>
<p><a href="{{route("admincikis")}}"  > Çıkış Yap</a></p>
<div class="clearfix"> </div>


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
						<li class="grid"><a href="adminekle">Ekleme işlemler</a></li>
						<li class="grid"><a href="adminkul">Kullanıcılar</a>
						</li>
					<li class="grid"><a href="adminsip">Siparişler</a>
						</li>
                        <li class="grid"><a href="adminurun">Ürünler</a>
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

        <div class="table-responsive">
            <table id="sip">
                <thead>
                    <tr>
                        <th>Ürün Adı</th>
                        <th>Ürün Resmi</th>
                        <th>Ürün Stoğu</th>
                        <th>Ürün Rengi</th>
                        <th>Ürün Fiyatı</th>
                        <th>Ürün Açıklaması</th>
                        <th>Ürün Düzenle</th>
                        <th>Ürün Sil</th>
                    </tr>
                </thead>
                <tbody >

                    @forelse ($bilgi2 as $key => $val)
                    <input  type="hidden" class="form-control" name="kadd"  {{ $akey=$val ['id']}} placeholder="Kullanıcı Adı">

                    <tr>
                        <td>{{  $val ['urun_adi']}}</td>
                        <td><a href="{{url($val ['anaresim'])}}" type="submit" >Ürün Resim</a></td>
                         <td>{{ $val ["stok"]}}</td>
                         <td>{{ $val ["renk"]}}</td>
                         <td>{{ $val ["fiyat"]}}</td>
                         <td>{{ $val ["aciklama"]}}</td>
                         <td>
                            <a href="{{url("onayla/".$akey)}}" type="submit" >Düzenle</a>

                         </td>
                         <td>   <a href="{{url("sil/$akey")}}" type="submit">Sil</a>
        </td>
                 </tr>
        @empty
        <tr>
            <td colspan="4">Veri bulunamadı</td>
        </tr>
        @endforelse


        </tbody>
            </table>
        </div>
