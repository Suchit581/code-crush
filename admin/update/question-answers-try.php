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
				<span>Update</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
 		<div class="blank-page">
 			
 		<?php
 			if (isset($_POST['update'])):
 				$question_no =  $_POST['update'];
 				// $question_no =  8;
 				$language = $_SESSION['language_page'];
				$sql_language = "select * from language where language_id = (select language_id from language where language_name = '$language')";
				$language = mysqli_query($conn,$sql_language); 
				while ($row_language = mysqli_fetch_array($language)) {
					$language_id = $row_language['language_id'];
					// for looop for question as per the language
					$sql_questions = "select * from questions where language_id = $language_id";
					$questions = mysqli_query($conn,$sql_questions);
					$i=1;
					while ($row_questions = mysqli_fetch_array($questions)) {
		 				if($i == $question_no){		 					
		 				?>
			 				<form class="form-group" action="../include/update-question-try.php" method="post">
			 					<div class="well well-sm"><p>Question - <?php echo $question_no ?></p></div>
			 					<input type="text" name="update-value" class="form-control" value="<?php echo $row_questions['question'];?>"><br>
			 					<textarea type="text" name="update-prog" class="form-control well-sm"  value="<?php echo $row_questions['question_program'];?>" rows="10"><?php echo $row_questions['question_program'];?></textarea><br>
			 					<div class="well well-sm"><p>Answers</p></div>
			 					<?php  
			 						$sql_answers = "select * from answers where language_id = $language_id && question_id = $question_no";
									$answers = mysqli_query($conn,$sql_answers);
									while ($row_answers = mysqli_fetch_array($answers)) { ?>
					 					<input type="text" name="update-answer-<?php echo $row_answers['answer_id'];?>" class="form-control" value="<?php echo $row_answers['answer'];?>"><br>
					 					<?php 
									}
									?>
									<div class="well well-sm"><p>Enter the value of correct answer in 1 to 4 format : </p></div>
				 					<input type="number" min="1" max="4" name="update-answer-correct" class="form-control" placeholder="Enter the corect option in number" ><br>
				 					<?php
			 					?>
			 					<button type="submit" name="update" value="1" class="btn btn-block btn-primary">update</button>
			 				</form>
		 				<?php
		 				}
		 				$i++;
					}
				}
			elseif (isset($_POST['delete'])):
				$question_no =  $_POST['update'];
 				// $question_no =  8;
 				$language = $_SESSION['language_page'];
				$sql_language = "select * from language where language_id = (select language_id from language where language_name = '$language')";
				$language = mysqli_query($conn,$sql_language); 
				while ($row_language = mysqli_fetch_array($language)) {
					$language_id = $row_language['language_id'];
					$sql_questions = "select * from questions where language_id = $language_id";
					$questions = mysqli_query($conn,$sql_questions);
					$i=1;
					while ($row_questions = mysqli_fetch_array($questions)) {
		 				if($i == $question_no){		
		 					$id = $row_questions['qid'];
							$sql_questions_delete = "delete * from questions where qid = $id";			
							mysqli_query($conn,$sql_questions_delete);
	 						$sql_answers_delete = "delete * from answers where language_id = $language_id && question_id = $question_no";
							mysqli_query($conn,$sql_answers_delete);
		 				}
		 				$i++;
					}
				}
				
				
 			endif;
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

