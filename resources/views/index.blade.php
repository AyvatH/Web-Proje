<!DOCTYPE html>
<html>
<head>
@include('header')
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
			<div class="about-top grid-1"> <a href="{{route("products")}}">
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/abt-1.jpg" alt=""/>
						<figcaption>
							<h2>Lüks Saatler</h2>
						</figcaption>
					</figure>
				</div> </a><a href="{{route("products")}}">
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/abt-2.jpg" alt=""/>
						<figcaption>
							<h4>Klasik Saatler</h4>
						</figcaption>
					</figure>
				</div></a>
                <a href="{{route("products")}}">
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/abt-3.jpg" alt=""/>
						<figcaption>
							<h4>Dijital Saatler</h4>
						</figcaption>
					</figure>
				</div></a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->
    {{-- @forelse ($bilgi as $key => $val)
    <input  type="hidden" class="form-control" name="kadd"  {{ $akey=$val ['id']}} placeholder="Kullanıcı Adı">

    <tr>
        <td>{{  $val ['ad']}}</td>
        <td>{{ $val ['soyad']}}</td>
         <td>{{ $val ["no"]}}</td>
        <td>
            <a href="{{asset("onayla/".$akey)}}" type="submit" class="label theme-bg text-white f-12">Düzenle</a>

         </td>
         <td>   <a href="{{asset("sil/$akey")}}" type="submit" class="label theme-bg2 text-white f-12">Sil</a>
</td></tr>
@empty
<tr>
<td colspan="4">Veri bulunamadı</td>
</tr>
@endforelse


</tbody> --}}
	<!--product-starts-->
	<div class="product">
		<div class="container">
			<div class="product-top">
				<div class="product-one">
                    @forelse ($bilgi as $key => $val)
                    <input  type="hidden" class="form-control" name="a"  {{ $akey=$val ['id']}} >
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="{{asset("single/".$akey)}}" class="mask"><img class="img-responsive zoom-img" src="{{$val ['anaresim']}}" alt="" /></a>
							<div class="product-bottom">
								<h3>{{  $val ['urun_adi']}}</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" onclick="sepet('{{$val ['id']}}')" href="#" type="submit"><i></i></a> <span class=" item_price">{{  $val ['fiyat']." $"}}</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
                    @empty
                    Veri bulunamadı
                    @endforelse<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					{{-- <div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single" class="mask"><img class="img-responsive zoom-img" src="images/p-2.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">329 TL</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png"  alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">329 TL</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single" class="mask"><img class="img-responsive zoom-img" src="images/p-4.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">329 TL</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="product-one">
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single" class="mask"><img class="img-responsive zoom-img" src="images/p-5.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">329 TL</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single" class="mask"><img class="img-responsive zoom-img" src="images/p-6.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">329 TL</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single" class="mask"><img class="img-responsive zoom-img" src="images/p-7.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">329 TL</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single" class="mask"><img class="img-responsive zoom-img" src="images/p-8.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">329 TL</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--product-end-->
	</div>--}}
	<!--product-end-->
    <script>
        var dizi=[];
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
    <br><br><br><br>
@include('footer')
</body>
</html>


