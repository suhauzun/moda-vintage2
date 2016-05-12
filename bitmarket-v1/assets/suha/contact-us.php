<?php include('page-content/header.php') ?>



<body class="shoping">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  HEADER-AREA  -->
	<?php include('page-content/navigation.php') ?>
    <!-- Header-AREA END -->
	

	
    <!-- BREADCRUMBS -->
    <div class="title-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bred-title">
                        <h3>Contact us</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="about-us.html">Contact us</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
    
	<!-- Contact area START -->
	<div class="contact_map_area">
		<div class="map_wrapper">
			<div class="contact_map">
				<div id="googleMap" style="width:100%;height:500px;"></div>
			</div>
		</div>
	</div>
	<!-- Contact area START -->
	
    <!-- TOUCH-AREA     -->
    <div class="touch-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="headline">
                        <h2>Stay in touch</h2>
                    </div>
                    <div class="stay-left">
                        <p>This time there's no stopping us!" Makin' your way in the world today takes everything you've got. Takin' a break from all your worries sure would help a lot.</p>
						<form action="contact_process.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="touch-left">
										Your Name (required)
										<br>
										<input type="text" name="name">
										<br> Phone Number (required)
										<br>
										<input type="text" name="phone">
									</div>
								</div>
								<div class="col-md-6">
									<div class="touch-right">
										Your Email (required)
										<br>
										<input type="text" name="email">
										<br> Subject
										<br>
										<input type="text" name="subject">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="touch-single">
										Your Message
										<br>
										<textarea name="message"></textarea>
									</div>
								</div>
							</div>
							<div class="form_submit">
								<input type="submit" name="submit" value="Send Message"/>
							</div>
						</form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stay-single">
                        <i class="fa fa-map-marker"></i>
                        <div class="stay-text">
                            <h5>Address :</h5>
                            <p>09 Design street, Office Ecommerce
                                <br/> Victoria, Australia.</p>
                        </div>
                    </div>
                    <div class="stay-single">
                        <div class="stay-single">
                            <i class="fa fa-envelope-o"></i>
                            <div class="stay-text">
                                <h5>Email :</h5>
                                <p>Contact@E-ComShop.com
                                    <br/> Info@E-ComShop.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="stay-single">
                        <div class="stay-single">
                            <i class="fa fa-phone"></i>
                            <div class="stay-text">
                                <h5>customer support :</h5>
                                <p>+012345678
                                    <br/> +012345678
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TOUCH-AREA:END     -->
	
    <!-- Entire FOOTER:START -->
		<?php include('page-content/footer.php') ?>
	<!-- Entire FOOTER:END -->
	
    <!-- jQuery latest -->
	<script type="text/javascript" src="js/jQuery.2.1.4.js"></script>
	
	<!-- js Modernizr -->
	<script src="js/modernizr-2.6.2.min.js"></script>

    <!-- Revolution slider -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
	<!-- Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
		  var mapOptions = {
			zoom: 15,
			scrollwheel: false,
			center: new google.maps.LatLng(23.779353, 90.394088)
		  };

		  var map = new google.maps.Map(document.getElementById('googleMap'),
			  mapOptions);


		  var marker = new google.maps.Marker({
			position: map.getCenter(),
			animation:google.maps.Animation.BOUNCE,
			icon: 'images/map-marker.png',
			map: map
		  });

		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script> 
    
	<!-- Bootsrap js -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Plugins js -->
    <script src="js/plugins.js"></script>
	
	<!-- Owl js -->
    <script src="js/owl.carousel.min.js"></script>
	
	<!-- Custom js -->
    <script src="js/main.js"></script>

</body>

</html>