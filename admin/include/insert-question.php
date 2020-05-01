<?php
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
include "../include/connect.php";
if (isset($_POST['insert'])) {
	//question
	$question_name = $_POST['question-name'];
	$prog = $_POST['prog'];
	$answer_1 = $_POST['answer-1'];
	$answer_2 = $_POST['answer-2'];
	$answer_3 = $_POST['answer-3'];
	$answer_4 = $_POST['answer-4'];
	$lang = $_POST['lang'];
	$correct_answer = $_POST['correct-answer'];
	//checking the empty value
	if (empty($question_name) || empty($answer_1) || empty($answer_2) || empty($answer_3) || empty($answer_4) || empty($lang) || empty($correct_answer)) {
		header("Location:../insert/questions-answer-insert.php?empty=filed");
		exit();	
	}
	else{
		//inserting the answer in the question table 
		//fetching the language is from the table as pre the name ;
		$sql_language = "select * from language where language_id = (select language_id from language where language_name = '$lang')";
		$language = mysqli_query($conn,$sql_language); 
		while ($row_language = mysqli_fetch_array($language)) {
			$language_id = $row_language['language_id'];
			// INSERT INTO `questions`(`qid`, `question`, `question_program`, `ans_id`, `language_id`) VALUES ()
			$sql_question_insert = "INSERT INTO `questions`(`question`, `question_program`, `ans_id`, `language_id`) VALUES ('$question_name','$prog',$correct_answer,$language_id)";
			mysqli_query($conn,$sql_question_insert);
			// echo $sql_question_insert."<br>";
			//////////answers\\\\\\\\\\
			// INSERT INTO `answers`(`answer`, `language_id`, `question_id`, `answer_id`) VALUES ()
			$sql_total_question = "SELECT * FROM `questions` WHERE language_id = $language_id;";
			$result_total_question = mysqli_query($conn,$sql_total_question);
			$total_question=mysqli_num_rows($result_total_question);
			$question_number = $total_question + 1;
			$answer = array(1 => "$answer_1","$answer_2","$answer_3","$answer_4");
			for($i=1;$i<5;$i++) {
				$sql_answer_insert = "INSERT INTO `answers`(`answer`, `language_id`, `question_id`, `answer_id`) VALUES ('$answer[$i]',$language_id,$question_number,$i)";
				mysqli_query($conn,$sql_answer_insert);
				// echo $sql_answer_insert."<br>";
			}
		}
	}
}
else{
	header("Location:../insert/questions-answer-insert.php?something=error_occured");
	exit();
}
?>