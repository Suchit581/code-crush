<?php 
	include "include/connect.php";
	session_start();
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:index.php");
}


?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="../assets/ico/favicon.ico">
<title>CodeCrush</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
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
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">
				<?php
						if (isset($_SESSION)) {
							$id = $_SESSION['u_id'];
							$sql_user = "select * from users where user_id = $id";
							$user = mysqli_query($conn,$sql_user);
							while ($row_user = mysqli_fetch_array($user)): 
								$id=$row_user['user_id'];
								$first=$row_user['user_first'];
								$last=$row_user['user_last'];
								$email=$row_user['user_email'];
								$uid=$row_user['user_uid'];
								$lang=$row_user['user_lang'];
								$country=$row_user['user_country'];
								$number=$row_user['user_number'];
								$admin=$row_user['user_admin'];
								?>
								<form class="form-group" action="include/update-user.php" method="post">
									<input type="" name="id" class="form-control form-group" value="<?php echo $id; ?>" readonly>
									<input type="" name="first" class="form-control form-group" value="<?php echo $first; ?>">
									<input type="" name="last" class="form-control form-group" value="<?php echo $last; ?>">
									<input type="" name="email" class="form-control form-group" value="<?php echo $email; ?>">
									<input type="" name="uid" class="form-control form-group" value="<?php echo $uid; ?>">
									<input type="" name="lang" class="form-control form-group" value="<?php echo $lang; ?>">
									<input type="" name="country" class="form-control form-group" value="<?php echo $country; ?>">
									<input type="" name="number" class="form-control form-group" value="<?php echo $number; ?>">
									<div class="form-group">
											<p class="">Admin:</p>
											<div class="form-control">
												<label for="0" class="radio-inline"><input type="radio" name="admin" id="0" value="0" <?php if($admin == 0) echo "checked"; ?>>No</label>
												<label for="1" class="radio-inline"><input type="radio" name="admin" id="1" value="1" <?php if($admin == 1) echo "checked"; ?>>Yes</label>
											</div>
									</div>
									<button type="submit" name="update" value="submit" class="btn btn-primary btn-block">Update</button>
								</form>
								<?php
							endwhile;

						}
						
						else{
							header("Location:user-page-update.php");
						}
					
				?>
	        </div>
	</div>
	
	
	<!--//faq-->
		<!---->
<?php include "footer.php"; ?>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

