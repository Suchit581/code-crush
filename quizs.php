<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
 ?>
  <body id="events__page">

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
                Quiz
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li class="active">Quiz</li>
							</ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>
		
		<!-- section categories -->

    <section class="section__events">
			<div class="container">
				<div class="row">
    	    <div class="col-sm-12">
    	    	<div class="section_title__body">
    	    		<div class="section__subtitle dark__subtitle">
	    					Watch our <span>meetings</span>
	    				</div>
	    				<h2 class="section__title dark__title">
	    					Recent Quizs
	    				</h2>
	    				<p class="section_title__desc">
	    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
	    				</p> <!-- / .about__desc -->	
    	    	</div> <!-- / .section_title__body  -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
    	    <div class="col-sm-12">
    	  		<ul class="timeline">
			        <li>
			          <div class="timeline-badge accent"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language C</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/events_img.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
			        <li class="timeline-inverted">
			          <div class="timeline-badge primary"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language C++</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/courses_img.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
			        <li>
			          <div class="timeline-badge info"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language Python</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/blog_img-2.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
			        <li class="timeline-inverted">
			          <div class="timeline-badge primary"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language vb</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/blog-item_img-1.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
			        <li>
			          <div class="timeline-badge accent"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language c#</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/courses_img.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
			        <li class="timeline-inverted">
			          <div class="timeline-badge info"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language Java</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/blog-item_img-1.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
			        <li>
			          <div class="timeline-badge accent"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language html</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/courses_img.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
			        <li class="timeline-inverted">
			          <div class="timeline-badge primary"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language css</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/blog-item_img-1.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
			        <li>
			          <div class="timeline-badge info"><i class="ion-ios-bell-outline"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <a href="quiz-single.php" class="timeline-title">Quiz of language javascript</a>
			            </div>
			            <div class="timeline-info">
			            	<div class="timeline-info__item">
			            		<i class="ion-android-pin"></i>
			            		<p>New York, USA</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-calendar"></i>
			            		<p>October 9, 2017</p>
			            	</div>
			            	<div class="timeline-info__item">
			            		<i class="ion-android-time"></i>
			            		<p>8:00 am - 5:00 pm</p>
			            	</div>
			            </div> <!-- .timeline-info -->
			            <div class="timeline-body">
			              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adnatus dolor aliquam sequiest.</p>
			            </div>
			            <div class="timeline-img">
			            	<img src="assets/img/courses_img.jpg" class="img-responsive" alt="...">
			            </div>
			            <div class="timeline-price">
			            	<h3>Ticket Price: <span>Free</span></h3>
			            </div>
			            <div class="timeline-link">
	                  	<?php if(!isset($_SESSION['u_id'])):?>
	                  		<a href="#signupModal" data-toggle="modal">Sign up<i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  		<a href="#signinModal" data-toggle="modal">/ &nbsp; &nbsp;Sign in <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  	<?php else:?>
	                  		<a href="quiz-single.php">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
	                  <?php endif; ?>
	                </div>
	                <ul class="timeline-share">
	                	<li><a href=""><i class="ion-social-twitter"></i></a></li>
			              <li><a href=""><i class="ion-social-facebook"></i></a></li>
			              <li><a href=""><i class="ion-social-googleplus"></i></a></li>
	                </ul>
			          </div>
			        </li>
				    </ul> <!-- .timeline -->
    	    </div>
    	  </div> <!-- / .row -->
			</div> <!-- / .container -->
		</section>
<?php include "footer.php"; ?>
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="assets/plugins/smothscroll/smoothscroll.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->

  </body>
<!-- Copied from https://ygamin.bitbucket.io/CODECRUSH/1.0.2/events.php by Cyotek WebCopy 1.4.0.477, 06 July 2018, 10:59:48 AM -->
</html>