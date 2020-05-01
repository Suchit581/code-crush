<?php
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
if (isset($_POST['update'])) {
	$id = $_POST['language_id'];
	$name = $_POST['language_name'];
	$sql_update = "UPDATE `language` SET `language_id`= $id,`language_name`= '$name' WHERE language_id = $id";
	mysqli_query($conn,$sql_update);
	header("Location:../update/language-update.php");
}
elseif (isset($_POST['insert'])) {
	//INSERT INTO `language`(`language_id`, `language_name`) VALUES ()
	$id = $_POST['language_id'];
	$name = $_POST['language_name'];
	$language_sql = "INSERT INTO `language`(`language_id`, `language_name`) VALUES ($id,'$name')";
	mysqli_query($conn,$language_sql);
	header("Location:../insert/language-insert.php");
}

?>