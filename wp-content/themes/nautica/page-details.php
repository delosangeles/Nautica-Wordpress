<?php
/*
 Template Name: page-details
 */

get_header('property');
?>
</div>
<!-- gallery -->
<section class="agileits-gallery" id="gallery">
  <h3 class="w3l-titles">Properties Details</h3>
  <div class="container">
    <div class="row">
     <div class="col-12 col-sm-4">
  		<div class="hovereffect">
  			<img class="img-responsive" src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/6ad88836-ccf2-4e54-bb64-79ae4078af65.jpeg" alt="" >
  			<div class="overlay">
  			   <h2>Beaches</h2>


          <div class="contenedor_principal">
            <button type="button" href="#beaches" data-target=".bs-example-modal-lg" class="btn btn-info beaches">View More</button>
          </div>
  			</div>

  		</div>
  	 </div>

     <div class="col-12 col-sm-4">
  		<div class="hovereffect">
  			<img class="img-responsive" src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Beachfront-Bar-Restaurant-Playa-Brasilito-Costa-Rica.jpg" alt="" >
  			<div class="overlay">
  			   <h2>Restaurant</br>Rental</h2>
          <div class="contenedor_principal">
            <button type="button" href="#restaurant" data-target=".bs-example-modal-lg" class="btn btn-info restaurant">View More</button>
          </div>
  			</div>
  		</div>
  	 </div>

     <div class="col-12 col-sm-4">
  		<div class="hovereffect">
  			<img class="img-responsive" src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Hotel-Site-of-Nautica-Cost-Rica-Oceanfront-and-Beachfront-Development-Opportunity.jpg" alt="" >
  			<div class="overlay">
  			   <h2>Condo</br>Hotel Site</h2>
          <div class="contenedor_principal">
            <button type="button" href="#condo" data-target=".bs-example-modal-lg" class="btn btn-info condo">View More</button>
          </div>
  			</div>
  		</div>
  	 </div>

     <div class="col-12 col-sm-4 fila-properties">
  		<div class="hovereffect">
  			<img class="img-responsive" src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_5742-copy.jpg" alt="" >
  			<div class="overlay">
  			   <h2>Owner’s Area</h2>
          <div class="contenedor_principal">
            <button type="button" href="#owner" data-target=".bs-example-modal-lg" class="btn btn-info owner">View More</button>
          </div>
  			</div>
  		</div>
  	 </div>

     <div class="col-12 col-sm-4 fila-properties">
  		<div class="hovereffect">
  			<img class="img-responsive" src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Panorama-2.jpg" alt="" >
  			<div class="overlay">
  			   <h2>Ocean Views</h2>
          <div class="contenedor_principal">
            <button type="button" href="#ocean" data-target=".bs-example-modal-lg" class="btn btn-info ocean">View More</button>
          </div>
  			</div>
  		</div>
  	 </div>

     <div class="col-12 col-sm-4 fila-properties">
  		<div class="hovereffect">
  			<img class="img-responsive" src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/e955d86a-d66e-4389-97d6-bcddf81e5e9e.jpeg" alt="" >
  			<div class="overlay">
  			   <h2>Nautica Entitlements</h2>
          <div class="contenedor_principal">
            <button type="button" href="#enti" data-target=".bs-example-modal-lg" class="btn btn-info enti">View More</button>
          </div>
  			</div>
  		</div>
  	 </div>

     <div class="col-12 col-sm-4 col-sm-offset-4 fila-properties">
  		<div class="hovereffect">
  			<img class="img-responsive" src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Front-Perspective-copy.jpg" alt="" >
  			<div class="overlay">
  			   <h2>Condo Project Nautica</h2>
          <div class="contenedor_principal">
            <button type="button" href="#cproj" data-target=".bs-example-modal-lg" class="btn btn-info cproj">View More</button>
          </div>
  			</div>
  		</div>
  	 </div>


    </div>
  </div>


