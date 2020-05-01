<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
 ?>
  <body id="about__page">
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
                About us
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li class="active">About</li>
							</ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>

    <!-- section features -->
    <section class="section__features">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-4">
    	    	<div class="feature__item">
    	    		<div class="feature_item__icon">
    	    			<i class="ion-ios-flask-outline"></i>
    	    		</div>
    	    		<div class="feature_item__title">
    	    			Online courses
    	    		</div>
    	    		<div class="feature_item__desc">
    	    			Lorem ipsum dolor sitamet consectetur adipisicing elit. In nemo dolore maxime voluptas quamgit.
    	    		</div>
    	    	</div> <!-- / .feature__item -->
    	    </div>
    	    <div class="col-sm-4">
    	    	<div class="feature__item">
    	    		<div class="feature_item__icon">
    	    			<i class="ion-ios-lightbulb-outline"></i>
    	    		</div>
    	    		<div class="feature_item__title">
    	    			Best teachers
    	    		</div>
    	    		<div class="feature_item__desc">
    	    			Lorem ipsum dolor sitamet consectetur adipisicing elit. In nemo dolore maxime voluptas quamgit.
    	    		</div>
    	    	</div> <!-- / .feature__item -->
    	    </div>
    	    <div class="col-sm-4">
    	    	<div class="feature__item">
    	    		<div class="feature_item__icon">
    	    			<i class="ion-ios-bookmarks-outline"></i>
    	    		</div>
    	    		<div class="feature_item__title">
    	    			Book library
    	    		</div>
    	    		<div class="feature_item__desc">
    	    			Lorem ipsum dolor sitamet consectetur adipisicing elit. In nemo dolore maxime voluptas quamgit.
    	    		</div>
    	    	</div> <!-- / .feature__item -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>

    <!-- section about -->
    <section class="section__about">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="section_title__body">
    	    		<div class="section__subtitle dark__subtitle">
	    					Presentation of our <span>resource</span>
	    				</div>
	    				<h2 class="section__title dark__title">
	    					Our story
	    				</h2>
	    				<p class="section_title__desc">
	    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
	    				</p> <!-- / .about__desc -->	
    	    	</div> <!-- / .section_title__body  -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row row_centered">
    	    <div class="col-sm-6">
    	    	<div class="about__wrapper">
    	    		<div class="section__subtitle">
    	    			Short info
    	    		</div>
    	    		<div class="about__title">
	    	    		<i class="ion-play"></i> Who we are
	    	    	</div>
	    	    	<div class="about__text">
	    	    		Lonimi illo perspiciatis, at ea dicta asperiores libero nihil iste tenetur placeat architecto hic expedita natus volupta temsit asperiores labore consequatur quidem temporibus nemo voluptatum quasi.
	    	    	</div>
	    	    	<div class="about__text">
	    	    		Eveniet quaerat temporibus earum quam quisquam, nihil iusto ab dolores culpa ducimus laborum, porro quis hic quia! Deserunt mollitia suscipit deleniti accusamus maiores. Voluptatum animi illo perspiciatis libero nihil iste tenetur.
	    	    	</div>	
    	    	</div> <!-- / .about__wrapper -->
    	    </div>
    	    <div class="col-sm-6">
    	    	<div class="about__wrapper">
    	    		<div class="embed-responsive embed-responsive-16by9">
					    	<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/114151688?color=ffffff&title=0&byline=0&portrait=0" allowfullscreen=""></iframe>
							</div>
    	    	</div> <!-- / .about__wrapper -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row row_centered">
    	    <div class="col-sm-6 col-sm-push-6">
    	    	<div class="about__wrapper">
    	    		<div class="section__subtitle">
    	    			Main principles
    	    		</div>
    	    		<div class="about__title">
	    	    		<i class="ion-play"></i> Our mission
	    	    	</div>
	    	    	<div class="about__text">
	    	    		Unde praesentium quas eaque natus voluptates accusantium cum, aliquam itaque quo dignissimos omnis temporibus nemo voluptatum quasi consectetur, id nulla quidem molestiae officiis optio qui blanditiis iure, veritatis quos ullam. Recusandae atque corporis sunt molestias.
	    	    	</div>
	    	    	<div class="about__text">
	    	    		Deserunt inventore minus nesciunt magnam obcaecati quos totam placeat, vitae adipisci molestias, asperiores labore consequatur quidem ex veniam quo fugit iste quod impedit.
	    	    	</div>
	    	    	<a href="#signupModal" data-toggle="modal" class="btn btn-primary">Sign up</a>
    	    	</div> <!-- / .about__wrapper -->
    	    </div>
    	    <div class="col-sm-6 col-sm-pull-6">
    	    	<div class="about__wrapper">
    	    		<img src="assets/img/about_img-1.jpg" class="img-responsive" alt="...">
    	    	</div> <!-- / .about__img -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>

    <!-- section stats -->
    <section class="section__stats">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-6 col-md-3">
    	    	<div class="stat__item">
    	    		<div class="stats_item__icon">
    	    			<i class="ion-person-stalker" aria-hidden="true"></i>
    	    		</div>
    	    		<div class="stats_item__nbr" data-from="0" data-to="28" data-speed="1000" data-refresh-interval="1">
    	    			0
    	    		</div>
    	    		<div class="stats_item__text">
    	    			Best teachers
    	    		</div>
    	    	</div> <!-- / .stat__item -->
    	    </div>
					<div class="col-sm-6 col-md-3">
    	    	<div class="stat__item">
    	    		<div class="stats_item__icon">
    	    			<i class="ion-ios-bookmarks" aria-hidden="true"></i>
    	    		</div>
    	    		<div class="stats_item__nbr" data-from="0" data-to="35" data-speed="1000" data-refresh-interval="1">
    	    			0
    	    		</div>
    	    		<div class="stats_item__text">
    	    			Online programs
    	    		</div>
    	    	</div> <!-- / .stat__item -->
    	    </div>
    	    <div class="col-sm-6 col-md-3">
    	    	<div class="stat__item">
    	    		<div class="stats_item__icon">
    	    			<i class="ion-university" aria-hidden="true"></i>
    	    		</div>
    	    		<div class="stats_item__nbr" data-from="0" data-to="267" data-speed="4000" data-refresh-interval="20">
    	    			0
    	    		</div>
    	    		<div class="stats_item__text">
    	    			Happy students
    	    		</div>
    	    	</div> <!-- / .stat__item -->
    	    </div>
    	    <div class="col-sm-6 col-md-3">
    	    	<div class="stat__item">
    	    		<div class="stats_item__icon">
    	    			<i class="ion-ribbon-b" aria-hidden="true"></i>
    	    		</div>
    	    		<div class="stats_item__nbr" data-from="0" data-to="12" data-speed="1000" data-refresh-interval="1">
    	    			0
    	    		</div>
    	    		<div class="stats_item__text">
    	    			Years Experience
    	    		</div>
    	    	</div> <!-- / .stat__item -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section>
		
		<!-- section about -->
		<section class="section__about">
			<div class="container">
			  <div class="row row_centered">
    	    <div class="col-sm-6">
    	  		<img src="assets/img/about_img-2.png" class="img-responsive" alt="...">
    	    </div>
    	    <div class="col-sm-6">
    	    	<div class="about__wrapper">
    	    		<div class="about__title">
	    	    		<i class="ion-play"></i> Study with us
	    	    	</div>
	    	    	<div class="about__text">
	    	    		Lorem ipsum dolor siamet consectetur adipisicing elit. Necessitatibus beatae dolore eligendi reiciendis voluptates earum eiusinc iduntest remamet.
	    	    	</div>
	    	    	<ul class="about__list">
	    	    		<li><i class="ion-checkmark-round"></i> Lorem ipsum</li>
	    	    		<li><i class="ion-checkmark-round"></i> Repudian rerum</li>
	    	    		<li><i class="ion-checkmark-round"></i> Magnam consectet</li>
	    	    		<li><i class="ion-checkmark-round"></i> Impedit remcon</li>
	    	    		<li><i class="ion-checkmark-round"></i> Magnam consectet</li>
	    	    		<li><i class="ion-checkmark-round"></i> Impedit remcon</li>
	    	    	</ul> <!-- / .about__list -->
    	    	</div> <!-- / .about__wrapper -->
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
		<script src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
		<script src="assets/plugins/countTo/jquery.countTo.js"></script>
		<script src="assets/plugins/smothscroll/smoothscroll.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->

  </body>
<!-- Copied from https://ygamin.bitbucket.io/CODECRUSH/1.0.2/about.php by Cyotek WebCopy 1.4.0.477, 06 July 2018, 10:59:48 AM -->
</html>