<?php 
session_start();
include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
  
  include 'head.php';
?>
  <body id="blog__page">

    <!-- Navbar
    ================================================== -->
    <?php include 'nav-link.php'; ?>

    <?php include 'sign-up-in-modal.php'; ?>
		
		<!-- section home -->
   	<section class="section__home">
      <div class="container home__body">
        <div class="row">
          <div class="col-sm-12">
            <div class="home__content">

              <!-- Heading -->
              <h1 class="home__heading">
                user Panel
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.html">Home</a></li>
							  <li class="active">user quiz</li>
							</ol>

            </div> <!-- / .home__content -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Background image -->
      <div class="home__bg"></div>
    </section>

    
    <!-- section blog -->
    <section class="section__blog">
    	<div class="container">
        
        <?php
          $uid = $_SESSION['u_uid'];
          $sql_quiz_log = "select * from quiz_log where q_uid = '$uid'"; 
          $result_quiz = mysqli_query($conn,$sql_quiz_log);
          $total_question = 0;
          while ( $row_quiz_log  = mysqli_fetch_array($result_quiz)) {
            $correct = $row_quiz_log['q_correct'];
            if ($correct >= 9) {
              $result = "distiction";
            }
            elseif ($correct >= 5 && $correct <9) {
              $result = "first";
            }
            else{
              $result = "fail";
            }
            $attempet = $row_quiz_log['q_attempt'];
            $lang_id = $row_quiz_log['q_lang'];
            $sql_language = "select language_name from language where language_id = $lang_id ";
            $result_lang = mysqli_query($conn,$sql_language);
            $language = 0;
            while ( $row_lang = mysqli_fetch_array($result_lang)) {
              $language = $row_lang[0];
            }
            $sql_question = "select * from questions where language_id = $lang_id";
            $result_question = mysqli_query($conn,$sql_question);
            $total_question = mysqli_num_rows($result_question);
            ?>
        <table class="table table-striped">
          <tr>
            <td>Total number of question</td>
            <td><?php echo $total_question; ?></td>
          </tr>
          <tr>
            <td>Attempet question</td>
            <td><?php echo $attempet; ?></td>
          </tr>
          <tr>
            <td>Right answer</td>
            <td><?php echo $correct; ?></td>
          </tr>
          <tr>
            <td>wrong answer</td>
            <td><?php echo $total_question - $correct ;?></td>
          </tr>
          <tr>
            <td>
              no answer
            </td>
            <td><?php echo $total_question - $attempet; ?></td>
          </tr>
          <tr>
            <td>your result</td>
            <td><?php echo $result; ?></td>
          </tr>
          <tr>
            <td colspan="2">
              <?php 
              if ($result == "fail") :?>
                Sorry, you are not aligeble for certificate
              <?php else: ?>
                <div class="row">
                  <div class="col-md-6 pull-left">
                    <p>You are aligeble for certificate click below button to get certificate</p>
                  </div>
                  <div class="col-md-3"></div>
                  <div class="col-md-3 pull-right">
                    <a href="certificate.php" class="btn btn-primary">certificate</a>
                  </div>
                </div>
              <?php endif; ?>
            </td>
          </tr>
        </table> 
        <?php
          }
        ?>
    	</div> <!-- / .container -->
    </section> <!-- / .section blog -->

	<?php include_once 'footer.php'; ?>	

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
		<script src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
		<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
		<script src="assets/plugins/countTo/jquery.countTo.js"></script>
		<script src="assets/plugins/aos-master/dist/aos.js"></script>
		<script src="assets/plugins/contact-form/contact.js"></script>
		<script src="assets/plugins/smothscroll/smoothscroll.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->

  </body>
<!-- Copied from https://ygamin.bitbucket.io/lctrs/1.0.2/blog-right-sidebar.html by Cyotek WebCopy 1.4.0.477, 06 July 2018, 10:59:48 AM -->
</html>