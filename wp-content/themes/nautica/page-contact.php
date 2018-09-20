<?php
/*
 Template Name: page-contact
 */

get_header('contact');
?>
<div class="contact">
  <div class="container">
    <h3 class="w3l-titles">Contact</h3>
    <div class="col-md-3 col-sm-3 contact-left">
      <div class="address">
        <h4><i class="fa fa-map-marker" aria-hidden="true"></i>Location</h4>
        <p>Brasilito Beach, Guanacaste</p>
        <p>Costa Rica.</p>
      </div>
      <div class="phone">
        <h4><i class="fa fa-phone" aria-hidden="true"></i>PHONE</h4>
        <p>+(506) 8388-9555</p>
      </div>
      <div class="email">
        <h4><i class="fa fa-envelope-o" aria-hidden="true"></i>E-MAIL</h4>
        <p><a href="mailto:josephi@grupodoit.com">josephi@grupodoit.com</a></p>
      </div>
    </div>
    <div class="col-md-9 col-sm-9 contact-right">

      <?php echo do_shortcode( "[contact-form-7 id='55' title='Contact form']" ); ?>
    </div>


  </div>
</div>
<div class="map-w3ls">
  <div class="container-fluid">
		<div class="row">
			<div class="col-12">
			<?php gmwd_map( 2, 2); ?>
			</div>
		</div>
	</div>
</div>


<?php
//get_sidebar();
get_footer();
