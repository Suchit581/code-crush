<?php 
	include "../include/connect.php";
	session_start();
	$_SESSION['language_page'] = "c";
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
				<span>Update</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">
				<div class="panel-group">
				</div>
				<?php  
					// for loop for language
					//lamguage id will be user valid 
					$language = $_SESSION['language_page'];
					$sql_language = "select * from language where language_id = (select language_id from language where language_name = '$language')";
					$language = mysqli_query($conn,$sql_language); 
					while ($row_language = mysqli_fetch_array($language)) {
						$language_id = $row_language['language_id'];
						// for looop for question as per the language
						$sql_questions = "select * from questions where language_id = $language_id";
						$questions = mysqli_query($conn,$sql_questions);
						$i=1;
						while ($row_questions = mysqli_fetch_array($questions)) {?>
							<div class="pnnel panel-default">
								<div class="panel-body">
								<div class="well well-sm">
									<p>Q-<?php echo $i." "; echo $row_questions['question'];?><p>
								</div>
									<div class="form-group">
										<form class="col-md-12" action="question-answers-try.php" method="post">
											<div class="row">
												<div class="col-md-6">
													<button name="update" type="submit" class="btn btn-accent btn-block" value="<?php echo $i;?>">Update</button>
												</div>
												<div class="col-md-6">
													<button name="delete" type="submit" class="btn btn-primary btn-block" value="<?php echo $i;?>">Delete</button> 
												</div>
											</div>
										</form>
									</div>
								</div>
							</div><?php
							
							$i++;
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