<!-- Modal Beaches -->
<div id="beaches" class="modal fade bs-example-modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content contenido-lotes">
      <div class="modal-body body-lotes">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
          <ul class="navtabs nav nav-tabs pestanas-lotes">
			<button class="close" type="button" data-dismiss="modal">x</button>
            <li class="active"><a href="#tabC1" data-toggle="tab"><p>Details</p></a></li>
			<li><a href="#tabC2" data-toggle="tab"><p>Gallery</p></a></li>
          </ul>
          <div class="tab-content" id="tabs" style="padding:15px 30px 30px 30px;">
            <div class="tab-pane active" id="tabC1">
				<div class="row">
					<h2 style="padding-bottom: 10px;"><strong>Beaches</strong></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Nautica is uniquely located in front of Brasilito Beach and in the center of all of the best beaches in Guanacaste. There are four-miles of beautiful beaches just in front of the Nautica property. Conchal beach is a short five-minute walk to the south and Flamingo beach is a five-minute drive to the north. In addition there are 15 beaches all within a fifteen-minute drive from Brasilito.</p>
            <ol>
              <li><a>Playa Flamingo - Guanacaste - Just North of Nautica</a></li>
              <li><a>Playa Brasilito - Guanacaste - Part of Nautica Costa Rica</a></li>
              <li><a>Playa Conchal - Guanacaste - Just South of Nautica</a></li>
            </ol>
					</div>
					<div class="col-md-6">

						<div id="galeriabeaches" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#galeriabeaches" data-slide-to="0" class="active"></li>
							  <li data-target="#galeriabeaches" data-slide-to="1"></li>
							  <li data-target="#galeriabeaches" data-slide-to="2"></li>
							  <li data-target="#galeriabeaches" data-slide-to="3"></li>
							  <li data-target="#galeriabeaches" data-slide-to="4"></li>
							  <li data-target="#galeriabeaches" data-slide-to="5"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
							  <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/6ad88836-ccf2-4e54-bb64-79ae4078af65.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Gallery-beaches-flaingo-beach-south.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Brasilito-Beach-from-the-air.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/c829c5d8-72ea-4678-8475-b881132d36d1.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Conchal-Beach-at-Nautica-Costa-Rica.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Flamingo-beach-from-the-Air.jpg" alt="" style="width:100%;">
							  </div>


							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#galeriabeaches" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#galeriabeaches" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						 </div>

					</div>
				</div>
            </div>
			<div class="tab-pane" id="tabC2">
              <div class="row">
			  <div class="col-sm-12 container">

						  <div id="planosbeaches" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#planosbeaches" data-slide-to="0" class="active"></li>
                <li data-target="#planosbeaches" data-slide-to="1"></li>
                <li data-target="#planosbeaches" data-slide-to="2"></li>
                <li data-target="#planosbeaches" data-slide-to="3"></li>
                <li data-target="#planosbeaches" data-slide-to="4"></li>
                <li data-target="#planosbeaches" data-slide-to="5"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
                <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/6ad88836-ccf2-4e54-bb64-79ae4078af65.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Gallery-beaches-flaingo-beach-south.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Brasilito-Beach-from-the-air.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/c829c5d8-72ea-4678-8475-b881132d36d1.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Conchal-Beach-at-Nautica-Costa-Rica.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Flamingo-beach-from-the-Air.jpg" alt="" style="width:100%;">
							  </div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#planosbeaches" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#planosbeaches" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Beaches -->

