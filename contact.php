<!DOCTYPE html>
<!-- UniSet - Premium Multi-Concept Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">



	<head>



		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="GMR SAFETY"/>	
		<meta name="description" content="PowerChock par GMR SAFETY au SITL Paris 2018, prenez rendez-vous!"/>
		<meta name="keywords" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
		<!-- SITE TITLE -->
		<title>PowerChock par GMR SAFETY | Contact</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

		<!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">	
		<link href="css/flaticon.css" rel="stylesheet">
		<link href="css/payment-webfont.css" rel="stylesheet">
				
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,900" rel="stylesheet"> 		
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,800" rel="stylesheet"> 

		<!-- PLUGINS STYLESHEET -->
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet" >
		<link href="css/magnific-popup.css" rel="stylesheet">
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/slick.css" rel="stylesheet">
		<link href="css/slick-theme.css" rel="stylesheet">

		<!-- On Scroll Animations -->
		<link href="css/animate.css" rel="stylesheet">
				
		<!-- TEMPLATE CSS -->
		<link href="css/style.css" rel="stylesheet"> 	

		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet"> 


					
	</head>
	

	
	<body>



		<!-- PRELOADER
		============================================= -->		
		<div id="loader-wrapper">
			<div id="loader">
				<div class="sk-folding-cube">
				  <div class="sk-cube1 sk-cube"></div>
				  <div class="sk-cube2 sk-cube"></div>
				  <div class="sk-cube4 sk-cube"></div>
				  <div class="sk-cube3 sk-cube"></div>
				</div>
			</div>
		</div>



		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">



			<!-- HEADER
			============================================= -->
			<header id="header" class="header">
				<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
					<div class="container">


						<!-- LOGO IMAGE -->
						<!-- Recommended sizes for Retina Ready displays is 230x60px; -->
				 		<a href="/" class="navbar-brand logo-white"><img src="images/gmr-safety-logo.png" width="128" height="60" alt="gmr safety"></a>
						<a href="/" class="navbar-brand logo-black"><img src="images/gmr-safety-logo-coulx2.png" width="128" height="60" alt="header-logo"></a>


				 		<!-- Responsive Menu Button -->
				 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				   		 	<span class="navbar-toggler-icon"></span>
				  		</button>


				  		<!-- Navigation Menu -->
				  		<div id="navbarSupportedContent" class="collapse navbar-collapse">
					   		<ul class="navbar-nav ml-auto">

					     		<li class="nav-item"><a class="nav-link" href="/#produits">Produits</a> </li>
					     		<li class="nav-item"><a class="nav-link" href="/#avantages">Avantages</a> </li>
					     		<li class="nav-item"><a class="nav-link" href="/#sitl-paris">SITL Paris</a> </li>
					     		<li class="nav-item"><a class="nav-link" href="/#clients-1">Clients</a> </li>
								<li class="nav-item"><a class="nav-link" href="http://www.gmrsafety.com/fr/" target="_blank">Site Web</a> </li>


								<li>
									<a href="/#sitl-paris" class="btn btn-medium btn-gmr-orange btn-arrow">
											<span style="color: #ffffff;">Prendre rendez-vous <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
										</a>
								</li>

					      	</ul>
					    </div>	<!-- End Navigation Menu -->


					</div>	  <!-- End container -->
				</nav>	   <!-- End navbar  -->
			</header>	<!-- END HEADER -->




			<!-- SINGLE PROJECT PAGE CONTENT -->
			<div id="single-project-page" class="single-project-section division">
				<div class="container">


					

				 		
					<!-- PROJECT DISCRIPTION -->
				 	<div class="row">

				 		<div class="col-md-12">	
				 			<div class="single-project-holder p-right-30">	

							
				 				<!-- Title -->
					 			<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "j@joseebarrette.com";
    $email_subject = "Demande d'information SITL 2018";
 
    function died($error) {
        // your error code can go here
        echo "Il semble y avoir des erreurs dans le formulaire soumis. ";
        echo "Les erreurs aparaissent ci-dessous.<br /><br />";
        echo $error."<br /><br />";
        echo "Veuillez revenir en arrière et les corriger.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Il semble y avoir un problme avec le formulaire soumis.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Le courriel soumis ne semble pas valide.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Le prénom soumis ne semble pas valide.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Le nom de famille soumis ne semble pas valide.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'L\'organisation soumise ne semble pas valide.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Détails du formulaire ci-dessous.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Prénom: ".clean_string($first_name)."\n";
    $email_message .= "Nom: ".clean_string($last_name)."\n";
    $email_message .= "Courriel: ".clean_string($email_from)."\n";
    $email_message .= "Téléphone: ".clean_string($telephone)."\n";
    $email_message .= "Organsation: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Merci, nous serons en contact très bientôt!
 
<?php
 
}
?>
<br><br><br>
					 			
<a href="/" class="btn btn-medium btn-gmr-orange btn-arrow">
											<span style="color: #ffffff;">Retour à la page SITL Paris <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
										</a>
								
						</div>	

<br><br><br><br><br><br><br>
						

					</div>	<!-- END PROJECT DISCRIPTION -->


				 </div>	 <!-- End container -->
			</div>	<!-- END SINGLE PROJECT PAGE CONTENT  -->




			<!-- FOOTER-3
			============================================= -->
			<footer id="footer-3" class="dark-foo footer division" style="position: fixed; bottom: 0; left: 0; right: 0;">
				<div class="container">


						<!-- FOOTER COPYRIGHT -->
						<div class="col-sm-6">
							<div class="footer-copyright p-top-20 m-bottom-0">
								<p class="m-bottom-0">&copy; 2018 <strong>GMR .</strong> <a style="text-decoration: none" href="http://www.gmrsafety.com/" target="_blank">Voir le site complet</a></p>
							</div>
						</div>


				</div>	   <!-- End container -->
			</footer>	<!-- END FOOTER-3 -->

				</div>	   <!-- End container -->										
			</footer>	<!-- END FOOTER-1 -->




		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/retina.js"></script>	
		<script src="js/jquery.stellar.min.js"></script>	
		<script src="js/jquery.scrollto.js"></script>
		<script src="js/jquery.appear.js"></script>	
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>		
		<script src="js/register-form.js"></script>		
		<script src="js/contact-form.js"></script>	
		<script src="js/comment-form.js"></script>
		<script src="js/jquery.validate.min.js"></script>
				
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>	

					
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->


		<!-- Google Map -->
		<script>
			function myMap() {
	  			var myCenter = new google.maps.LatLng(-37.817214,144.955925); 
				var mapCanvas = document.getElementById("gmap");
				var mapOptions = {center: myCenter, zoom: 17};
				var map = new google.maps.Map(mapCanvas, mapOptions);
				var marker = new google.maps.Marker({position:myCenter});
				marker.setMap(map);
			}
		</script> 

		<!-- To use this code on your website, get a free API key from Google. Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOFa0iGSo8sm53JusirnEA9ySpI6Gw2Gg&callback=myMap"></script>
										
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
								
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->



	</body>



</html>	