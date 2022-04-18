

<!DOCTYPE html>
<html>
<head>
@include("header")

	<!--contact-start-->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h2>İLETİŞİM</h2>
			</div>
				<div class="contact-text">
				<div class="col-md-3 contact-left">
						<div class="address">
							<h5>Adres</h5>
							<p>İzmir İşletme
							<span>Kocaeli İzmit </span>
							Umuttepe Kampüs</p>
						</div>
						<div class="address">
							<h5>İletişim Bilgileri</h5>
							<p>Tel:1115550001,
							<span>Fax:190-4509-494</span>
							Email: <a href="mailto:example@email.com">111111@kocaeli.edu.tr</a></p>
						</div>
					</div>
					<div class="col-md-9 contact-right">
						<form>
							<input type="text" placeholder="Ad Soyad">
							<input type="text" placeholder="Telefon Numarası">
							<input type="text"  placeholder="Email">
							<textarea placeholder="Mesajınız" required=""></textarea>
							<div class="submit-btn">
								<input type="submit" value="Gönder">
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!--contact-end-->
	<!--map-start-->
	<div class="map">
		<iframe src="https://www.google.com/maps/place/Kocaeli+University/@40.8221732,29.9216517,15z/data=!4m2!3m1!1s0x0:0xc81fa849234e8755?sa=X&ved=2ahUKEwj5-4rfmI_3AhXTR_EDHZzlBZwQ_BJ6BAhXEAU" style="border:0"></iframe>
	</div>
	<!--map-end-->

@include("footer")
</body>
</html>