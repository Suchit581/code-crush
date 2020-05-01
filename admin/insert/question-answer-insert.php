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
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Insert</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
 		<div class="blank-page">
			<form class="form-group" action="../include/insert-question.php" method="post">
				<div class="form-group">
					<div class="well well-sm"><p>Question</p></div>
				</div>
				<div class="form-group">
					<input type="text" name="question-name" class="form-control" placeholder="Enter the question here">
				</div>
				<div class="form-group">
					<textarea type="text" name="prog" class="form-control well-sm"rows="10" placeholder="If the program is required then write the program else live it empty"></textarea>
				</div>
				<div class="form-group">
					<div class="form-group">
						<div class="well well-sm"><p>Answers</p></div>
					</div>
					<div class="form-group">
		 				<input type="text" name="answer-1" class="form-control" placeholder="enter the option 1">
					</div>
					<div class="form-group">
		 				<input type="text" name="answer-2" class="form-control" placeholder="enter the option 2">
					</div>
					<div class="form-group">
		 				<input type="text" name="answer-3" class="form-control" placeholder="enter the option 3">
					</div>
					<div class="form-group">
		 				<input type="text" name="answer-4" class="form-control" placeholder="enter the option 4">
					</div>
				</div>
				<div class="form-group">
					<label class="sr-only">Language</label>
	                <select class="form-control" name="lang">
	                	<option>c</option>
	                	<option>c++</option>
	                	<option>vb</option>
	                	<option>python</option>
	                	<option>java</option>
	                	<option>c#</option>
	                	<option>html</option>
	                	<option>css</option>
	                	<option>javascript</option>
	                </select>
				</div>
				<div class="well well-sm">
					<p>Enter the value of correct answer in 1 to 4 format : </p>
				</div>
				<div class="form-group">
					<input type="number" min="1" max="4" name="correct-answer" class="form-control" placeholder="Enter the corect option in number" >
				</div>
				<button type="submit" name="insert" value="1" class="btn btn-block btn-primary">insert</button>
			</form>
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

