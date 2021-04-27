<html>
<head>
	<title>view details</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Username</th>
			<th>E-Mail</th>
			<th>Password</th>
			<th>Indian</th>
			<th>Gender</th>
			<th>State</th>
			<th>Image</th>
			<th>UserType</th>
			<th>Action</th>
		</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "form");
if($conn-> connect_error)
{
	die("Connection Failed :".$conn-> connect_error);
}
$sql = "SELECT * FROM register";
$result = $conn-> query($sql);

if($result-> num_rows > 0)
{
	while($row = $result-> fetch_assoc())
	{
		echo "
		<tr>
			<td>".$row['username']."</td>
			<td>".$row['email']."</td>
			<td>".$row['password']."</td>
			<td>".$row['indian']."</td>
			<td>".$row['gender']."</td>
			<td>".$row['state']."</td>
			<td>".$row['image']."</td>
			<td>".$row['usertype']."</td>
			<td><a href='update.php?username=$row[username]&email=$row[email]&indian=$row[indian]&state=$row[state]'>Update</td>
		</tr>";
	}
}
else
{
	echo '<script>alert("No Records Found!")</script>';
}
$conn-> close();
?>

	</table>
</body>
</html>