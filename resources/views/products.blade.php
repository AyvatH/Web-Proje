

<!DOCTYPE html>
<html>
<head>
@include("header")
	<!--prdt-starts-->
	<div class="prdt">
		<div class="container">
			<div class="prdt-top">
				<div class="col-md-9 prdt-left">
					<div class="product-one">
                        @forelse ($bilgi as $key => $val)
                        <input  type="hidden" class="form-control" name="a"  {{ $akey=$val ['id']}} >
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="{{asset("single/".$akey)}}" class="mask"><img class="img-responsive zoom-img" src="{{asset($val ['anaresim'])}}" alt="" /></a>
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
                        @endforelse<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<!--product-end-->

	@include("footer")
</body>
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
</html>
