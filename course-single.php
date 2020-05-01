<?php 
	session_start();
	ob_start();
	// $_SESSION['counter'] = 1;
	include "include/dbh.inc.php";
	if (isset($_GET['languages'])) {
		$language_id = $_GET['languages'];
		$sql_language_id = "select * from language where language_id = '$language_id' ";
		$result = mysqli_query($conn,$sql_language_id);
		$row =  mysqli_fetch_row($result);
		$language_id_get = $row[0];
		$language_name_get = $row[1];
	}
	else{
		header("Location:courses.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<?php 
	include_once 'head.php';
?>
  <body id="course-single__page">
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
                Course
              </h1>

              <!-- Breadcrumbs -->
                <ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Singe course</li>
				</ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>
		
		<!-- section course-single -->
    <section class="section__course-single">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-7 col-md-8">
    	    	<div class="course__body">
    	    		<div class="course__title">
    	    			<?php echo $language_name_get; ?> 2018: New practices
    	    		</div>
    	    		<div class="course__posttime">
    	    			Posted on August 08, 2017
    	    		</div>
    	    		<div class="course__img">
    	    			<img src="assets/img/blog-item_img-2.jpg" class="img-responsive" alt="...">
    	    		</div>
    	    		<div class="course__info">
	            	<div class="course-info__item">
	            		<div class="course-info__icon">
	            			<i class="ion-android-star"></i>
	            		</div>
	            		<div class="course-info__text">
	            			<span>Rating</span>
	            			<p>4.6 (38 Ratings)</p>	
	            		</div>
	            	</div>
	            	<div class="course-info__item">
	            		<div class="course-info__icon">
	            			<i class="ion-images"></i>
	            		</div>
	            		<div class="course-info__text">
	            			<span>Category</span>
	            			<p>Web / Technology</p>	
	            		</div>
	            	</div>
	            	<div class="course-info__item">
	            		<div class="course-info__icon">
	            			<i class="ion-android-time"></i>
	            		</div>
	            		<div class="course-info__text">
	            			<span>Duration</span>
	            			<p>36 Hours</p>	
	            		</div>
	            	</div>
	            </div> <!-- .course__info -->
    	    		<h3 class="course_desc__title">Course description</h3>
    	    		<p class="course__desc">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
    	    		<p class="course__desc">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
    	    		<!-- <h3 class="course_desc__title">Target audience</h3>
    	    		<ul class="course_audience__list">
    	    			<li><i class="ion-checkmark-round"></i> Separated they live in Bookmarksgrove right at the coast.</li>
    	    			<li><i class="ion-checkmark-round"></i> Even the all-powerful Pointing has no control about the blind texts.</li>
    	    			<li><i class="ion-checkmark-round"></i> Lorem Ipsum decided to leave for the far World of Grammar.</li>
    	    			<li><i class="ion-checkmark-round"></i> The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</li>
    	    			<li><i class="ion-checkmark-round"></i> A small river named Duden flows by their place and supplies.</li>
    	    			<li><i class="ion-checkmark-round"></i> Even the all-powerful Pointing has no control about the blind texts.</li>
    	    		</ul> -->
    	    		<h3 class="course_desc__title">Course requirements</h3>
    	    		<ul class="course_requirements__list">
    	    			<li><i class="ion-android-arrow-forward"></i> Separated they live in Bookmarksgrove right at the coast.</li>
    	    			<li><i class="ion-android-arrow-forward"></i> Even the all-powerful Pointing has no control about the blind texts.</li>
    	    			<li><i class="ion-android-arrow-forward"></i> Lorem Ipsum decided to leave for the far World of Grammar.</li>
    	    			<li><i class="ion-android-arrow-forward"></i> The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</li>
    	    		</ul>
    	    		<p class="course__desc">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life of blind text.</p>
    	    		<div class="course__teachers">
		            
	            </div> <!-- .event__speakers -->

	            <ul class="nav nav-tabs">
						    <li class="active">
						    	<a data-toggle="tab" href="#curriculum">Courses</a>
						    </li>
						    <!-- <li><a data-toggle="tab" href="#reviews">Reviews</a></li> -->
						  </ul>

						  <div class="tab-content">
						    <div id="curriculum" class="tab-pane fade in active">
						    	<p class="subheading">Course <span>plan</span></p>
						    	<div class="panel-group">
							    <?php
							    ob_start();
								if (isset($_SESSION['counter']) and $_SESSION['counter'] > 0 and $_SESSION['counter'] <= 5 ) {
									$counter = $_SESSION['counter'];
									$sql_video = "select * from video_title where language_id = $language_id_get and video_title_id = $counter";
									$result = mysqli_query($conn,$sql_video);
									$i=1;
									while ($row_video = mysqli_fetch_array($result)) {	
									?>
									    <div class="panel panel-primary">
									      <div class="panel-heading">
									        <h4 class="panel-title">
									          <?php echo $row_video['video_title'];?>
									        </h4>
									      </div>
									      <?php
									      	$id = $row_video['video_title_id'];
									      	$sql_video_path = "select * from video_path where language_id = $language_id_get && video_title_id = $id";
											$result_path = mysqli_query($conn,$sql_video_path);
											while ($row_video_path = mysqli_fetch_array($result_path)) {	
									      ?>
									      <div id="<?php echo 'data'.$i ?>" class="">
									        <div class="panel-body">
									        	<div class="player">
									        		<video class="player__video viewer" src="video/course/<?php echo $row_video_path['video_path'] ; ?>"></video>
											    	<div class="player__controls">
											    		<div class="progress">
											    			<div class="progress__filled"></div>
											    		</div>
											    		<div class="form-group col-md-12">
														   <div class="col-md-1">
														   		<button class="player__button toggle form-control btn btn-block" title="Toggle Play" >►</button>
														   </div>
														   <div class="col-md-4">
														   		<input type="range" name="volume" class="player__slider " min="0" max="1" step="0.05" value="1">
														   </div>
														   <div class="col-md-4">
														   		<input type="range" name="playbackRate" class="player__slider " min="0.5" max="2" step="0.1" value="1">
														   </div>
														   <div class="col-md-1">
														   		<button data-skip="-10" class="player__button form-control btn btn-block">« 10s</button>
														   </div>
														   <div class="col-md-1">
														   		<button data-skip="25" class="player__button form-control btn btn-block">25s »</button>
														   </div>
														   <div class="col-md-1">
														   		<button id="fullscreenbtn" class="player__button form-control btn btn-block">[ &nbsp;]</button>
														   </div>
												       </div>
											    	</div>
											   </div>
									        </div>
									        <?php if (isset($_SESSION['u_id'])): ?>
										        <div class="panel-footer">
										        	<div class="row">
										        		<div class="col-md-12">
												        	<form class="form-group" method="post" action="<?php $_PHP_SELF ?>">
												        		<button name="next" type="submit" class="pull-right btn btn-primary">NEXT &gt;&gt;</button>
												        		<button name="back" type="submit" class="pull-left btn btn-accent">&lt;&lt; BACK</button>
												        	</form>
										        		</div>
										        	</div>
										        </div>
										        <?php else: ?>
										        	<div class="panel-footer">
										        		<p>After Login/Regeister you are eligble to take the course further</p>
										        	</div>
									        <?php endif ?>
									      </div>
									  <?php $i++;
									} ?>
									    </div>
									<?php
									}
									if (isset($_POST['next'])) {
										// INSERT INTO `video_log`( `video_user_id`, `video_counter_value`) VALUES ()
										$id = $_SESSION['u_id'];
										$counters = $_SESSION['counter'];
										$sql_video_counter = "INSERT INTO `video_log`( `video_user_id`, `video_counter_value`) VALUES ($id,$counters)";
										mysqli_query($conn,$sql_video_counter);
										$_SESSION['counter'] = $_SESSION['counter'] + 1;
									} 
									elseif(isset($_POST['back'])) {
										$id = $_SESSION['u_id'];
										$counters = $_SESSION['counter'];
										$sql_video_counter = "INSERT INTO `video_log`( `video_user_id`, `video_counter_value`) VALUES ($id,$counters)";
										mysqli_query($conn,$sql_video_counter);
										$_SESSION['counter'] = $_SESSION['counter'] - 1;
									}
								} 
								else {
									$_SESSION['counter'] = 1;
									header("location:course-single.php?languages=$language_id_get");
								}

								?>

							  </div>
						    </div>
						    <div id="reviews" class="tab-pane fade">
						      <p class="subheading"><span>4</span> Reviews</p>
						      <div class="comments">
			              <ul class="comments__list">
			                <li class="comment">
			                	<div class="comment__avatar">
													<img src="assets/img/instagram_img-6.jpg" class="img-responsive" alt="...">
												</div>
			                  <div class="comment__content">
			                  	<div class="comment__user">
				                    Robert Jones
				                  </div>
				                  <div class="comment__date">
				                    August 8, 2017 at 1:15 pm
				                  </div>
				                  <div class="comment__message">
				                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dicta alias enim quasi sapiente saepe, repellat soluta commodi delectus doloribus, veniam odit hic ratione quae modi earum dolor dignissimos quas?
				                  </div>
				                  <div class="comment__reply">
				                    <a href="">Reply</a>
				                  </div>
			                  </div>
			                </li> <!-- .comment -->
			                <li class="comment">
			                	<div class="comment__avatar">
									<img src="assets/img/instagram_img-2.jpg" class="img-responsive" alt="...">
								</div>
								<div class="comment__content">
									<div class="comment__user">
								    Jane Doe
								  </div>
								  <div class="comment__date">
								    August 12, 2017 at 3:15 pm
								  </div>
								  <div class="comment__message">
								    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iusto sapiente magnam, dolorum laudantium eius corporis odit deserunt aliquid architecto ut veniam cumque repudiandae commodi impedit tempore vitae modi voluptates amet aliquam. Quisquam, temporibus, tempore! Animi veritatis laudantium ratione blanditiis!
								  </div>
								  <div class="comment__reply">
								    <a href="">Reply</a>
								  </div>
								</div>
			                </li> <!-- .comment -->
			                <li class="comment">
			                	<div class="comment__avatar">
													<img src="assets/img/instagram_img-1.jpg" class="img-responsive" alt="...">
												</div>
			                  <div class="comment__content">
			                  	<div class="comment__user">
				                    Jessica Border
				                  </div>
				                  <div class="comment__date">
				                    October 8, 2017 at 11:42 am
				                  </div>
				                  <div class="comment__message">
				                     Sint nisi quod culpa animi sit a voluptas quia, dolor qui eius esse itaque velit quasi quibusdam, modi nesciunt facere harum! Error adipisci nesciunt praesentium! Dolorum magni dolorem adipisci vitae, culpa praesentium inventore voluptates corporis quia ipsum a maxime fugiat.
				                  </div>
				                  <div class="comment__reply">
				                    <a href="">Reply</a>
				                  </div>
			                  </div>
			                </li> <!-- .comment -->
			                <li class="comment">
			                	<div class="comment__avatar">
													<img src="assets/img/instagram_img-6.jpg" class="img-responsive" alt="...">
												</div>
			                  <div class="comment__content">
			                  	<div class="comment__user">
				                    Robert Jones
				                  </div>
				                  <div class="comment__date">
				                    October 14, 2017 at 11:10 am
				                  </div>
				                  <div class="comment__message">
				                    placeat eaque quaerat distinctio voluptatibus modi. Asperiores fugiat deleniti praesentium enim incidunt quaerat cupiditate repellendus ad reprehenderit neque, qui, eveniet veniam quis voluptate ab architecto quam cum nihil, accusamus culp.
				                  </div>
				                  <div class="comment__reply">
				                    <a href="">Reply</a>
				                  </div>
			                  </div>
			                </li> <!-- .comment -->
			              </ul> <!-- .comments__list -->
			            </div> <!-- .comments -->
									<p class="subheading">
										Leave a <span>review</span>
									</p>
									<form class="comments__form">
			                
			              <div class="form-group">
			                <label for="name" class="sr-only">Name (Required)</label>
			                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Full Name">
			              </div>

			              <div class="form-group">
			                <label for="email" class="sr-only">Email address (Required)</label>
			                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your E-mail">
			              </div>

			              <div class="form-group">
			                <label for="message" class="sr-only">Message (Required)</label>
			                <textarea name="message" class="form-control" rows="6" id="message" placeholder="Enter Your Message"></textarea>
			                <span class="help-block"></span>
			              </div>
			              
			              <button type="submit" class="btn btn-accent">
			                Submit review
			              </button>
			            </form>
						    </div>
						    <div id="menu2" class="tab-pane fade">
						      <h3>Menu 2</h3>
						      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						    </div>
						    <div id="menu3" class="tab-pane fade">
						      <h3>Menu 3</h3>
						      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						    </div>
						  </div>
    	    	</div> <!-- .course__body -->
    	    </div>
    	    <div class="col-sm-5 col-md-4">
  	    		<div class="course__sidebar">

    	    		<div class="sidebar__item">
    	    			<div class="course__price">
    	    				Total Price: <span>FREE</span>
    	    			</div>
    	    			<ul class="course_features__list">
    	    				<li><i class="ion-ios-game-controller-b"></i> Skill level: <span>Beginner</span></li>
    	    				<li><i class="ion-volume-high"></i> Language: <span><?php 	echo $language_name_get ?></span></li>
    	    				<li><i class="ion-ribbon-b"></i> Certificate: <span>Yes</span></li>
    	    				<!-- <li><i class="ion-ios-people"></i> Max students: <span>60</span></li> -->
    	    				<li><i class="ion-ios-bookmarks"></i> Lectures: <span>5</span></li>
    	    			</ul>
    	    		</div> <!-- .sidebar__item -->

  	    		</div> <!-- .blog__sidebar -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section__course-single -->

<?php include "footer.php"; ?>
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="assets/plugins/smothscroll/smoothscroll.js"></script>
    <script src="assets/plugins/aos-master/dist/aos.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <script type="text/javascript" src="video/script.js"></script>
    <!-- endbuild -->


  </body>
</html>