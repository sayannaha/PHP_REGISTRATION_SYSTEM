<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$indian = filter_input(INPUT_POST, 'indian');
$gender = filter_input(INPUT_POST, 'gender');
$state = filter_input(INPUT_POST, 'state');
$image = filter_input(INPUT_POST, 'image');
$usertype = filter_input(INPUT_POST, 'usertype');

if(!empty($username))
{
	if(!empty($email))
	{
		if(!empty($password))
		{
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "form";
			
			$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
			if(mysqli_connect_error())
			{
				die("Connection Error (".mysqli_connect_errno().")".mysqli_connect_error());
			}
			else
			{
				$password_encrypt = md5($password);
				$sql = "INSERT INTO register (username, email, password, indian, gender, state, image, usertype) VALUES ('$username', '$email', '$password_encrypt', '$indian', '$gender', '$state', '$image', '$usertype');";
				if($conn->query($sql))
				{
					echo '<script>alert("New User Added Successfully!")</script>';
				}
				else
				{
					echo "Error :".$sql."<br>".$conn->error;
				}
				$conn->close();
			}
		}
		else
		{
			echo '<script>alert("Password should not be Empty!")</script>';
			die();
		}
	}
	else
	{
		echo '<script>alert("E-mail should not be Empty!")</script>';
		die();
	}
}
else
{
	echo '<script>alert("Username should not be Empty!")</script>';
	die();
}
?>
