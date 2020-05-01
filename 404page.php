<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
 ?>

  <body id="error404__page">

    <!-- Navbar
    ================================================== -->
    <?php include 'nav-link.php'; ?>

    <!-- CONTENT
      ================================================== -->
	<?php include 'sign-up-in-modal.php'; ?>
 <?php 
	$status = $_SERVER['REDIRECT_STATUS'];
	$codes = array(
	       403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
	       404 => array('404 Not Found', 'The document/file requested was not found on this server.'),
	       405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
	       408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
	       500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
	       502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
	       504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
	);

	$title = $codes[$status][0];
	$message = $codes[$status][1];
	if ($title == false || strlen($status) != 3) {
	       $message = 'Please supply a valid status code.';
	}
?>
   	<!-- section home -->
    <section class="section__home">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h2 class="welcome_content__title"><?php echo $title; ?></h2>
							<p class="welcome_content__title-primary">Page not found</p>
	  					<p class="welcome_content__desc">Sorry, but the page you were looking for doesn’t exist.</p>
	  					<p class="welcome_content__action">Go back to <a href="index.php">Home page</a></p>
		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
      <!-- Background image -->
      <div class="home__bg"></div>
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
<!-- Copied from https://ygamin.bitbucket.io/CODECRUSH/1.0.2/404page.php by Cyotek WebCopy 1.4.0.477, 06 July 2018, 10:59:48 AM -->
</html>