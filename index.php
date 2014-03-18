<!doctype html>
<!--[if lt IE 9 ]> <html lang="en-GB" class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9 ]> <html lang="en-GB" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-GB" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="initial-scale=1, user-scalable=no">
		<title>ServiceMaster Restore</title>
		<link href="assets/css/screen.min.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- <link rel="shortcut icon" type="image/ico" href="favicon.ico" /> -->
		<!-- TODO: Download a custom build of modernizer to suit the project -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
	</head>

	<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=763971193627319";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<header class="pagehead">
		<div class="wrapper">
			<object class="logo" type="image/svg+xml" data="assets/img/logo.svg" alt="SevrviceMaster Logo"></object>

			<button type="button" role="button" id="nav-toggle" class="lines-button x2"><span class="lines"></span></button>
			
			<div class="callnow">
				<h1>We're here for you 24/7</h1>
				<span>
				Idaho Hotline: (208) 667-6633 Spokane Hotline: (509) 927-9416
				</span>
			</div>

			<nav class="nav-collapse">
				<ul>
					<li class="is-desktop"><a href="">Home</a></li>
					<li><a href="">About us</a></li>
					<li><a href="">Services</a></li>
					<li><a href="">Claims</a></li>
					<li><a href="">FAQs</a></li>
					<li><a href="">Contact us</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="wrapper">

	<div id='slider' class='swipe'>
	  <div class='swipe-wrap'>
	    <div><img src="http://www.placehold.it/800x350" alt=""></div>
	    <div><img src="http://www.placehold.it/800x350" alt=""></div>
	    <div><img src="http://www.placehold.it/800x350" alt=""></div>
	  </div>
	</div>

	<div class="padded">

		<div class="callnow">
			<h1>We're here for you 24/7</h1>
			<a class="btn" href="tel:2086676633">Idaho Hotline: (208) 667-6633</a>
			<a class="btn" href="tel:5099279416">Spokane Hotline: (509) 927-9416</a>
		</div>


		<section class="cta">
			<figure>
				<img src="http://www.placehold.it/400x175" alt="">
				<h2>Current Projects</h2>
			</figure>
			<figure>
				<img src="http://www.placehold.it/400x175" alt="">
				<h2>Testimonials</h2>
			</figure>
			
			<a href="#" class="tips">
				<object type="image/svg+xml" data="assets/img/triangle.svg"></object>
				<span>Help with <br> Prevention</span>
			</a>
			<a href="#" class="tips">
				<object type="image/svg+xml" data="assets/img/triangle.svg"></object>
				<span>Tips for <br> Mitigation</span>
			</a>
			<a href="#" class="tips">
				<object type="image/svg+xml" data="assets/img/triangle.svg"></object>
				<span>Privacy <br> Policy</span>
			</a>
			<a href="#" class="tips">
				<object type="image/svg+xml" data="assets/img/triangle.svg"></object>
				<span>Download <br> Forms</span>
			</a>
		</section>

				<!-- Pulling in Facebook page id:'524500907614152',
		access_token:'763971193627319|IAUf3wjhHJoSZQLB2tRdI71AacA' -->
		
		<section class="fb">
			<header>
				<h1>ServiceMaster of North Idaho</h1>
				<div class="fb-like" data-href="https://www.facebook.com/pages/Servicemaster-of-North-Idaho/524500907614152" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
			</header>
			<div id="wall" class="facebookWall"></div>
		</section>

	</div>

	<div class="padded">
		<footer>
			<a href="#" class="btn">Employment</a>
			<a href="" class="btn">Contact us</a>
			<h2 class="is-mobile">Our Address</h2>
			<address>
				1007 N. Boulder Ct.
				<span>Post Falls ID 83854</span>
			</address>
			<form id="newsletter" action="http://savorweb.createsend.com/INSERTURLHERE" method="post">
			<h2>Newsletter</h2>
            <input type="email" class="email" name="cm-oajur-oajur"onblur="if (this.value=='') this.value=this.defaultValue" onclick="if (this.defaultValue==this.value) this.value=''" value="Your Email Address">
            <button type="submit" value="GO" class="subscribe">GO</button>
            </form>

            <div class="cert">
            	<img src="assets/img/certs.jpg" alt="">
            </div>
		</footer>
	</div>

	</div> <!-- END WRAPPER -->

		<!-- TODO: Select version of jquery and link to CDN -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="assets/js/facebook.js"></script>
		<script src="assets/js/jquery.tmpl.min.js"></script>
		<script src="assets/js/responsive-nav.js"></script>
		<script src="assets/js/swipe.min.js"></script>
		<script>
	      // var navigation = responsiveNav(".nav-collapse");

	      var navigation = responsiveNav(".nav-collapse", {
	        customToggle: "#nav-toggle"
	      });

	  //     	$("#nav-toggle").click(function(){
			// 	$(this).toggleClass("close");
			// 	console.log('collision');
			// });

			// pure JS
			var elem = document.getElementById('slider');
			window.mySwipe = Swipe(elem, {
			  // startSlide: 4,
			  auto: 6000,
			  // continuous: true,
			  // disableScroll: true,
			  // stopPropagation: true,
			  // callback: function(index, element) {},
			  // transitionEnd: function(index, element) {}
			});

			// with jQuery
			// window.mySwipe = $('#mySwipe').Swipe().data('Swipe');


</script>
<!-- jQuery templates. Not rendered by the browser. Notice the type attributes -->

<script id="headingTpl" type="text/x-jquery-tmpl">
<h1>${name}<span>on Facebook</span></h1>
</script>

<script id="feedTpl" type="text/x-jquery-tmpl">
<li>
	<img src="${from.picture}" class="avatar" />
	
	<div class="status">
		<h2><a href="http://www.facebook.com/profile.php?id=${from.id}" target="_blank">${from.name}</a></h2>
		<p class="message">{{html message}}</p>
		{{if type == "link" }}
			<div class="attachment">
				{{if picture}}
					<img class="picture" src="${picture}" />
				{{/if}}
				<div class="attachment-data">
					<p class="name"><a href="${link}" target="_blank">${name}</a></p>
					<p class="caption">${caption}</p>
					<p class="description">${description}</p>
				</div>
			</div>
		{{/if}}
	</div>
	
	<p class="meta">${created_time} · 
	{{if comments}}
		${comments.count} Comment{{if comments.count>1}}s{{/if}}
	{{else}}
		0 Comments
	{{/if}} · 
	{{if likes}}
		${likes.count} Like{{if likes.count>1}}s{{/if}}
	{{else}}
		0 Likes
	{{/if}}
	</p>
	
</li>
</script>

		<script src="assets/js/script.min.js"></script>
	</body>

</html>