<?php

session_start();
include('connection.php');

if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$passmd5 = md5($pass);

	$auth = "SELECT * FROM user WHERE email = '$email' AND pass = '$passmd5'";
	$result = mysqli_query($conn,$auth);

	$row = mysqli_fetch_assoc($result);
	
	$rows = mysqli_num_rows($result); 
		
		if($rows == 1){
			$_SESSION['username'] = $row['username'];
			$_SESSION['userid'] = $row['userid'];

			header("Location: index.php");
		}else{
			header("Location: test.php");
			echo "error";
		}
	
}




?>
