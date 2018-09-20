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
		<div class="banner-2" style="background: url('<?php echo get_template_directory_uri()?>/images/brasilito-beach-property.jpg') no-repeat 0px 0px; background-size: cover;">
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

		</div>

			<!-- //banner -->
			<!-- about -->
			<div class="services-breadcrumb">
				<div class="agile_inner_breadcrumb">
					<ul class="w3_short">
						<li><a href="index.html">Home</a><i>>></i></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