<!-- Modal Restaurants-->
<div id="restaurant" class="modal fade bs-example-modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content contenido-lotes">
      <div class="modal-body body-lotes">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
          <ul class="navtabs nav nav-tabs pestanas-lotes">
			<button class="close" type="button" data-dismiss="modal">x</button>
            <li class="active"><a href="#tabR1" data-toggle="tab"><p>Details</p></a></li>
			<li><a href="#tabR2" data-toggle="tab"><p>Gallery</p></a></li>
          </ul>
          <div class="tab-content" id="tabs" style="padding:15px 30px 30px 30px;">
            <div class="tab-pane active" id="tabR1">
				<div class="row">
					<h2 style="padding-bottom: 10px;"><strong>Restaurant / Rental</strong></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Operating Beachfront Bar Restaurant - This is an aerial photo of the beachfront section featuring Tikis Beach Bar/Restaurant and a Coldwell Banker real estate office. This section of the property has 75 meters (246 ft) of beachfront and is completely titled to the 50-meter mark, a very unusual find in Costa Rica</p>
            <ol>
              <li>
                <a>Areal View of Restaurant & Coldwell Banker Real Estate Brokerage Office</a>
              </li>
              <li>
                <a>Commercial Lease Properties - Coldwell Banker & Tikis Bar & Restaurant</a>
              </li>
            </ol>
					</div>
					<div class="col-md-6">

						<div id="galeriarestaurant" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#galeriarestaurant" data-slide-to="0" class="active"></li>
							  <li data-target="#galeriarestaurant" data-slide-to="1"></li>
							  <li data-target="#galeriarestaurant" data-slide-to="2"></li>
							  <li data-target="#galeriarestaurant" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
							  <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/3f56f2bc-a554-46b5-973b-a05f30cf30e2.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Beachfront-Bar-Restaurant-Playa-Brasilito-Costa-Rica.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Coldwell-Banker-Rental-.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Nautica-Beachfront-Bar-Restaurant.jpg" alt="" style="width:100%;">
							  </div>


							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#galeriarestaurant" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#galeriarestaurant" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						 </div>

					</div>
				</div>
            </div>
			<div class="tab-pane" id="tabR2">
              <div class="row">
			  <div class="col-sm-12 container">

						  <div id="planosrestaurant" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#planosrestaurant" data-slide-to="0" class="active"></li>
                <li data-target="#planosrestaurant" data-slide-to="1"></li>
                <li data-target="#planosrestaurant" data-slide-to="2"></li>
                <li data-target="#planosrestaurant" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
                <div class="item active">
                <img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/3f56f2bc-a554-46b5-973b-a05f30cf30e2.jpeg" alt="" style="width:100%;">
                </div>

                <div class="item">
                <img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Beachfront-Bar-Restaurant-Playa-Brasilito-Costa-Rica.jpg" alt="" style="width:100%;">
                </div>

                <div class="item">
                <img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Coldwell-Banker-Rental-.jpg" alt="" style="width:100%;">
                </div>

                <div class="item">
                <img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Nautica-Beachfront-Bar-Restaurant.jpg" alt="" style="width:100%;">
                </div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#planosrestaurant" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#planosrestaurant" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Restaurants-->

<!-- Modal Condo-->
<div id="condo" class="modal fade bs-example-modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content contenido-lotes">
      <div class="modal-body body-lotes">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
          <ul class="navtabs nav nav-tabs pestanas-lotes">
			<button class="close" type="button" data-dismiss="modal">x</button>
            <li class="active"><a href="#tabH1" data-toggle="tab"><p>Details</p></a></li>
			<li><a href="#tabH2" data-toggle="tab"><p>Gallery</p></a></li>
          </ul>
          <div class="tab-content" id="tabs" style="padding:15px 30px 30px 30px;">
            <div class="tab-pane active" id="tabH1">
				<div class="row">
					<h2 style="padding-bottom: 10px;"><strong>Condo / Hotel Site</strong></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Permitted Titled Beachfront - This 6.7 hectare (16 acre) hotel site has many entitlements including permits for six- 9 story beachfront condo/hotel towers. It is uniquely located in the middle of Brasilito beach with paved road access and all utilities to the site. Its nearest neighbor, a 5 minute walk to the south is Reserva Conchal featuring the Westin hotel and the 18-hole Robert Trent Jones Jr. golf course</p>
            <ol>
              <li>
                <a>Areal Views of Nautica Beachfront Hotel Site</a>
              </li>
              <li>
                <a>Ocean Views from and of Nautica Costa Rica</a>
              </li>
            </ol>
					</div>
					<div class="col-md-6">

						<div id="galeriacondo" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#galeriacondo" data-slide-to="0" class="active"></li>
							  <li data-target="#galeriacondo" data-slide-to="1"></li>
							  <li data-target="#galeriacondo" data-slide-to="2"></li>
							  <li data-target="#galeriacondo" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
							  <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Hotel-Site-of-Nautica-Cost-Rica-Oceanfront-and-Beachfront-Development-Opportunity.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/131067de-26e4-465c-9398-9f47428a1d66.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_6015-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_7186-copy.jpg" alt="" style="width:100%;">
							  </div>

						  </div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#galeriacondo" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#galeriacondo" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						 </div>

					</div>
				</div>
            </div>
			<div class="tab-pane" id="tabH2">
              <div class="row">
			  <div class="col-sm-12 container">

						  <div id="planoscondo" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#planoscondo" data-slide-to="0" class="active"></li>
                <li data-target="#planoscondo" data-slide-to="1"></li>
                <li data-target="#planoscondo" data-slide-to="2"></li>
                <li data-target="#planoscondo" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
                <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Hotel-Site-of-Nautica-Cost-Rica-Oceanfront-and-Beachfront-Development-Opportunity.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/131067de-26e4-465c-9398-9f47428a1d66.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_6015-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_7186-copy.jpg" alt="" style="width:100%;">
							  </div>

							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#planoscondo" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#planoscondo" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Condo-->

