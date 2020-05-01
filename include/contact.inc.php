 <?php  
 if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$message = mysqli_real_escape_string($conn,$_POST['message']);
	if (!empty($email) || !empty($name) || !empty($message)) {
		$sql = "INSERT INTO `contact`(`contact_email`, `contact_name`, `contact_message`) VALUES ('$email','$name','message')";
		mysqli_query($conn,$sql);
		header("Location:../contact.php?message=successfull");
		exit();
	} 
	else {
		header("Location:../contact.php?message=empty");
		exit();		
	}	
}
else{
	header("Location:../contact.php?message=unknown_error");
	exit();	
}
?>