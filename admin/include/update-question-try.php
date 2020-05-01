<?php
			session_start();
			ob_start();
			if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
			include "connect.php";
 			if (isset($_POST['update'])):
 				$question_no =  $_POST['update'];
 				$question_value =  $_POST['update-value'];
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
		 					$id = $row_questions['qid'];
		 					if (isset($_POST['update-prog'])) { 
				 				$question_prog =  $_POST['update-prog'];
		 					}		 					
							$answer_value_correct = $_POST['update-answer-correct'];
			 				$question_sql = "UPDATE `questions` SET `question`='$question_value',`question_program`='$question_prog','ans_id' = $answer_value_correct where qid = $id";
			 				mysqli_query($conn,$question_sql);
			 				$sql_answers = "select * from answers where language_id = $language_id && question_id = $question_no";
							$answers = mysqli_query($conn,$sql_answers);
							$answer_value_1 = $_POST['update-answer-1'];
							$answer_value_2 = $_POST['update-answer-2'];
							$answer_value_3 = $_POST['update-answer-3'];
							$answer_value_4 = $_POST['update-answer-4'];

							$j=1;
							$check = 1;
			 				while ($row_answers = mysqli_fetch_array($answers)) { 
			 					$answers_sql_1 = "UPDATE `answers` SET `answer`='$answer_value_1' where aid = $aid";
			 					mysqli_query($conn,$answers_sql_1);
			 					$aid = $row_answers['aid'];
			 					switch ($j) {
			 						case 1:
				 						$aid = $row_answers['aid'];
					 					$answers_sql_1 = "UPDATE `answers` SET `answer`='$answer_value_1' where aid = $aid";
					 					echo $answers_sql_1."<br>";
					 					$j++;
					 					mysqli_query($conn,$answers_sql_1);
					 					header("Location: ../index.php");
			 						break;
			 						case 2:
				 						$aid = $row_answers['aid'];
					 					$answers_sql_2 = "UPDATE `answers` SET `answer`='$answer_value_2' where aid = $aid";
					 					echo $answers_sql_2."<br>";
					 					$j++;
					 					mysqli_query($conn,$answers_sql_2);
					 					header("Location: ../index.php");

			 						break;
			 						case 3:
				 						$aid = $row_answers['aid'];
					 					$answers_sql_3 = "UPDATE `answers` SET `answer`='$answer_value_3' where aid = $aid";
					 					echo $answers_sql_3."<br>";
					 					$j++;
					 					mysqli_query($conn,$answers_sql_3);
					 					header("Location: ../index.php");

			 						break;
			 						case 4:
				 						$aid = $row_answers['aid'];
					 					$answers_sql_4 = "UPDATE `answers` SET `answer`='$answer_value_4' where aid = $aid";
					 					echo $answers_sql_4."<br>";
					 					$j++;
					 					mysqli_query($conn,$answers_sql_4);
					 					header("Location: ../index.php");
			 						
			 						break;
			 					}
			 				}
			 				$j=1;
							// header("Location: ../index.php");
		 				}
		 				$i++;
					}
				}
				else:
				header("Location: ../index.php");
 			endif;
?>