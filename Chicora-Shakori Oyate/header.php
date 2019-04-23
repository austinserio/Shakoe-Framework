<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php the_title(); ?></title>

<!-- Favicon Resources -->
<meta property="og:url" content="<?php global $wp;
echo home_url( $wp->request )?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:description" content="" />

<!-- Cache & App Support -->
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="public">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name='viewport' content='viewport-fit=cover, width=device-width, initial-scale=1.0'>

<!-- Web App Icon -->

<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo(template_url) ?>/assets/web_app_support/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo(template_url) ?>/assets/web_app_support/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo(template_url) ?>/assets/web_app_support/favicon-16x16.png">

<link rel="manifest" href="<?php bloginfo(template_url) ?>/assets/web_app_support/site.webmanifest">
<link rel="mask-icon" href="<?php bloginfo(template_url) ?>/assets/web_app_support/safari-pinned-tab.svg" color="#9d2933">
<link rel="shortcut icon" href="<?php bloginfo(template_url) ?>/assets/web_app_support/favicon.ico">
<meta name="msapplication-TileColor" content="#b91d47">
<meta name="msapplication-config" content="<?php bloginfo(template_url) ?>/assets/web_app_support/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"   integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="   crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- FatNav -->
<link rel="stylesheet" href="<?php bloginfo(template_url) ?>/bower_components/fatNav/dist/jquery.fatNav.css">

<!-- Parallax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<!-- Animate.css & WOW -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script src="<?php bloginfo(template_url) ?>/bower_components/wow/dist/wow.js"></script>
<script type="text/javascript">new WOW().init();</script>

<!-- Photoswipe Gallery -->
<script async type="text/javascript" src="<?php bloginfo(template_url) ?>/bower_components/photoswipe/dist/photoswipe.js"></script>
<script async type="text/javascript" src="<?php bloginfo(template_url) ?>/bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo(template_url) ?>/bower_components/photoswipe/dist/photoswipe.css">
<link rel="stylesheet" href="<?php bloginfo(template_url) ?>/bower_components/photoswipe/dist/default-skin/default-skin.css">

<!-- User style.css -->
<link rel="stylesheet" href="<?php bloginfo(template_url) ?>/style.css">
<link rel="stylesheet" href="<?php bloginfo(template_url); ?>/mobile.css" type="text/css" media="screen" />

<!-- Preloader -->
<script type="text/javascript" src="<?php bloginfo(template_url) ?>/bower_components/preloader/_scripts/main.js"></script>
<link href="<?php bloginfo(template_url) ?>/bower_components/preloader/_css/Icomoon/style.css" rel="stylesheet" type="text/css" />


</head>
<body>

<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
</div>
</div>
 
</div>

<div class="col-xs-12" id="head-bar">
	<div class="col-xs-6" id="logo">
		<a href="/"><img id="chicoran_shield" src="<?php bloginfo(template_url) ?>/assets/img/shakori_shield.png"></a>
	</div>
	<div class="col-xs-6" id="menu-toggle">
		<div class="fat-nav">
			  	
		  <div class="fat-nav__wrapper">
			<ul>
				<li id="title-item">
					<div id="title-container">
		  				<div class="col-lg-2 col-lg-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2" id="nav-header">
							<div class="nav-line vertical-align" style="float: left;"></div>
							<div class="nav-line vertical-align" style="float: right;"></div>	  	
		 				</div>
					  <div id="nav-title">
							<p>navigation</p>
					  </div>
					</div>
				</li>	
		  			  	  	  	  
			  <li><a href="/">home</a></li>

			  <li><a href="/updates">updates</a></li>

			  <li><a href="/events">events</a></li>

			  <li><a href="/story">story</a></li>

			  <li><a href="/people">people</a></li>

			</ul>
		  </div>

		</div>
	</div>
</div>




