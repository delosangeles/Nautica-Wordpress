<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nautica
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="keywords" content="Luxury Homes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>




	<!-- css files -->
	<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="banner-main">
		<div class="banner">
			<!--header-->
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<?php
							the_custom_logo();
							?>
						</div>
						<!--navbar-header-->
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'container_id'   => 'bs-example-navbar-collapse-1',
										'container_class'=> 'collapse navbar-collapse',
										'menu_id'        => 'primary-menu',
										'menu_class'		 => 'nav navbar-nav navbar-right',
									) );
								?>

							</nav>

				</div>

			</div>
			<!--//header-->
			<div class="w3_banner_info">
				<div class="w3_banner_info_grid">
					<h3 class="test">FOR SALE - Nautica Costa Rica</h3>

					<p>Oceanfront & Beachfront Development Opportunity</span></p>

				</div>

			</div>

			<div class="w3ls_banner_info_grids">
				<div class="container">
					<div class="col-xs-3 w3ls_banner_info_grid">
						<div class="w3l_banner_info_grid">
							<div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
								<i class="hi-icon hi-icon-archive fa fa-clone"> </i>
							</div>
							<h4>Construction permits</h4>
						</div>
					</div>
					<div class="col-xs-3 w3ls_banner_info_grid">
							<div class="w3l_banner_info_grid">
								<div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
									<i class="hi-icon hi-icon-archive fa fa-bullhorn"> </i>
								</div>
								<h4>47ha Beachfront property</h4>
							</div>
						</div>
						<div class="col-xs-3 w3ls_banner_info_grid">
							<div class="w3l_banner_info_grid">
								<div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
									<i class="hi-icon hi-icon-archive fa fa-map-marker"> </i>
								</div>
								<h4>Brasilito, Gte, Costa Rica</h4>
							</div>
						</div>
						<div class="col-xs-3 w3ls_banner_info_grid">
							<div class="w3l_banner_info_grid">
								<div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
									<i class="hi-icon hi-icon-archive fa fa-home"> </i>
								</div>
								<h4>Residential and commercial development</h4>
							</div>
						</div>
					<div class="clearfix"> </div>
				</div>
				</div>
			</div>
		</div>

			<!-- //banner -->
			<!-- about -->
	<div class="about-w3l">
