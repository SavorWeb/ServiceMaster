<!doctype html>
<!--[if lt IE 9 ]> <html lang="en-GB" class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9 ]> <html lang="en-GB" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-GB" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="initial-scale=1">

		<title>Semantic.gs + Sassaparilla</title>
		<link rel="stylesheet" href="assets/css/add-ons/responsive-nav.min.css">
		<link href="assets/css/screen.min.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- <link rel="shortcut icon" type="image/ico" href="favicon.ico" /> -->
		<!-- TODO: Download a custom build of modernizer to suit the project -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
	</head>

	<body>

	<header>
		<object class="logo" type="image/svg+xml" data="assets/img/logo.svg" alt="ServiceMaster Logo"></object>

		<button href="#" type="button" role="button" class="nav-toggle closed lines-button x2"><span class="lines"></span></button>
		
		<nav class="nav-collapse">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Claims</a></li>
				<li><a href="">FAQs</a></li>
				<li><a href="">Contact us</a></li>
			</ul>
		</nav>
		
	</header>

			

		<!-- TODO: Select version of jquery and link to CDN -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="assets/js/script.min.js"></script>
		<script src="assets/js/responsive-nav.js"></script>
		<script>
	      // var navigation = responsiveNav(".nav-collapse");

	      var navigation = responsiveNav(".nav-collapse", {
	        customToggle: ".nav-toggle"
	      });

			$(".nav-toggle").click(function(){
				$(this).toggleClass("close");
			});
		</script>
	</body>

</html>