<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Arima+Madurai|Lobster|Noto+Sans:400,700|Patrick+Hand+SC|Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<?php wp_head(); ?>
		<script>
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

	</head>
	<body <?php body_class(); ?>>

		<header class="header clear" role="banner">
			<nav class="pt-nav-header">
				<div class="pt-container">
					<div class="pt-header-content">
						<span class="pt-real-time"><i class="fas fa-calendar"></i> <?php echo date( 'Y M D | H:i', current_time( 'timestamp', 0 ) ); ?></span>
						<nav class="pt-nav-social">
							<?php html5blank_nav('social-menu'); ?>
							<span id="pt-contact-us"><i class="fas fa-envelope"></i> Contact us</span>
						</nav>
					</div>
				</div>
			</nav>
		
			<div class="pt-logo">
				<div class="pt-container">
					<div class="pt-logo-content">
						<a href="<?php echo home_url(); ?>">
							<h1><?php bloginfo('name'); ?></h1>
						</a>
						<p><?php bloginfo('description'); ?></p>
					</div>
				</div>
			</div>

			<nav id="myNAV" class="pt-nav" role="navigation">
				<div class="pt-container">
					<div class="pt-mobi-nav">
						<span id="pt-bar-menu"><i class="fas fa-bars"></i></span>
						<a id="pt-home-icon" href="<?php echo home_url(); ?>"><i class="fas fa-home"></i></a>
					</div>
					<div class="pt-nav-content">
						<div class="pt-nav-menu hide-menu" id="formobimenu">
							<?php html5blank_nav('header-menu'); ?>
						</div>
						<span class="pt-open-search" id="myBtn"><i class="material-icons">search</i></span>
					</div>
				</div>
			</nav>

		</header>
		<div class="pt-clear"></div>
		<div class="pt-popup" id="myModal">
			<div class="pt-popup-content">
				<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
					<input class="search-input" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter...', 'html5blank' ); ?>" autofocus>
				</form>
			</div>
		</div>
		<div class="pt-popup" id="contactUs">
			<div class="pt-popup-content">
				<?php html5blank_nav('social-menu'); ?>
			</div>
		</div>
		<div class="pt-loader-content" style="height: 90px;transition: 0.6s;"><div class="loader" style="/* display: none; */"></div></div>