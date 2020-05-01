<?php 
	include "../include/connect.php";
	session_start();
	$_SESSION['language_name'] = 'java';
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
					<?php
						$language_name = $_SESSION['language_name'];
						$sql_lang = "select * from language where language_name = '$language_name' ";
						$result_lang = mysqli_query($conn,$sql_lang);
						while ($row_lang = mysqli_fetch_array($result_lang)) {
							$lang_id = $row_lang['language_id'];
							$sql_title = "select * from video_title where language_id = $lang_id";
							$result_title = mysqli_query($conn,$sql_title);
							while ($row_title = mysqli_fetch_array($result_title)) {
								$video_title_id = $row_title['video_title_id'];
								$sql_path = "select * from video_path where language_id = $lang_id && video_title_id = $video_title_id ";
								$result_path = mysqli_query($conn,$sql_path);
								while ($row_path = mysqli_fetch_array($result_path)) {?>
									<form class="form-group" action="video-update-individual.php" method="post">
										<input type="text" class="form-group form-control" name="video_title" value="<?php echo $row_title['video_title']; ?>">
										<input type="text" class="form-group form-control" name="video_path" value="<?php echo $row_path['video_path']; ?>">
										<input type="hidden" name="video_title_id" value="<?php echo $row_title['video_id']; ?>">
										<input type="hidden" name="video_path_id" value="<?php  echo $row_path['video_path_id'];?>">
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-primary pull-right" name="update">Update</button>
												<button class="btn btn-info pull-left" name="delete">Delete</button>
											</div>
										</div>
									</form>
									
									
									<?php
								}
							}

						}
					?>
				</div>
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

