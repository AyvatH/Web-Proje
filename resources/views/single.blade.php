<!DOCTYPE html>
<html>
<head>
	@include('header')
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">
						<div class="flexslider">
							  <ul class="slides">

                                    @forelse ($bilgi2 as $key2 => $val2)
                                    <input  type="hidden" class="form-control" name="d"  {{ $akey2=$val2 ['id']}}>
                                    <li data-thumb="{{asset("$val2->resim1")}}">
                        @empty

                        @endforelse

                                   @php
                                     //  dd($val2->resim1);
                                   @endphp
                                    <div class="thumb-image"> <img src="{{asset("$val2->resim1")}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="{{asset("$val2->resim2")}}">
                                    <div class="thumb-image"> <img src={{asset("$val2->resim2")}} data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="{{asset("$val2->resim3")}}">
                                    <div class="thumb-image"> <img src={{asset("$val2->resim3")}} data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
							  </ul>
						</div>
						<!-- FlexSlider -->
						<script src="{{asset("js/imagezoom.js")}}"></script>
						<script defer src="{{asset("js/jquery.flexslider.js")}}"></script>
                        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					</div>
					<div class="col-md-7 single-top-right">
						<div class="single-para simpleCart_shelfItem">
                            <h2>{{$dataa->urun_adi}}</h2>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
									<a href="#"> 100 Müşteri Görüntüledi</a>

								</div>
							<div class="clearfix"> </div>
							</div>

                            <h5 class="item_price">{{$dataa->fiyat}} $</h5>
							<p>{{$dataa->aciklama}}</p>
							<div class="available">
								<ul>
									<li>Renkler
										<select>
										<option>{{$dataa->renk}}</option>
									</select></li>
								<li class="size-in">Beden<select>
									<option>Large</option>
									<option>Medium</option>
									<option>small</option>
								</select></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
							<ul class="tag-men">
								<li><span>TAG</span>
								<span class="women1">: {{$dataa->urun_adi}},</span></li>
								<li><span>SKU</span>
								<span class="women1">: CK09</span></li>
							</ul>
								<a href="#" class="add-cart item_add">Sepete Ekle</a>

						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="tabs">
					<ul class="menu_drop">
				<li class="item1"><a href="#"><img src="{{asset("images/arrow.png")}}" alt="">Description</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="{{asset("images/arrow.png")}}" alt="">Additional information</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="{{asset("images/arrow.png")}}" alt="">Reviews (10)</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="{{asset("images/arrow.png")}}" alt="">Helpful Links</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item5"><a href="#"><img src="{{asset("images/arrow.png")}}" alt="">Make A Gift</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
	 		</ul>
				</div>
				<div class="latestproducts">
					<div class="product-one">
                        @forelse ($bilgi as $key => $val)
                        <input  type="hidden" class="form-control" name="a"  {{ $akey=$val ['id']}} >
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="{{url("single/".$akey)}}" class="mask"><img class="img-responsive zoom-img" src="{{asset("images/p-1.png")}}" alt="" /></a>
                                <div class="product-bottom">
                                    <h3>{{  $val ['urun_adi']}}</h3>
                                    <p>Explore Now</p>
                                    <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">{{  $val ['fiyat']." $"}}</span></h4>
                                </div>
                                <div class="srch">
                                    <span>-50%</span>
                                </div>
                            </div>
                        </div>
                        @empty
                        Veri bulunamadı
                        @endforelse

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
	@include('footer')
</body>
</html>