<!-- Modal Owner-->
<div id="owner" class="modal fade bs-example-modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content contenido-lotes">
      <div class="modal-body body-lotes">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
          <ul class="navtabs nav nav-tabs pestanas-lotes">
			<button class="close" type="button" data-dismiss="modal">x</button>
            <li class="active"><a href="#tabO1" data-toggle="tab"><p>Details</p></a></li>
			<li><a href="#tabO2" data-toggle="tab"><p>Gallery</p></a></li>
          </ul>
          <div class="tab-content" id="tabs" style="padding:15px 30px 30px 30px;">
            <div class="tab-pane active" id="tabO1">
				<div class="row">
					<h2 style="padding-bottom: 10px;"><strong>OWNER’S AREA</strong></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>This 11-hectare (27.5 acre) section of the property has five existing condos,
              a large semi-Olympic pool and spectacular ocean views. Move in and live here while
              you develop the beachfront section. This part of the property has spectacular 180
              degree ocean views and is perfectly set-up for an additional condo/timeshare project.
              Come take a look at the property to see for yourself it's potential.
            </p>
            <ol>
              <li>
                <a>Views from and of Nautica Hill Top Residence</a>
              </li>
              <li>
                <a>Views of Owner's Area Pool and Rancho</a>
              </li>
              <li>
                <a>Panoramic Ocean Views from Owner Area</a>
              </li>
            </ol>
					</div>
					<div class="col-md-6">

						<div id="galeriaowner" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#galeriaowner" data-slide-to="0" class="active"></li>
							  <li data-target="#galeriaowner" data-slide-to="1"></li>
							  <li data-target="#galeriaowner" data-slide-to="2"></li>
							  <li data-target="#galeriaowner" data-slide-to="3"></li>
                <li data-target="#galeriaowner" data-slide-to="4"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
							  <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/19754a9f-c422-4eff-b87c-249487b020d9.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_5742-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_6372-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/owners-area-pool.jpg" alt="" style="width:100%;">
							  </div>

                <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Panorama-1.jpg" alt="" style="width:100%;">
							  </div>

						  </div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#galeriaowner" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#galeriaowner" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						 </div>

					</div>
				</div>
            </div>
			<div class="tab-pane" id="tabO2">
              <div class="row">
			  <div class="col-sm-12 container">

						  <div id="planosowner" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#planosowner" data-slide-to="0" class="active"></li>
                <li data-target="#planosowner" data-slide-to="1"></li>
                <li data-target="#planosowner" data-slide-to="2"></li>
                <li data-target="#planosowner" data-slide-to="3"></li>
                <li data-target="#planosowner" data-slide-to="4"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
                <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/19754a9f-c422-4eff-b87c-249487b020d9.jpeg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_5742-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/IMG_6372-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/owners-area-pool.jpg" alt="" style="width:100%;">
							  </div>

                <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Panorama-1.jpg" alt="" style="width:100%;">
							  </div>

							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#planosowner" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#planosowner" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Owner-->

