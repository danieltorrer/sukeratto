		<footer>
			<div class="footer style2 boxed">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-3">

							<div class="widget-container widget_nav_menu">
								<h3 class="widget-title"><span>Secciones</span></h3>
								<ul>
									<li class="first"><a href="#" hidefocus="true" style="outline: none;"><span>Inicio</span></a></li>
									<li><a href="#" hidefocus="true" style="outline: none;"><span>Postres</span></a></li>
									<li><a href="#" hidefocus="true" style="outline: none;"><span>Cursos</span></a></li>
									<li><a href="#" hidefocus="true" style="outline: none;"><span>Galerias</span></a></li>
									<li class="last"><a href="#" hidefocus="true" style="outline: none;"><span>Contacto</span></a></li>
								</ul>
							</div>

						</div>
						<div class="col-xs-6 col-sm-3">

							<div class="widget-container widget_nav_menu">
								<h3 class="widget-title"><span>Postres</span></h3>
								<ul>
									<li class="first"><a href="#" hidefocus="true" style="outline: none;"><span>Pasteles</span></a></li>
									<li><a href="#" hidefocus="true" style="outline: none;"><span>Cupcakes</span></a></li>
									<li><a href="#" hidefocus="true" style="outline: none;"><span>Galleta decorada</span></a></li>
									<li><a href="#" hidefocus="true" style="outline: none;"><span>Chocolatería</span></a></li>
									<li><a href="#" hidefocus="true" style="outline: none;"><span>Pays y tartas</span></a></li>
									<li><a href="#" hidefocus="true" style="outline: none;"><span>Gelatins y flanes</span></a></li>
								</ul>
							</div>

						</div>

						<div class="col-xs-5 col-sm-3">

							<div class="widget-container widget_nav_menu">
								<h3 class="widget-title">
									<span>Contacto</span></h3>
									<ul>
										<li class="first"><a href="#" hidefocus="true" style="outline: none;"><span>Telefono</span></a></li>
										<li><a href="#" hidefocus="true" style="outline: none;"><span>Direccion</span></a></li>
										<li><a href="#" hidefocus="true" style="outline: none;"><span>Correo</span></a></li>
									</ul>
								</div>

							</div>
							<div class="col-xs-7 col-sm-3">

								<div class="widget-container widget_nav_menu">
									<div id="map" class="map"></div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	<!-- Google Analytics: Cambia UA-XXXXX-X por el ID de tu sitio -->
	<!--<script>
	(function(b,o,i,l,e,r){
		b.GoogleAnalyticsObject=l;b[l]||(b[l] = function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)
	}
	(window,document,'script','ga'));
	ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>-->

<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.10.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.onecarousel.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
var map;
function initialize() {
	var mapOptions = {
		zoom: 15,
		center: new google.maps.LatLng(18.9828808,-98.2690244),
	};

	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(18.9828808,-98.2690244),
		title: "Sukeratto"
	});

	marker.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#myCarousel').oneCarousel({
		easeIn: 'rotateIn',
		auto: false
	});
});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/general.js"></script>
</body>
</html>