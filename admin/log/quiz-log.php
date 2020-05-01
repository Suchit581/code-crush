<?php 
	include "../include/connect.php";
	session_start();
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}


?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
<title>CodeCrush</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="../js/jquery.metisMenu.js"></script>
<script src="../js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="../css/custom.css" rel="stylesheet">
<script src="../js/custom.js"></script>
<script src="../js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>



</head>
<body>
<div id="wrapper">
       <!----->
<?php include "nav.php"; ?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="../index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Log</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">
				<?php
					$sql_quiz = "select * from quiz_log";
					$quizs = mysqli_query($conn,$sql_quiz);
					$id=0;
					?>
					<div class="well">
						quiz log
					</div>
					<?php
					while ($row_quiz = mysqli_fetch_array($quizs)) {
						$id = $row_quiz['q_lang'];
						$sql_lang = "select * from language where language_id = $id";
						$langs = mysqli_query($conn,$sql_lang);
						while ($lang = mysqli_fetch_array($langs)) {
							?>
							<div class="well well-sm">user-name</div>
							<div class="form-group">
								<div class="form-control">
									<p><?php echo $row_quiz['q_uid']; ?></p>
								</div>
							</div>
							<div class="well well-sm">user-language-name</div>
							<div class="form-group">
								<div class="form-control">
									<p><?php echo " ".$lang['language_name'];?></p>
								</div>
							</div>
							<div class="well well-sm">Total number of attempt</div>
							<div class="form-group">
								<div class="form-control">
									<p><?php echo " ".$row_quiz['q_attempt'];?></p>
								</div>
							</div>
							
							<div class="well well-sm">correct answer from the attempt</div>
							<div class="form-group">
								<div class="form-control">
									<p><?php echo " ".$row_quiz['q_correct']; ?></p>
								</div>
							</div>
							
							<div class="well well-sm">user time entery</div>
							<div class="form-group">
								<div class="form-control">
									<p><?php echo " ".$row_quiz['q_time']."<br>";?></p>
								</div>
							</div>
							<div class="row form-group">
								<hr>
							</div>
							<?php
						}
					}
					
				?>
	        </div>
	</div>
	
	
	<!--//faq-->
		<!---->
<?php include "../footer.php"; ?>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

