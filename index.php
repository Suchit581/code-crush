<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
 ?>
<body id="index__page">

	<!-- Back to top button
    ================================================== -->
    <a id="back-to-top" href="#section__home" class="btn btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
	  	<i class="ion-android-arrow-up"></i>
	 </a>

	  <!-- PRELOADER
    ================================================== -->
    <div id="loader-wrapper">
		  <div id="loader"></div>
		</div>

    <!-- Navbar
    ================================================== -->
    <?php include 'nav-link.php'; ?>

    <!-- CONTENT
      ================================================== -->
	<?php include 'sign-up-in-modal.php'; ?>

   	<section class="section__home" id="section__home">

      <div class="container home__body">
        <div class="row">
          <div class="col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-3">
            <div class="home__content">

              <!-- Title -->
              <h3 class="home__title" data-aos="zoom-in" data-aos-delay="1800">
                I have crush on code  
              </h3>

              <!-- Heading -->
              <h1 class="home__heading" data-aos="zoom-in" data-aos-delay="1800">
              	<div class="typed"></div>
              </h1>

              <!-- Info -->
              <p class="home__info" data-aos="fade-up" data-aos-delay="2800">
                Code crush is website that provide the compilers, courses, quiz for the users
              </p>

              <!-- Button -->
              <div class="home__btn" data-aos="fade-up" data-aos-delay="2800">
                <a href="#section__about" class="btn btn-primary">
                  Learn more
                </a>
              </div>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <div class="container home__footer">
        <div class="row">
          <div class="hidden-xs col-sm-6">
            <div class="home__address">
              <i class="ion-android-pin"></i> gujarat,india
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <!-- Social icons -->
            <ul class="home__social">
              <li><a href="#"><i class="ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="ion-social-youtube"></i></a></li>
            </ul>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
      
      <!-- Background video -->
      <div class="home-video__bg">
        <video autoplay="" muted="" loop="" poster="assets/img/home_bg.jpg">
          <source src="assets/video/video_bg.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </section> <!-- .section__home -->

    <!-- section about -->
    <section class="section__about" id="section__about">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="about__body">
    	    		<div class="about__icon">
	    					<i class="ion-ios-bookmarks-outline"></i>
	    				</div>
	    				<div class="section__subtitle dark__subtitle">
	    					Short story about <span>CODECRUSH</span>
	    				</div>
	    				<h2 class="section__title dark__title">
	    					About us
	    				</h2>
	    				<p class="about__desc">
	    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas consequuntur debitis ducimus sequi laudantium molestias necessitatibus hic similique. Iusto fuga doloremque nam culpa, animi odio, excepturi itaque dignissimos eaque est voluptas, dolore voluptate tempore quod, magni provident nisi quisquam quasi quas odit quia repellendus rerum accusamus! Laudantium, cumque distinctio repellendus aspernatur facilis, obcaecati natus, accusantium a recusandae soluta nobis ad quo dignissimos. Ipsam, earum, ea. Asperiores aspernatur beatae sit odit, excepturi inventore saepe atque officia, animi doloremque, adipisci ipsa deleniti.
	    				</p> <!-- / .about__desc -->
	    				<div class="about__quote">
	    					<h2 class="about_quote__text"><i class="ion-quote"></i> A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring. <span class="quote_end"><i class="ion-quote"></i></span></h2>
	    					<div class="author__signature">
	    						<img src="assets/img/author.png" alt="...">	
	    					</div>
	    					<p class="about_quote__author">
	    						<span>jignesh Sapariya</span> / Professor
	    					</p>    					
	    				</div> <!-- / .about__quote -->
	    				<a href="about.php" class="btn btn-accent">More About CODECRUSH</a>
    	    	</div> <!-- / .about__body -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- .section__about -->

    <!-- section courses -->
    <section class="section__courses">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
						<div class="section__subtitle light__subtitle">
    					Explore our best educational <span>programs</span>
    				</div>
    				<h2 class="section__title light__title">
    					Top courses
    				</h2>
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
  	  		<div class="col-sm-6 col-md-3">
						<div class="courses_item__wrapper">
							<div class="courses__item">
								<div class="card__top">
									<p class="card__nbr">01.</p>
									<div class="courses__icon courses_icon-1">
										<i class="ion-ios-timer-outline"></i>
									</div>
									<div class="courses__title">
										c
									</div>
									<p class="courses__desc">
										This course is provide the beginner and intermidiate level content
									</p>
								</div> <!-- / .card__top -->
								<div class="card__back">
									<div class="card_back__wrapper">
										<div class="courses__title">
											c
										</div>
										<ul class="course__info">
											<!-- <li><i class="ion-calendar course-calendar" aria-hidden="true"></i> 10 Dec - 20 Feb</li> -->
											<li>Rating: 
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
											<li>Price: <span>Free</span></li>
											<!-- <li>Teacher: <span>J. Doe</span></li> -->
										</ul> <!-- / .course__info -->
										<a href="courses.php" class="btn btn-primary text-center">Course page</a>
									</div> <!-- / .card_back__wrapper -->
								</div> <!-- / .card__back -->
							</div> <!-- / .courses__item -->
						</div> <!-- / .courses_item__wrapper -->
  	    	</div>
  	    	<div class="col-sm-6 col-md-3">
						<div class="courses_item__wrapper">
							<div class="courses__item">
								<div class="card__top">
									<p class="card__nbr">02.</p>
									<div class="courses__icon courses_icon-2">
										<i class="ion-ios-mic-outline"></i>
									</div>
									<div class="courses__title">
										c++
									</div>
									<p class="courses__desc">
										This course is provide the beginner and intermidiate lavel conent
									</p>
								</div> <!-- / .card__top -->
								<div class="card__back">
									<div class="card_back__wrapper" data-aos="zoom-in-up">
										<div class="courses__title">
											c++
										</div>
										<ul class="course__info">
											<!-- <li><i class="ion-calendar course-calendar" aria-hidden="true"></i> 10 Dec - 20 Feb</li> -->
											<li>Rating: 
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
											<li>Price: <span>Free</span></li>
											<!-- <li>Teacher: <span>J. Doe</span></li> -->
										</ul> <!-- / .course__info -->
										<a href="courses.php" class="btn btn-primary text-center">Course page</a>
									</div> <!-- / .card_back__wrapper -->
								</div> <!-- / .card__back -->
							</div> <!-- / .courses__item -->
						</div> <!-- / .courses_item__wrapper -->
  	    	</div>
  	    	<div class="col-sm-6 col-md-3">
						<div class="courses_item__wrapper">
							<div class="courses__item">
								<div class="card__top">
									<p class="card__nbr">03.</p>
									<div class="courses__icon courses_icon-3">
										<i class="ion-ios-people-outline"></i>
									</div>
									<div class="courses__title">
										CSS
									</div>
									<p class="courses__desc">
										This course is provide the beginner and intermidiate lavel conent
									</p>
								</div> <!-- / .card__top -->
								<div class="card__back">
									<div class="card_back__wrapper" data-aos="zoom-in-up">
										<div class="courses__title">
											CSS
										</div>
										<ul class="course__info">
											<!-- <li><i class="ion-calendar course-calendar" aria-hidden="true"></i> 10 Dec - 20 Feb</li> -->
											<li>Rating: 
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
											<li>Price: <span>Free</span></li>
											<!-- <li>Teacher: <span>J. Doe</span></li> -->
										</ul> <!-- / .course__info -->
										<a href="courses.php" class="btn btn-primary text-center">Course page</a>
									</div> <!-- / .card_back__wrapper -->
								</div> <!-- / .card__back -->
							</div> <!-- / .courses__item -->
						</div> <!-- / .courses_item__wrapper -->
  	    	</div>
  	    	<div class="col-sm-6 col-md-3">
						<div class="courses_item__wrapper">
							<div class="courses__item">
								<div class="card__top">
									<p class="card__nbr">04.</p>
									<div class="courses__icon courses_icon-4">
										<i class="ion-ios-camera-outline"></i>
									</div>
									<div class="courses__title">
										Html
									</div>
									<p class="courses__desc">
										This course is provide the beginner and intermidiate lavel conent
									</p>
								</div> <!-- / .card__top -->
								<div class="card__back">
									<div class="card_back__wrapper">
										<div class="courses__title">
											Html
										</div>
										<ul class="course__info">
											<!-- <li><i class="ion-calendar course-calendar" aria-hidden="true"></i> 10 Dec - 20 Feb</li> -->
											<li>Rating: 
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
												<i class="ion-android-star rating-star" aria-hidden="true"></i>
											<li>Price: <span>Free</span></li>
											<!-- <li>Teacher: <span>J. Doe</span></li> -->
										</ul> <!-- / .course__info -->
										<a href="courses.php" class="btn btn-primary text-center">Course page</a>
									</div> <!-- / .card_back__wrapper -->
								</div> <!-- / .card__back -->
							</div> <!-- / .courses__item -->
						</div> <!-- / .courses_item__wrapper -->
  	    	</div>
  	    	<div class="col-sm-12">
  	    		<a href="courses.php" class="btn btn-primary">All courses</a>
  	    	</div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- .section__courses -->

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
    </section> <!-- .section__footer -->
		
		
		
		<!-- section features -->
    <section class="section__features">
    	<div class="left__box">
    		<h2 class="features__title">
    			<i class="ion-university"></i> Learn
    		</h2>
    		<p class="features__desc">To help you learn the skills you need to achieve your full potential.codecrush is an educational web site for learning web technologies online.such kind of tutorials and references relating to HTML, CSS, JavaScript, C, C++, Python, VB, C#, JAVA and so on.references relating to HTML, CSS, JavaScript, C, C++, Python, VB, C#, JAVA and so on. and we also provide the course with certificate 
        </p>
    		<p class="features__desc">In addition to helping individual learners achieve personal and professional goals, we offer flexible to learner or the beginner</p>
    		<a href="courses.php" class="btn btn-accent">Plan a course</a>
    	</div>
    	<div class="right__box">
    		<h2 class="features__title">
    			Work <i class="ion-ribbon-b"></i>
    		</h2>
    		<p class="features__desc">Try your hand at one of our many practice problems and submit your solution in a language of your choice. Our programming contest judge accepts solutions in over 5+ programming languages. Preparing for coding contests were never this much fun! Receive points, and move up through the CodeCrush ranks. </p>
    		<p class="features__desc">CodeCrush is an online compiler and debugger tool for C/C++ and other languages. It is world's first online IDE which gives debugging facility with embedded CodeCrush compiler.</p>
    		<a href="compiler-object-oriented.php" class="btn btn-primary">Plan a practice</a>
    	</div>
    </section> <!-- .section__footer -->

    <!-- section process -->
    <section class="section__process">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
						<div class="section_title__body">
    	    		<div class="section__subtitle dark__subtitle">
	    					Easy steps to <span>learning</span>
	    				</div>
	    				<h2 class="section__title dark__title">
	    					Study process
	    				</h2>
	    				<p class="section_title__desc">
	    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
	    				</p> <!-- / .about__desc -->	
    	    	</div> <!-- / .section_title__body  -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
    	    <div class="col-sm-7">  	    	
    	  		<div class="process__item process__item-1">
    	  			<div class="row">
    	  			  <div class="col-sm-3">
		    	  			<div class="process_item__icon">
		    	  				<i class="ion-log-in"></i>
		    	  			</div>
    	  			  </div>
    	  			  <div class="col-sm-9">
    	  			  	<div class="process_item__title" data-aos="zoom-in-up">
		    	  				Register in CODECRUSH<span>.</span>
		    	  			</div>
		    	  			<div class="process_item__desc">
		    	  				Rerum perspiciatis iste quidem, expedita dolorem commodi provident vitae doloremque enim odit nisi recusan.
		    	  			</div>
    	  			  </div>
    	  			</div> <!-- / .row -->
    	  		</div> <!-- / .process__item -->
    	    </div>
    	    <div class="col-sm-5 hidden-xs">
    	    	<div class="process_item__arrow-1">
    	    		<i class="ion-ios-redo-outline"></i>
    	    	</div>
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
    	  	<div class="col-sm-6 hidden-xs">
    	    	<div class="process_item__arrow-2">
    	    		<i class="ion-ios-undo-outline"></i>
    	    	</div>
    	    </div>
    	    <div class="col-sm-6">  	    	
    	  		<div class="process__item process__item-2">
    	  			<div class="row">
    	  			  <div class="col-sm-3">
		    	  			<div class="process_item__icon">
		    	  				<i class="ion-ios-bookmarks-outline"></i>
		    	  			</div>
    	  			  </div>
    	  			  <div class="col-sm-9">
    	  			  	<div class="process_item__title" data-aos="zoom-in-up">
		    	  				Select language 
		    	  			</div>
		    	  			<div class="process_item__desc">
		    	  				Rerum perspiciatis iste quidem, expedita dolorem commodi provident vitae dolorem.
		    	  			</div>
    	  			  </div>
    	  			</div> <!-- / .row -->
    	  		</div> <!-- / .process__item -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
    	    <div class="col-sm-7">  	    	
    	  		<div class="process__item process__item-3">
    	  			<div class="row">
    	  			  <div class="col-sm-3">
		    	  			<div class="process_item__icon">
		    	  				<i class="ion-android-create"></i>
		    	  			</div>
    	  			  </div>
    	  			  <div class="col-sm-9">
    	  			  	<div class="process_item__title" data-aos="zoom-in-up">
		    	  				select course
		    	  			</div>
		    	  			<div class="process_item__desc">
		    	  				Rerum perspiciatis iste quidem, expedita dolorem commodi provident vitae doloremque enim odit nisi recusan.
		    	  			</div>
    	  			  </div>
    	  			</div> <!-- / .row -->
    	  		</div> <!-- / .process__item -->
    	    </div>
  			  <div class="col-sm-5 hidden-xs">
    	    	<div class="process_item__arrow-1">
    	    		<i class="ion-ios-redo-outline"></i>
    	    	</div>
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
    	    <div class="col-sm-6 hidden-xs">
    	    	<div class="process_item__arrow-2">
    	    		<!-- <i class="ion-ios-undo-outline"></i> -->
    	    	</div>
    	    </div>
    	    <div class="col-sm-6">  	    	
    	  		<div class="process__item process__item-4">
    	  			<div class="row">
    	  			  <div class="col-sm-3">
		    	  			<div class="process_item__icon">
		    	  				<i class="ion-happy-outline"></i>
		    	  			</div>
    	  			  </div>
    	  			  <div class="col-sm-9">
    	  			  	<div class="process_item__title" data-aos="zoom-in-up">
		    	  				Enjoy the compiler
		    	  			</div>
		    	  			<div class="process_item__desc">
		    	  				Rerum perspiciatis iste quidem, expedita dolorem commodi provident vitae dolorem.
		    	  			</div>
    	  			  </div>
    	  			</div> <!-- / .row -->
    	  		</div> <!-- / .process__item -->
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
		<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
		<script src="assets/plugins/aos-master/dist/aos.js"></script>
		<script src="assets/plugins/contact/contact.js"></script>
		<script src="assets/plugins/smothscroll/smoothscroll.js"></script>
		<script src="js/typed.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$(".typed").typed({
					strings: ["Code Crush","CODE CRUSH"],
					// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
					stringsElement: null,
					// typing speed
					typeSpeed: 100,
					// time before typing starts
					startDelay: 40,
					// backspacing speed
					backSpeed: 100,
					// time before backspacing
					backDelay: 40,
					// loop
					loop: true,
					// false = infinite
					// loopCount: 5,
					// show cursor
					showCursor: false,
					// character for cursor
					cursorChar: "|",
					// attribute to type (null == text)
					attr: null,
					// either html or text
					contentType: 'html',
					// call when done callback function
					callback: function() {},
					// starting callback function before each string
					preStringTyped: function() {},
					//callback for every typed string
					onStringTyped: function() {},
					// callback for reset
					resetCallback: function() {}
				});
			});
		</script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    

  </body>
</html>