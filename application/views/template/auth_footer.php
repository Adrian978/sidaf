<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="gtco-container">
		<div class="row row-pb-md">

			<div class="col-md-12 text-center">
				<div class="gtco-widget">
					<h3>Kontak</h3>
					<ul class="gtco-quick-contact">
						<li><a href="tel://0248318070"><i class="icon-phone"></i> (024) 8318070</a></li>
						<li><a href="mailto:dinkes@semarangkota.go.id"><i class="icon-email"></i> dinkes@semarangkota.go.id</a></li>
					</ul>
				</div>
				<div class="gtco-widget">
					<h3>Sosial Media</h3>
					<ul class="gtco-social-icons">
						<li><a href="https://twitter.com/dkksemarang" target="_blank"> <i class="icon-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/dkksemarang.dkksemarang.3" target="_blank"><i class="icon-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/dkksemarang/" target="_blank"><i class="icon-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCVL58VGILY3shnpedmPpakg/about" target="_blank"><i class="icon-youtube"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-12 text-center copyright">
				<p><small class="block">&copy; Copyright Universitas Diponegoro 2021.</small>
			</div>

		</div>

	</div>
</footer>
<!-- </div> -->

</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script type="application/javascript">
	/** After windod Load */
	$(window).bind("load", function() {
		window.setTimeout(function() {
			$(".alert").fadeTo(1500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 500);
	});
</script>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets_login/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url(); ?>assets_login/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets_login/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url(); ?>assets_login/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="<?php echo base_url(); ?>assets_login/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="<?php echo base_url(); ?>assets_login/js/jquery.countTo.js"></script>

<!-- Stellar Parallax -->
<script src="<?php echo base_url(); ?>assets_login/js/jquery.stellar.min.js"></script>

<!-- Magnific Popup -->
<script src="<?php echo base_url(); ?>assets_login/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets_login/js/magnific-popup-options.js"></script>

<script src="<?php echo base_url(); ?>assets_login/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets_login/js/bootstrap-datetimepicker.min.js"></script>


<!-- Main -->
<script src="assets_login/js/app.js"></script>
<script src="assets_login/js/particles.js"></script>
<script src="<?php echo base_url(); ?>assets_login/js/main.js"></script>

<script type="text/javascript">
	particlesJS.load('particles', 'assets_login/json/particlesjs-config-nasa.json', function() {
		console.log('callback - particles.js config loaded');
	});
</script>

<script type="text/javascript">
	particlesJS.load('particles2', 'assets_login/json/particlesjs-config.json', function() {
		console.log('callback - particles.js config loaded');
	});
</script>
</body>

</html>