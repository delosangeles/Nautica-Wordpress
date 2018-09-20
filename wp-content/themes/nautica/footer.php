<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nautica
 */

?>

<div class="footer">
	<div class="container">
		<div class="w3_footer_grids">
			<div class="col-md-4 w3_footer_grid-main">
				<h2><a href="index.html">Nautica</a></h2>
				<p>Nautica is a rare 47 hectare titled beachfront property located in Brasilito Beach, Guanacaste, Costa Rica. With all infrastructure and construction permits in place, Nautica is a perfect match for someone looking to start construction right now on a beachfront hotel or condo project in Costa Rica.</p>
			</div>
			<div class="col-md-4 w3_footer_grid-main-2">
				<div class="midle-w3l">
					<p>Nautica</p>
				</div>
			</div>
			<div class="col-md-4 w3_footer_grid-main">
				<div class="w3_footer_grid">
					<div class="col-xs-2 w3l_footer_grid">
						<i class="fa fa-home" aria-hidden="true"></i>
					</div>
					<div class="col-xs-10 address-right">
						<h4>Contact</h4>
						<p>Joseph Irish</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_footer_grid">
					<div class="col-xs-2 w3l_footer_grid">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="col-xs-10 address-right">
						<h4>Call Us</h4>
						<p>+(506) 8388-9555</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_footer_grid">
					<div class="col-xs-2 w3l_footer_grid">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="col-xs-10 address-right">
						<h4>Mail Us</h4>
						<p><a href="mailto:josephi@grupodoit.com">josephi@grupodoit.com</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="copyright">
	<div class="container">
		<p>© 2017 Nautica. All Rights Reserved | Design by <a href="https://www.avotz.com/">Avotz Web Works</a></p>
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->
<!-- js -->

<!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->


<script type="text/javascript">
	/*Beaches*/
	$(function() {
	$(".beaches").click(function(){
				$("#beaches").modal();
		});
	$('.iconos li').on('click', function() {
		var tab = $(this).index();
		$('#beaches .modal-body .nav-tabs a:eq(' + tab + ')').tab('show');

	});
	});

	/*Restaurants*/
	$(function() {
	$(".restaurant").click(function(){
				$("#restaurant").modal();
		});
	$('.iconos li').on('click', function() {
		var tab = $(this).index();
		$('#restaurant .modal-body .nav-tabs a:eq(' + tab + ')').tab('show');

	});
	});
	/*Condo Hotel Site*/
	$(function() {
	$(".condo").click(function(){
				$("#condo").modal();
		});
	$('.iconos li').on('click', function() {
		var tab = $(this).index();
		$('#condo .modal-body .nav-tabs a:eq(' + tab + ')').tab('show');

	});
	});

	/*Owner's Area*/
	$(function() {
	$(".owner").click(function(){
				$("#owner").modal();
		});
	$('.iconos li').on('click', function() {
		var tab = $(this).index();
		$('#owner .modal-body .nav-tabs a:eq(' + tab + ')').tab('show');

	});
	});

	/*Ocean Views*/
	$(function() {
	$(".ocean").click(function(){
				$("#ocean").modal();
		});
	$('.iconos li').on('click', function() {
		var tab = $(this).index();
		$('#ocean .modal-body .nav-tabs a:eq(' + tab + ')').tab('show');

	});
	});

	/*Entitlements*/
	$(function() {
	$(".enti").click(function(){
				$("#enti").modal();
		});
	$('.iconos li').on('click', function() {
		var tab = $(this).index();
		$('#enti .modal-body .nav-tabs a:eq(' + tab + ')').tab('show');

	});
	});

	/*Condo Project Nautica*/
	$(function() {
	$(".cproj").click(function(){
				$("#cproj").modal();
		});
	$('.iconos li').on('click', function() {
		var tab = $(this).index();
		$('#cproj .modal-body .nav-tabs a:eq(' + tab + ')').tab('show');

	});
	});

</script>

<!-- start-smoth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--search jQuery-->

<!--//search jQuery-->
<!-- tabs -->

<script>
	jQuery(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function (event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>
<!-- //tabs -->
<!-- stats -->
<script src="<?php echo get_template_directory_uri()?>/js/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/counterup.min.js"></script>
<script>
	jQuery(document).ready(function ($) {
		$('.counter').counterUp({
			delay: 100,
			time: 1000
		});
	});
</script>
<!-- stats -->
<!-- flexisel -->
<script type="text/javascript">
	jQuery(window).load(function () {
		$("#flexiselDemo3").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: false,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});
	});
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.flexisel.js"></script>
<!-- flexisel -->
<!-- smooth scrolling -->
<script src="<?php echo get_template_directory_uri()?>/js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- text-effect -->
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.transit.js"></script>


<!-- //text-effect -->
<!-- js-scripts -->


<?php wp_footer(); ?>

</body>
</html>
