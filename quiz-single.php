<?php session_start(); ?>
<?php 
if (!isset($_SESSION['u_id'])) {	
	if ($_SESSION['submit_ans'] == 1) {
		header("location:index.php?quiz=submit_once");
	}
		header("location:index.php?login=notlogin");
}


 ?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <script type="text/javascript">
 	function startTimer(duration, display) {
		    var timer = duration, minutes, seconds;
		    setInterval(function () {
		        minutes = parseInt(timer / 60, 10);
		        seconds = parseInt(timer % 60, 10);

		        minutes = minutes < 10 ? "0" + minutes : minutes;
		        seconds = seconds < 10 ? "0" + seconds : seconds;

		        display.text(minutes + ":" + seconds);

		        if (--timer < 0) {
		            timer = duration;
		            // console.log(duration);
					// document.getElementById("form1").submit();
					$("#form1").click();

		        }

		    }, 1000);
		}
    </script>	
  <body id="single-event__page" >

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
		
	<!-- section event -->
    <section class="section__event">
    	<div class="container">
    	  <div class="row">
    	  	<div class="col-md-12 col-sm-12"><!-- div actual quiz close -->
    	  		<div class="row">
    	  			<div class="col-md-1"></div>
	    	  		<div class="col-md-10">
	    	  			<div class="pull-left">
		    	  			<h1 style="text-transform: capitalize;"><?php echo $_SESSION['u_lang'];?> Quiz</h1>
	    	  			</div>
	    	  			<div class="pull-right"> 	
	    	  				<script type="text/javascript">
	    	  					$(function () {
								    var fiveMinutes = 5*60,
								        display = $('#time');
								    startTimer(fiveMinutes, display);
								});
	    	  				</script>
	    	  				<h1><div id="time"></div></h1>
	    	  			</div>
	    	  		</div>
    	  			<div class="col-md-1"></div>
    	  		</div>
    	  		<?php 
				$conn = mysqli_connect("localhost","root","","codecrush"); 
				?>
				<?php  
				// for loop for language
				//lamguage id will be user valid 
				if (isset($_SESSION['submit_ans'])) {
					# code...
				if ($_SESSION['submit_ans'] == 1) :?>
				    <script type="text/javascript">
				      alert("Your answer is submited and your result will notify in to your email");
				      window.location.href = "http://localhost/codecrush/lctrs-try/1.0.2/index.php";  
				    </script>

				<?php
				endif;
				}
				$language = $_SESSION['u_lang'];
				$sql_language = "select * from language where language_id = (select language_id from language where language_name = '$language')";
				$language = mysqli_query($conn,$sql_language); 
				while ($row_language = mysqli_fetch_array($language)) {
				$language_id = $row_language['language_id'];
				?>
				<?php 
				// for looop for question as per the language
				$sql_questions = "select * from questions where language_id = $language_id";
				$questions = mysqli_query($conn,$sql_questions);
				$i=1;
				?>
				<form id="form_sendemail" action="include/check.inc.php" method="post" class="container">
				  <!-- Email -->
				  <div class="panel-group">
				    <?php
				while ($row_questions = mysqli_fetch_array($questions)) { ?>
				    <div class="panel panel-primary">
				      <div class="panel-heading">
				        <?php echo "Q- ".$i.": ".$row_questions['question']; ?>
				      </div>
				      <div class="panel-body">
				        <?php
				$sql_answers = "select * from answers where language_id = $language_id && question_id = $i";
				$answers = mysqli_query($conn,$sql_answers);
				while ($row_answers = mysqli_fetch_array($answers)) { ?>
				        <div class="form-group">
				          <!-- <div class="row"> -->
				          <div class="col-md-1">
				          </div>
				          <div class="col-md-11">
				                <?php

				                if (!isset($code)) {?>
				            <div class="row">
				              <!-- <div class="col-md-1"></div> -->
				              <div class="col-md-11">
				                <?php if (!$row_questions['question_program'] == ""): ?>
				                  <pre class="program"><?php echo $row_questions['question_program']; ?></pre>
				                <?php endif ?>
				              </div>
				              <div class="col-md-1"></div>
				              <!-- <div class="col-md-1"></div> -->
				            </div><?php
				            $code = 1;
				                }

				                 ?>
				            <input type="radio" name="option<?php echo "[".$row_answers['language_id']."]"."[".$row_answers['question_id']."]"; ?>" value="<?php echo $row_answers['answer_id']; ?>" id="option<?php echo "[".$row_answers['language_id']."]"."[".$row_answers['question_id']."]"."[".$row_answers['answer_id']."]" ; ?>" >
				            <label for="option<?php echo "[".$row_answers['language_id']."]"."[".$row_answers['question_id']."]"."[".$row_answers['answer_id']."]" ; ?>" >
				              <?php echo $row_answers['answer']; ?>
				            </label>
				          </div>
				          <!-- </div> -->
				        </div>
				        <?php
				}
				unset($code); 
				?>
				      </div>
				    </div>
				    <?php
				$i++;
				}
				}
				?>
				  </div>
				  <div class="col-md-4"></div>
				  <div class="col-md-4">
				    <button type="submit" class="btn btn-primary btn-block" name="submit" id="form1">Submit</button>
				  </div>
				  <div class="col-md-4"></div>
				</form>
    	  	</div>  <!-- div actual quiz close -->
    	    <div class="col-sm-12 col-md-12">
	    	    <div class="event__item">
					<!-- .event__info -->
		            <!-- .event__body -->
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