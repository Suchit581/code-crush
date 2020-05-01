<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from https://ygamin.bitbucket.io/CODECRUSH/1.0.2/contact.html by Cyotek WebCopy 1.4.0.477, 06 July 2018, 10:59:48 AM -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>CODECRUSH | Contacts</title>

    <!-- CSS Plugins -->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="assets/css/theme.css">
    <!--endbuild-->

  </head>
  <body id="contact__page">

    <!-- Navbar
    ================================================== -->
    <?php include 'nav-link.php'; ?>

    <!-- CONTENT
      ================================================== -->
	<?php include 'sign-up-in-modal.php'; ?>
		
		<!-- section home -->
   	<section class="section__home">
      <div class="container home__body">
        <div class="row">
          <div class="col-sm-12">
            <div class="home__content">

              <!-- Heading -->
              <h1 class="home__heading">
                Contacts
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.html">Home</a></li>
							  <li class="active">Contact</li>
							</ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>

    <!-- section contact -->
    <!-- <section class="section__location">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
						<div class="section_title__body">
    	    		<div class="section__subtitle dark__subtitle">
	    					Find us on the <span>map</span>
	    				</div>
	    				<h2 class="section__title dark__title">
	    					Location
	    				</h2>
	    				<p class="section_title__desc">
	    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
	    				</p>
    	    	</div>
    	    </div>
    	  </div> 
    	  <div id="map"></div>
    	</div> 
    </section> -->


    <section class="section__get-in-touch">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
				<div class="section_title__body">
    	    		<div class="section__subtitle dark__subtitle">
	    					Write us a <span>message</span>
	    				</div>
	    				<h2 class="section__title dark__title">
	    					Get in touch
	    				</h2>
	    				<p class="section_title__desc">
	    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
	    				</p> <!-- / .section_title__desc -->	
    	    	</div> <!-- / .section_title__body  -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
    	    <div class="col-sm-6">
    	  
    	  		<!-- Alert message -->
						<div class="alert" id="form_message" role="alert"></div>

						<!-- Form -->
						<form action="include/contact.inc.php" method="post">
						  
						  <!-- Email -->
						  <div class="form-group">
						    <label for="email" class="sr-only">Email address</label>
						    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
						    <span class="help-block"></span>
						  </div>
						  
						  <!-- Name -->
						  <div class="form-group">
						    <label for="name" class="sr-only">Name</label>
						    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
						    <span class="help-block"></span>
						  </div>
						  
						  <!-- Message -->
						  <div class="form-group">
						    <label for="message" class="sr-only">Message</label>
						    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
						    <span class="help-block"></span>
						  </div>
						  
						  <!-- Note -->
						  <div class="form-group">
						    <small class="text-muted">
						      * All fields are mandatory.
						    </small>
						  </div>
						  
						  <!-- Submit -->
						  <button type="submit" class="btn btn-block btn-accent" name="submit">
						    Send Message
						  </button>

						</form>  	
    	  
    	    </div>
    	    <div class="col-sm-6">
    	    	<div class="contact_info__body">
    	    		<div class="contact_info__item">
    	    			<div class="contact__title">
    	    				Write us<span>.</span>
    	    			</div>
								<div class="contact__info">
									<div class="contact_info__wrapper">
										<h3>Head office</h3>
										<p>hello@CODECRUSHcom</p>
									</div>
									<div class="contact_info__wrapper">
										<h3>Support</h3>
										<p>support@CODECRUSHcom</p>
									</div>
								</div> <!-- / .contact__info -->
    	    		</div> <!-- / .contact_info__item -->
    	    		<div class="contact_info__item">
    	    			<div class="contact__title">
    	    				Call us<span>.</span>
    	    			</div>
								<div class="contact__info">
									<div class="contact_info__wrapper">
										<h3>Head office</h3>
										<p>+ 0242 456 45 45</p>
									</div>
									<div class="contact_info__wrapper">
										<h3>Support</h3>
										<p>+ 0242 789 98 98</p>
									</div>
								</div> <!-- / .contact__info -->
    	    		</div> <!-- / .contact_info__item -->
    	    		<div class="contact_info__item">
    	    			<div class="contact__title">
    	    				Visit us<span>.</span>
    	    			</div>
								<div class="contact__info">
									<div class="contact_info__wrapper">
										<h3>Head office</h3>
										<p>78 Lorem St, New York, NY</p>
									</div>
								</div> <!-- / .contact__info -->
    	    		</div> <!-- / .contact_info__item -->
    	    	</div> <!-- / .contact_info__body -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>

<?php include "footer.php"; ?>
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
		<script src="assets/plugins/contact/contact.js"></script>
		
		<script src="assets/plugins/aos-master/dist/aos.js"></script>
    <script src="assets/plugins/smothscroll/smoothscroll.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->
		<script src="assets/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&callback=initMap" async="" defer=""></script>

  </body>
</html>