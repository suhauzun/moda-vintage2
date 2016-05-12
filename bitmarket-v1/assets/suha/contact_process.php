<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 6 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecomshop | Ecommerce HTL5 template | Contact page</title>
	
	<!-- Font css  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/latoblack.css">
    <link rel="stylesheet" href="fonts/bitterregular.css">
    <link rel="stylesheet" href="fonts/latobold.css">
    <link rel="stylesheet" href="fonts/latoheavy.css">
    <link rel="stylesheet" href="fonts/latoitalic.css">
    <link rel="stylesheet" href="fonts/latomedium.css">
    <link rel="stylesheet" href="fonts/latoregular.css">
    <link rel="stylesheet" href="fonts/latosemibold.css">
	
    <!-- Responsive slimmenu css    -->
    <link rel="stylesheet" href="css/slimmenu.css">
	
    <!-- Fontawesome css      -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
	
    <!-- Bootstrap css      -->
    <link rel="stylesheet" href="css/bootstrap.css">
	
    <!-- Owncarousel css      -->
    <link rel="stylesheet" href="css/owl.carousel.css">
	
	<!-- image zoom -->
	<link rel="stylesheet" href="css/glasscase.css">
	<link rel="stylesheet" href="css/glasscase.minf195.css">
	
    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/extralayers.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/noneed.css" media="screen" />
	
    <!-- Main css   -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="shoping">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  HEADER-AREA  -->
	<?php include('page-content/navigation.php') ?>
    <!-- Header-AREA:END -->
	
	<!-- ~~~=| Thank page START |=~~~ -->
	<div class="thank_page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="thank_box">
						<?php 
						if(isset($_POST['submit'])){
							$to = "shakhawatw3p@gmail.com"; // this is your Email address
							$from = $_POST['email']; // this is the sender's Email address
							$first_name = $_POST['name'];
							$subject = "subject";
							$subject2 = "Copy of your form submission";
							$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

							$headers = "From:" . $from;
							$headers2 = "From:" . $to;
							mail($to,$subject,$message,$headers);
							mail($from,$subject2,$message2,$headers2);
							echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
							// You can also use header('Location: thank_you.php'); to redirect to another page.
							// You cannot use header and echo together. It's one or the other.
							}
						?>
						<br>
						<a href="contact-us.html"><i class="fa fa-arrow-left"></i>Go to contact page</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ~~~=| Thank page END |=~~~ -->
	
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
	
    
	<!-- Bootsrap js -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Plugins js -->
    <script src="js/plugins.js"></script>
	
	<!-- Owl js -->
    <script src="js/owl.carousel.min.js"></script>
	
	<!-- Slimmenu js -->
    <script src="js/jquery.slimmenu.min.js"></script>
	
	<!-- Custom js -->
    <script src="js/main.js"></script>

</body>

</html>