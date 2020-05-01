<!DOCTYPE html>
<html lang="en">
  <?php 
  session_start();
    include_once 'head.php';
 ?>
  <body id="courses__page">

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
                Courses
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li class="active">Courses</li>
							</ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>
		
		<!-- section courses -->
    <section class="section__courses">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-1.jpg" class="img-responsive" alt="...">
    					</div>
    					<div class="course-item__info">
    						<div class="info__students">
    							<!-- <i class="ion-person-stalker" aria-hidden="true"></i> 53/120 -->
    						</div>
    						<div class="info__price">
    							<i class="ion-ios-pricetags" aria-hidden="true"></i> Free
    						</div>
              </div>
    					<div class="course-item__content">
    						<span class="course-item__branch">Programming</span>
    						<h3>
    							<a href="course-single.php?languages=1">programming in c </a>
    						</h3>
    						<p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
    						<a class="btn btn-primary" href="course-single.php?languages=1">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
            </div>
            <div class="col-sm-4">
                <div class="course__item">
                        <div class="course-item__img">
                            <img src="assets/img/courses_img-2.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <!-- <i class="ion-person-stalker" aria-hidden="true"></i> 60/100 -->
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> Free
                            </div>
                        </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Programming</span>
                            <h3>
                                <a href="course-single.php?languages=2">Programming in c++</a>
                            </h3>
                            <p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
                            <a class="btn btn-primary" href="course-single.php?languages=2">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
            </div>
            <div class="col-sm-4">
                <div class="course__item">
                        <div class="course-item__img">
                            <img src="assets/img/courses_img-3.jpg" class="img-responsive" alt="...">
                        </div><div class="course-item__info">
                            <div class="info__students">
                                <!-- <i class="ion-person-stalker" aria-hidden="true"></i> 100/120 -->
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> Free
                            </div>
              </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Programming</span>
                            <h3>
                                <a href="course-single.php?languages=3">Programming in Python</a>
                            </h3>
                            <p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
                            <a class="btn btn-primary" href="course-single.php?languages=3">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-sm-4">
                <div class="course__item">
                        <div class="course-item__img">
                            <img src="assets/img/courses_img-4.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <!-- <i class="ion-person-stalker" aria-hidden="true"></i> 16/80 -->
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> Free
                            </div>
              </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Programming</span>
                            <h3>
                                <a href="course-single.php?languages=4">Programming in vb</a>
                            </h3>
                            <p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
                            <a class="btn btn-primary" href="course-single.php?languages=4">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-5.jpg" class="img-responsive" alt="...">
    					</div>
    					<div class="course-item__info">
    						<div class="info__students">
    							<!-- <i class="ion-person-stalker" aria-hidden="true"></i> 150/300 -->
    						</div>
    						<div class="info__price">
    							<i class="ion-ios-pricetags" aria-hidden="true"></i> Free
    						</div>
              </div>
    					<div class="course-item__content">
    						<span class="course-item__branch">Programming</span>
    						<h3>
    							<a href="course-single.php?languages=5">Programming in c#</a>
    						</h3>
    						<p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
    						<a class="btn btn-primary" href="course-single.php?languages=5">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-6.jpg" class="img-responsive" alt="...">
    					</div>
    					<div class="course-item__info">
    						<div class="info__students">
    							<!-- <i class="ion-person-stalker" aria-hidden="true"></i> 68/128 -->
    						</div>
    						<div class="info__price">
    							<i class="ion-ios-pricetags" aria-hidden="true"></i> Free
    						</div>
              </div>
    					<div class="course-item__content">
    						<span class="course-item__branch">Programming</span>
    						<h3>
    							<a href="course-single.php?languages=6">Programming in Java</a>
    						</h3>
    						<p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
    						<a class="btn btn-primary" href="course-single.php?languages=6">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	  </div> <!-- / .row -->
          <div class="row">
            <div class="col-sm-4">
                <div class="course__item">
                        <div class="course-item__img">
                            <img src="assets/img/courses_img-7.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <!-- <i class="ion-person-stalker" aria-hidden="true"></i> 16/80 -->
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> Free
                            </div>
              </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Web-Development</span>
                            <h3>
                                <a href="course-single.php?languages=7">Html</a>
                            </h3>
                            <p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
                            <a class="btn btn-primary" href="course-single.php?languages=7">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
            </div>
            <div class="col-sm-4">
                <div class="course__item">
                        <div class="course-item__img">
                            <img src="assets/img/courses_img-8.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <!-- <i class="ion-person-stalker" aria-hidden="true"></i> 150/300 -->
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> Free
                            </div>
              </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Web-Development</span>
                            <h3>
                                <a href="course-single.php?languages=8">css</a>
                            </h3>
                            <p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
                            <a class="btn btn-primary" href="course-single.php?languages=8">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
            </div>
            <div class="col-sm-4">
                <div class="course__item">
                        <div class="course-item__img">
                            <img src="assets/img/courses_img-9.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <i class="ion-person-stalker" aria-hidden="true"></i> 68/128
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> Free
                            </div>
              </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Web-Development</span>
                            <h3>
                                <a href="course-single.php?languages=9">Javascript</a>
                            </h3>
                            <p class="course-item__desc">This course is provide the beginner and intermidiate lavel conent</p>
                            <a class="btn btn-primary" href="course-single.php?languages=9">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
            </div>
          </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section__courses -->

<?php include "footer.php"; ?>
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- JS Plugins -->
    <script src="assets/plugins/aos-master/dist/aos.js"></script>
    <script src="assets/plugins/smothscroll/smoothscroll.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->

  </body>
<!-- Copied from https://ygamin.bitbucket.io/CODECRUSH/1.0.2/courses.php by Cyotek WebCopy 1.4.0.477, 06 July 2018, 10:59:48 AM -->
</html>