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
				<span>Update</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">
				<?php
				if (isset($_POST['update'])) {
					$id = $_POST['update'];
					$language_sql = "select * from language where language_id = $id";
					$languages = mysqli_query($conn,$language_sql);
					while ($row_language = mysqli_fetch_array($languages)): ?>
						<div class="panel-body">
						<form class="col-md-12 col-sm-12" method="post" action="../include/language-insert-update-delete.php">
							<div class="form-group">
								<input type="text" name="language_id" value="<?php echo $row_language['language_id'];?>" class="form-control" readonly>
							</div>
							<div class="form-group">
								<input type="text" name="language_name" value="<?php echo $row_language['language_name'];?>"class="form-control">
							</div>
							<div class="form-group">
								<?php  $id = $row_language['language_id']; ?>
								<button class="btn btn-primary btn-block" name="update" value="<?php echo $id;?>">update</button>
							</div>
						</form>
						</div>
						<?php
					endwhile;
				}
				elseif (isset($_POST['delete'])) {
					$id = $_POST['delete'];
					$language_sql = "delete * from language where language_id = $id";
					$languages = mysqli_query($conn,$language_sql);
					header("Location:../update/language-update.php");
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

