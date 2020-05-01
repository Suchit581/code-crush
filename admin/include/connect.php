<?php
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
$conn = mysqli_connect("localhost","root","","codecrush");
?>