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
                User - Panel
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.html">Home</a></li>
							  <li class="active">user pannel</li>
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
    	    <div class="panel panel-default">
			  <div class="panel-heading"><?php echo $_SESSION['u_uid'] ?></div>
			  <div class="panel-body">
		  		<form class="form-group" method="post" action="include/user-panel-update.inc.php">
            <div class="row">
              <?php 
                $id = $_SESSION['u_id'];
                $sql_user = "select * from users where user_id = $id";
                $result = mysqli_query($conn,$sql_user);
                while ($row = mysqli_fetch_array($result)) {
                  ?>
            </div>
              <div class="row">
                <input type="hidden" name="id" value="<?php echo $_SESSION['u_id']; ?>">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="sr-only">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" name="first" value="<?php echo $_SESSION['u_first']; ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="sr-only">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="last" value="<?php echo $_SESSION['u_last']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="sr-only">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="uid" value="<?php echo $_SESSION['u_uid']; ?>">
              </div>
              <div class="form-group">
                <label class="sr-only">E-mail</label>
                <input type="email" class="form-control" placeholder="E-mail" name="email" value="<?php echo $_SESSION['u_email']; ?>">
              </div>
              <div class="form-group">
                <label class="sr-only">Language</label>
                <input type="text" class="form-control" placeholder="language" name="lanugage" value="<?php echo $_SESSION['u_lang']; ?>">
              </div>
              <div class="form-group">
                <label class="sr-only">Country</label>
                <input type="text" class="form-control" placeholder="country" name="country" value="<?php echo $_SESSION['u_country']; ?>">
              </div>
              <div class="form-group">
                <label class="sr-only">Phone-Number</label>
                <input type="text" class="form-control" placeholder="+ your country code " name="number" value="<?php echo $_SESSION['u_number']; ?>">
              </div>
                
              
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-3">
                  <button class="btn btn-block btn-primary" name="submit">update</button>
              </div>
              <div class="col-md-4"></div>
            </div>
                  <?php
                }
              ?>
          </form>
        </div>
      </div>
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