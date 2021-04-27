<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$confirm_password = filter_input(INPUT_POST, 'confirm_password');
$indian = filter_input(INPUT_POST, 'indian');
$gender = filter_input(INPUT_POST, 'gender');
$state = filter_input(INPUT_POST, 'state');
$image = filter_input(INPUT_POST, 'image');
$usertype = filter_input(INPUT_POST, 'usertype');

$file = $_FILES['image'];
$fileName = $_FILES['image']['name'];
$fileTmpName = $_FILES['image']['tmp_name'];

$fileDir = 'uploads/'.$fileName;
move_uploaded_file($fileTmpName, $fileDir);

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
				function test_input($data)
				{
					$data = trim($data);
					$data = htmlspecialchars($data);
					return $data;
				}
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if(empty($_POST["email"]))
					{
						echo '<script>alert("E-Mail cannot be blank!")</script>';
						die();
					}
					else
					{
					$email = test_input($_POST["email"]);
					if(!filter_var($email, FILTER_VALIDATE_EMAIL))
					{
						echo '<script>alert("Invalid E-mail Format!")</script>';
						die();
					}
					if(($_POST["password"]) != ($_POST["confirm_password"]))
					{
						echo '<script>alert("Passwords do not match!")</script>';
						die();
					}
					elseif(!empty($_POST["password"]) && ($_POST["password"] == ($_POST["confirm_password"])))
					{
						$password = test_input($_POST["password"]);
						$confirm_password = test_input($_POST["confirm_password"]);
						if(strlen($_POST["password"]) < 8)
						{
							echo '<script>alert("Password must have at least 8 characters!")</script>';
							die("Password is Weak!");
						}
						elseif(!preg_match("#[a-z]+#", $password))
						{
							echo '<script>alert("Password must have a lower case character!")</script>';
							die("Password is Weak!");
						}
						elseif(!preg_match("#[A-Z]+#", $password))
						{
							echo '<script>alert("Password must have a upper case character!")</script>';							
							die("Password is Weak!");
						}
						elseif(!preg_match("/\W/", $password))
						{
							echo '<script>alert("Password must have a special character!")</script>';
							die("Password is Weak!");
						}
						else
						{
							$password_encrypt = md5($password);
							$sql = "INSERT INTO register (username, email, password, indian, gender, state, image, usertype) VALUES ('$username', '$email', '$password_encrypt', '$indian', '$gender', '$state', '$fileDir', '$usertype');";
							if($conn->query($sql))
							{
								if($usertype == 'admin')
								{
    								header("location:welcome_admin.php");
								}
								else
								{
								    header("location:welcome_user.php");
								}
							}
						}
					}
			
					}
				}
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
