<?php



include('connection.php');

if (isset($_POST['register'])) 
{
    
    $phone = $_POST['phone'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$passmd5 = md5($pass);

	$query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";

	$result_set = mysqli_query($conn, $query);

	if(empty($_POST['username']) || empty($_POST['email']) ||empty($_POST['phone']) ||empty($_POST['password']))
	{
		header("Location: register.php?fill=false");
	
	}else
	{

		if ($result_set) 
		{
			if (mysqli_num_rows($result_set) == 1) 
			{
				header('Location: register.php?error=exist');
			}else
			{
				$auth1 = "INSERT INTO user (username,email,pass,phone) VALUES('$username','$email','$passmd5','$phone')"; 
				$result1 = mysqli_query($conn,$auth1);
			 
					
				if($result1)
				{
						header("Location: index.php");
				}else
				{
					
					header("Location: test.php");
				}
			
						
			}

		}
	}
}

?>