<!-- Modal Ocean Views-->
<div id="ocean" class="modal fade bs-example-modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content contenido-lotes">
      <div class="modal-body body-lotes">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
          <ul class="navtabs nav nav-tabs pestanas-lotes">
			<button class="close" type="button" data-dismiss="modal">x</button>
            <li class="active"><a href="#tabOV1" data-toggle="tab"><p>Details</p></a></li>
			<li><a href="#tabOV2" data-toggle="tab"><p>Gallery</p></a></li>
          </ul>
          <div class="tab-content" id="tabs" style="padding:15px 30px 30px 30px;">
            <div class="tab-pane active" id="tabOV1">
				<div class="row">
					<h2 style="padding-bottom: 10px;"><strong>Ocean Views</strong></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>This is only a panoramic camera view of the 180-degree ocean view seen from this part of the property. You really need to see it to appreciate the potential this property offers. This part is 16 hectares (40 acres) with all utilities and infrastructure already installed to the property. All you need to do is decide what you want to create and get started today.</p>
					</div>
					<div class="col-md-6">

						<div id="galeriaocean" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#galeriaocean" data-slide-to="0" class="active"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
							  <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Panorama-2.jpg" alt="" style="width:100%;">
							  </div>

							 </div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#galeriaocean" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#galeriaocean" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						 </div>

					</div>
				</div>
            </div>
			<div class="tab-pane" id="tabOV2">
              <div class="row">
			  <div class="col-sm-12 container">

						  <div id="planosocean" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#planosocean" data-slide-to="0" class="active"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
                <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Panorama-2.jpg" alt="" style="width:100%;">
							  </div>

							 </div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#planosocean" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#planosocean" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Ocean Views-->

<!-- Modal Entitlements-->
<div id="enti" class="modal fade bs-example-modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content contenido-lotes">
      <div class="modal-body body-lotes">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
          <ul class="navtabs nav nav-tabs pestanas-lotes">
			<button class="close" type="button" data-dismiss="modal">x</button>
            <li class="active"><a href="#tabEn1" data-toggle="tab"><p>Details</p></a></li>
			<li><a href="#tabEn2" data-toggle="tab"><p>Gallery</p></a></li>
          </ul>
          <div class="tab-content" id="tabs" style="padding:15px 30px 30px 30px;">
            <div class="tab-pane active" id="tabEn1">
				<div class="row">
					<h2 style="padding-bottom: 10px;"><strong>Entitlements</strong></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Nautica Beachfront Development property - For Sale in Guanacaste, Costa Rica - is a 47-hectare (117 acre) property that has many entitlements, which add greatly to its value and facilitate its further development. Here are just a few:</p>
            <ul>
              <li>
                <a>Titled beachfront in Brasilito on a paved road</a>
              </li>
              <li>
                <a>Fully licensed and operating restaurant/bar</a>
              </li>
              <li>
                <a>Income producing rental properties (Coldwell Banker)</a>
              </li>
              <li>
                <a>Current permits for six nine story ocean view condo/hotel units, large pool and gym (see rendering below)</a>
              </li>
              <li>
                <a>All utilities installed throughout the property</a>
              </li>
              <li>
                <a>Paved internal and external roads</a>
              </li>
              <li>
                <a>Five condos with large pool (owners area)</a>
              </li>
              <li>
                <a>Fully AyA licensed and operating water association with 5 wells and infrastructure</a>
              </li>
              <li>
                <a>Several different feasibility studies and proposed designs available</a>
              </li>
              <li>
                <a>Spectacular ocean views from most of the property</a>
              </li>
              <li>
                <a>A one of a kind property not available anywhere else in Costa Rica.  Must see to believe.</a>
              </li>
            </ul>
					</div>
					<div class="col-md-6">

						<div id="galeriaenti" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#galeriaenti" data-slide-to="0" class="active"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
							  <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/e955d86a-d66e-4389-97d6-bcddf81e5e9e.jpeg" alt="" style="width:100%;">
							  </div>

							 </div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#galeriaenti" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#galeriaenti" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						 </div>

					</div>
				</div>
            </div>
			<div class="tab-pane" id="tabEn2">
              <div class="row">
			  <div class="col-sm-12 container">

						  <div id="planosenti" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#planosenti" data-slide-to="0" class="active"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
                <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/e955d86a-d66e-4389-97d6-bcddf81e5e9e.jpeg" alt="" style="width:100%;">
							  </div>

							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#planosenti" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#planosenti" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Entitlements-->

