

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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12077.054428104966!2d29.9216517!3d40.8221732!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc81fa849234e8755!2sKocaeli%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1650485791347!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!--map-end-->

@include("footer")
</body>
</html>
