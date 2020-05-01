<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
 ?>
  <body id="single-event__page">

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
                Event
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li class="active">Event</li>
							</ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>
		
		<!-- section event -->
    <section class="section__event">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-7 col-md-8">
    	    	<div class="event__item">
    	    		<div class="event__img">
    	    			<img src="assets/img/about_img-1.jpg" class="img-responsive" alt="...">
    	    		</div>
    	    		<div id="event__timer"></div>
							<div class="event__info">
	            	<div class="event-info__item">
	            		<i class="ion-android-pin"></i>
	            		<p>New York, USA</p>
	            	</div>
	            	<div class="event-info__item">
	            		<i class="ion-android-calendar"></i>
	            		<p>October 9, 2017</p>
	            	</div>
	            	<div class="event-info__item">
	            		<i class="ion-android-time"></i>
	            		<p>8:00 am - 5:00 pm</p>
	            	</div>
	            </div> <!-- .event__info -->
	            <div class="event__body">
	            	<h2 class="event__title">Web Design meetup 2017</h2>
	            	<p class="event__annotation">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemounde suscipit.</p>
	            	<h3 class="event-desc__title">Event description</h3>
	            	<p class="event__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis alias molestiae fuga accusantium, expedita nam natus in dolores dignissimos repellat placeat necessitatibus porro unde sunt amet quasi consequatur, itaque repudiandae voluptatem. Voluptas accusantium officia quaerat odio minima ex aspernatur nihil modi, non sint excepturi cupiditate aliquam provident dignissimos dolore, repellendus laudantium perspiciatis? Nobis similique magni animi et nihil quisquam ullam.</p>
	            	<p class="event__desc">Quaerat labore, voluptates explicabo reiciendis consequatur, nostrum cum. Temporibus ipsa suscipit ut accusamus tenetur, ipsam quae, quibusdam officiis, incidunt beatae reiciendis laborum, dolorem ipsum sapiente. Optio, totam ad deleniti alias facere laudantium, quod ducimus magni expedita nam molestiae similique sit nihil porro, libero maxime impedit accusamus quaerat ex eius cumque aliquid.</p>
	            	<h3 class="event-desc__title">Meetup content</h3>
	            	<ul class="event__list">
	            		<li><i class="ion-android-arrow-forward"></i> Meeting of participants</li>
	            		<li><i class="ion-android-arrow-forward"></i> Check in</li>
	            		<li><i class="ion-android-arrow-forward"></i> Speeches</li>
	            		<li><i class="ion-android-arrow-forward"></i> Coffee break</li>
	            		<li><i class="ion-android-arrow-forward"></i> Discussion</li>
	            	</ul>
	            	<p class="event__desc">Reiciendis alias molestiae fuga accusantium, expedita nam natus in dolores dignissimos repellat placeat necessitatibus porro unde sunt amet quasi consequatur udiandae voluptatem. Voluptas accusantium officia quaerat minima ex aspernatur excepturi cupiditate aliquam provident dignissimos repellendus laudantium perspiciatis? Nobis similique magni animi et nihil quisquam ullam.</p>
	            	<div class="event__price">
	            		<h3>Ticket Price: <span>70-100$</span></h3> 
	            	</div>
	            </div> <!-- .event__body -->
	            <div class="event__speakers">
		            <div class="row">
		              <div class="col-sm-12 col-md-12 col-lg-4">
		            		<h3 class="event-speaker__title">Event speakers</h3>
		            		<p class="event-speaker__desc">Reiciendis alias molestiae fuga accusantium, expedita nam natus in dolores dignissimos repellat placeat necessitatibus porro unde sunt amet quasi consequatur udiandae volup. Voluptas accusantium officia quaerat minima ex aspernatur.</p>
		            		<a href="#" class="btn btn-primary">Learn more</a>
		            	</div>
		            	<div class="col-sm-6 col-md-6 col-lg-4">
		            		<div class="teacher__item">
				    	  			<div class="teacher__info">
				    	  				<div class="teacher__name">
					    	  				Steaven Martins
					    	  			</div>
					    	  			<div class="teacher__prof">
					    	  				Ecology / Professor
					    	  			</div>
				    	  			</div> <!-- / .teacher__info -->
				    	  			<div class="teacher__img">
				    	  				<img src="assets/img/teacher_6.jpg" class="img-responsive" alt="...">
				    	  			</div>
				    	  		</div> <!-- / .teacher__item -->
		            	</div>
		            	<div class="col-sm-6 col-md-6 col-lg-4">
		            		<div class="teacher__item">
				    	  			<div class="teacher__info">
				    	  				<div class="teacher__name">
					    	  				Eric Bronson
					    	  			</div>
					    	  			<div class="teacher__prof">
					    	  				Design / Professor
					    	  			</div>
				    	  			</div> <!-- / .teacher__info -->
				    	  			<div class="teacher__img">
				    	  				<img src="assets/img/teacher_8.jpg" class="img-responsive" alt="...">
				    	  			</div>
				    	  		</div> <!-- / .teacher__item -->
		            	</div>
		            </div> <!-- / .row -->
	            </div> <!-- .event__speakers -->
	            <div class="event__share">
	            	<div class="event-share__text">
	            		Share this:
	            	</div>
	            	<ul class="event-share__links">
	            		<li><a href="#"><i class="ion-social-twitter"></i></a></li>
	            		<li><a href="#"><i class="ion-social-facebook"></i></a></li>
	            		<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
	            		<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
	            		<li><a href="#"><i class="ion-social-rss"></i></a></li>
	            	</ul>
	            </div>
    	    	</div> <!-- .event__item -->
          </div>
          <div class="col-sm-5 col-md-4">
    	    	<div class="event__sidebar">

    	    		<div class="sidebar__item">
    	    			<p class="subheading">Register now</p>
    	    			<form class="register__form" role="form">
		              <div class="form-group">
		                <label class="sr-only">Full name</label>
		                <input type="text" class="form-control" placeholder="Full name">
		              </div>
		              <div class="form-group">
		                <label class="sr-only">Your phone</label>
		                <input type="tel" class="form-control" placeholder="Your phone">
		              </div>
		              <div class="form-group">
		                <label class="sr-only">E-mail</label>
		                <input type="email" class="form-control" placeholder="E-mail">
		              </div>
		              <div class="form-group">
                    <label class="sr-only">Ticket type</label>
                    <select class="form-control">
                      <option value="1" selected="">Ticket type</option>
                      <option value="2">Type #1</option>
                      <option value="3">Type #2</option>
                      <option value="4">Type #3</option>
                    </select>
                  </div>
		              <button type="submit" class="btn btn-accent btn-block ">
		                Register
		              </button>
		            </form>
    	    		</div> <!-- .sidebar__item -->
    	    		
    	    		<div class="sidebar__item">
    	    			<p class="subheading">Search</p>
    	    			<form class="search-form" role="search">
								  <div class="form-group">
								    <input type="text" class="form-control" placeholder="Enter keywords">
								  </div>
								  <button type="submit" class="btn btn-block btn-accent">
								    Search <i class="icon ion-search"></i>
								  </button>
								</form> <!-- .search-form -->
							</div> <!-- .sidebar__item -->

							<div class="sidebar__item">
    	    			<p class="subheading">Categories</p>
    	    			<ul class="categories">
    	    				<li><a href="#"><i class="ion-ios-arrow-forward"></i> Conference (<span>4</span>)</a></li>
    	    				<li><a href="#"><i class="ion-ios-arrow-forward"></i> Development (<span>15</span>)</a></li>
    	    				<li><a href="#"><i class="ion-ios-arrow-forward"></i> Meetup (<span>8</span>)</a></li>
    	    				<li><a href="#"><i class="ion-ios-arrow-forward"></i> Photography (<span>7</span>)</a></li>
    	    			</ul> <!-- .categories -->
    	    		</div> <!-- .sidebar__item -->

    	    		<div class="sidebar__item">
    	    			<p class="subheading">Newsletter</p>
    	    			<p class="newsletter__subtitle">Subscribe to our email newsletter to receive updates and news.</p>

			  		  	<!-- Newsletter form -->
			          <form class="footer__form newsletter__form_clone">
			            <div class="form-group">
			              <label for="newsletter__email" class="sr-only">E-mail address</label>
			              <input type="email" class="form-control" id="newsletter__email" placeholder="Email address">
			            </div>
			            <button type="submit" class="btn btn-block btn-accent">
								    Subscribe <i class="icon ion-paper-airplane"></i>
								  </button>
			          </form> <!-- .newsletter__form -->
			          
			        </div> <!-- .sidebar__item -->

			        <div class="sidebar__item"> 
    	    			<p class="subheading">Recent events</p>
    	    			<div class="recent__posts">
									<div class="sidebar__post">
										<a class="sidebar_post__img" href="#" title="">
											<img src="assets/img/instagram_img-4.jpg" class="img-responsive" alt="...">
										</a>
										<div class="sidebar_post__detail">
											<h5><a href="#" title="">CODECRUSH conference 2017</a></h5>
											<span>June 02, 2017</span>
										</div>
									</div> <!-- Sidebar Post -->
									<div class="sidebar__post">
										<a class="sidebar_post__img" href="#" title="">
											<img src="assets/img/instagram_img-2.jpg" class="img-responsive" alt="...">
										</a>
										<div class="sidebar_post__detail">
											<h5><a href="#" title="">Summer events</a></h5>
											<span>October 09, 2017</span>
										</div>
									</div> <!-- Sidebar Post -->
									<div class="sidebar__post">
										<a class="sidebar_post__img" href="#" title="">
											<img src="assets/img/instagram_img-3.jpg" class="img-responsive" alt="...">
										</a>
										<div class="sidebar_post__detail">
											<h5><a href="#" title="">Web design meetup</a></h5>
											<span>October 17, 2017</span>
										</div>
									</div> <!-- Sidebar Post -->
								</div> <!-- .popular__posts -->
    	    		</div> <!-- .sidebar__item -->

  	    		</div> <!-- .blog__sidebar -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section event -->

<?php include "footer.php"; ?>
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/aos-master/dist/aos.js"></script>
		<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
		<script src="assets/plugins/smothscroll/smoothscroll.js"></script>
    <!-- JS Plugins -->

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->

  </body>
<!-- Copied from https://ygamin.bitbucket.io/CODECRUSH/1.0.2/event-single.php by Cyotek WebCopy 1.4.0.477, 06 July 2018, 10:59:48 AM -->
</html>