<!-- Modal Condo Project Nautica-->
<div id="cproj" class="modal fade bs-example-modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content contenido-lotes">
      <div class="modal-body body-lotes">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
          <ul class="navtabs nav nav-tabs pestanas-lotes">
			<button class="close" type="button" data-dismiss="modal">x</button>
            <li class="active"><a href="#tabCP1" data-toggle="tab"><p>Details</p></a></li>
			<li><a href="#tabCP2" data-toggle="tab"><p>Gallery</p></a></li>
          </ul>
          <div class="tab-content" id="tabs" style="padding:15px 30px 30px 30px;">
            <div class="tab-pane active" id="tabCP1">
				<div class="row">
					<h2 style="padding-bottom: 10px;"><strong>Condo Project Nautica</strong></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>For Sale - Guanacaste, Costa Rica - Beachfront Development Land - Permitted - Shovel Ready - Condo Project - Ocean and Mountain views</p>
            <ul>
              <li>
                <a>Fully Permitted - ready to start construction today - Six 9 story mid-rise towers with beautiful ocean and mountain views</a>
              </li>
              <li>
                <a>Can build (51), 2 bedroom (2,154 sq. ft.) condos and (51) 3 bedroom (2,334 sq. ft.) condos. Plus 6 penthouse (7,653 sq.ft.) each. Or.....</a>
              </li>
              <li>
                <a>Current permits provide possibility to convert the condos to hotel units of up to 9 units per floor.</a>
              </li>
              <li>
                <a>All infrastructure is at the site (water, power, telephone, cable, & internet)</a>
              </li>
              <li>
                <a>Paved roads to the site</a>
              </li>
              <li>
                <a>Construction bodegas and employees quarters </a>
              </li>
              <li>
                <a>Permits include a 600,000 gallon pool, gym and conference area</a>
              </li>
            </ul>
					</div>
					<div class="col-md-6">

						<div id="galeriacproj" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#galeriacproj" data-slide-to="0" class="active"></li>
							  <li data-target="#galeriacproj" data-slide-to="1"></li>
							  <li data-target="#galeriacproj" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
							  <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Front-Perspective-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/NAUTICA-01-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Rear-Perspective-copy.jpg" alt="" style="width:100%;">
							  </div>

						  </div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#galeriacproj" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#galeriacproj" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						 </div>

					</div>
				</div>
            </div>
			<div class="tab-pane" id="tabCP2">
              <div class="row">
			  <div class="col-sm-12 container">

						  <div id="planoscproj" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#planoscproj" data-slide-to="0" class="active"></li>
                <li data-target="#planoscproj" data-slide-to="1"></li>
                <li data-target="#planoscproj" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
                <div class="item active">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Front-Perspective-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/NAUTICA-01-copy.jpg" alt="" style="width:100%;">
							  </div>

							  <div class="item">
								<img src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/Rear-Perspective-copy.jpg" alt="" style="width:100%;">
							  </div>

							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#planoscproj" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#planoscproj" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Condo Project Nautica-->

</section>
<!-- //gallery -->

<!-- newsletter -->
<div class="location-cont">
  <div class="container">
		<h3 class="w3l-titles">Location</h3>
		<div class="row">
			<div class="col-12">
			<?php gmwd_map( 1, 1); ?>
			</div>
		</div>
	</div>
</div>
<!-- //newsletter -->

<?php
//get_sidebar();
get_footer();
