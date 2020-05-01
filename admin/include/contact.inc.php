<?php
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
include_once 'connect.php';
if (isset($_POST['update'])) {
	$video_title_id = $_POST['video_title_id'];
	$update_title = "UPDATE `video_title` SET `video_title`='' WHERE video_id = $video_title_id";
	mysqli_query($conn,$update_title);
	$video_path_id = $_POST['video_path_id'];
	$update_path = "UPDATE `video_path` SET `video_path`='' WHERE video_path_id =$video_path_id";
	mysqli_query($conn,$update_path);
	header("location:../index.php?update=success");
} elseif(isset($_POST['insert'])) {
	$video_title_id_number = 0;
	$sql_lang = "select * from language";
	$result_lang = mysqli_query($conn,$sql_lang);
	while ($row_lang = mysqli_fetch_array($result_lang)) {
		$lang_id = $row_lang['language_id'];
		$sql_title = "select * from video_title where language_id = $lang_id";
		$result_title = mysqli_query($conn,$sql_title);
		while ($row_title = mysqli_fetch_array($result_title)) {
			$video_title_id = $row_title['video_title_id'];
			$sql_path = "select * from video_path where language_id = $lang_id && video_title_id = $video_title_id ";
			$result_path = mysqli_query($conn,$sql_path);
			while ($row_path = mysqli_fetch_array($result_path)) {
				$video_title_id_number =  $row_title['video_title_id'];
			}
		}

	}
	$video_title = $_POST['video_title'];
	$video_path = $_POST['video_path'];
	$lang = $_POST['lang'];
	$video_title_id_number = $video_title_id_number + 1;
	$insert_title  =  "INSERT INTO `video_title`(`video_title`, `language_id`, `video_title_id`) VALUES ('$video_title',$language_id,$video_title_id_number)";
	mysqli_query($conn,$insert_title);
	$insert_path  =  "INSERT INTO `video_path`(`video_path`, `language_id`, `video_title_id`) VALUES ('$video_path',$language_id,$video_title_id_number)";
	mysqli_query($conn,$insert_path);
	header("location:../index.php?insert=success");
	

}
else{
	header("location:../index.php?button=not_valid");
}
?>