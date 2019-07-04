<?php $this->load->view('user/layout/header'); ?>

	<!-- Start Contact Map -->
	<div class="contact__map__area">
		<div class="contact__map__wrapper">
			<div class="contact__map__left">
				<div class="map__thumb">
					<img src="images/banner/contact/1.jpg" alt="images">
				</div>
			</div>
			<div class="contact__map__right">
				<div class="htc__google__map">
					<div class="map-contacts">
						<div id="googlemap"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Map -->
	<!-- Start Address -->
	<div class="food__contact">
		<div class="food__contact__wrapper d-flex flex-wrap flex-lg-nowrap">
			<!-- Start Single Contact -->
			<div class="contact">
				<div class="ct__icon">
					<i class="zmdi zmdi-phone"></i>
				</div>
				<div class="ct__address">
					<p><a href="#">+088 01673-453290</a></p>
					<p><a href="#">+088 01773-458290</a></p>
				</div>
			</div>
			<!-- End Single Contact -->
			<!-- Start Single Contact -->
			<div class="contact">
				<div class="ct__icon">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="ct__address">
					<p>Elizabeth Tower. 6th Floor <br> Medtown, New York</p>
				</div>
			</div>
			<!-- End Single Contact -->
			<!-- Start Single Contact -->
			<div class="contact">
				<div class="ct__icon">
					<i class="zmdi zmdi-email"></i>
				</div>
				<div class="ct__address">
					<p><a href="#">delivery@e-mail.com</a></p>
					<p><a href="#">Aahar@e-mail.com</a></p>
				</div>
			</div>
			<!-- End Single Contact -->
		</div>
	</div>
	<!-- End Address -->
	<section class="food__contact__form bg--white section-padding--lg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact__form__wrap">
						<h2>Get In Touch With Aahar</h2>
						<div class="contact__form__inner">
							<form id="contact-form" action="#" method="post">
								<div class="single-contact-form">
									<div class="contact-box name d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
										<input type="text" name="name" placeholder="Your Name">
										<input type="email" name="email" placeholder="E-mail">
										<input type="text" name="phone" placeholder="Phone">
									</div>
								</div>
								<div class="single-contact-form">
									<div class="contact-box message">
										<textarea name="message"  placeholder="Message*"></textarea>
									</div>
								</div>
								<div class="contact-btn">
									<button type="submit" class="food__btn">submit</button>
								</div>
							</form>
						</div>
						<div class="form-output">
							<p class="form-messege"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php $this->load->view('user/layout/footer'); ?>

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
<script>
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', init);

	function init() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 12,

			scrollwheel: false,

			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(23.7286, 90.3854), // New York

			// How you would like to style the map.
			// This is where you would paste any style found on Snazzy Maps.
			styles:
				[

					{
						"featureType": "all",
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"saturation": 36
							},
							{
								"color": "#000000"
							},
							{
								"lightness": 40
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.text.stroke",
						"stylers": [
							{
								"visibility": "on"
							},
							{
								"color": "#000000"
							},
							{
								"lightness": 16
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.icon",
						"stylers": [
							{
								"visibility": "off"
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 20
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 17
							},
							{
								"weight": 1.2
							}
						]
					},
					{
						"featureType": "landscape",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 20
							}
						]
					},
					{
						"featureType": "poi",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 21
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 17
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 29
							},
							{
								"weight": 0.2
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 18
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 16
							}
						]
					},
					{
						"featureType": "transit",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 19
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#000000"
							},
							{
								"lightness": 17
							}
						]
					}
				]
		};

		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('googlemap');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(23.7286, 90.3854),
			map: map,
			title: 'Aahar!',
			icon: 'images/icon/map-2.png',
			animation:google.maps.Animation.BOUNCE

		});
	}
</script>




<script src="<?php echo base_url('assets/user/js/active.js'); ?>"></script>
</body>
</html>
