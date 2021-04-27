<?php
echo "<center><b>WELCOME ADMIN</b></center>";
?>
<html>
    <head>
        <title>
            welcome admin
        </title>
    </head>
    <body>
		<center>
		
		<html>
		<body>
		<form name="btn-adduser" action="adduser.php">
			<div class="btn">
				<button type="submit" name="adduser" id="adduser"><b>ADD NEW USER</b></button> 
		</form><br><br><br>
		<form name="btn-logout" action="logout.php">
			<button type="submit" name="logout" id="logout"><b>LOG OUT</b></button>
		</form>
		</div>
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
			<td>".$row["username"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["password"]."</td>
			<td>".$row["indian"]."</td>
			<td>".$row["gender"]."</td>
			<td>".$row["state"]."</td>
			<td>".$row["image"]."</td>
			<td>".$row["usertype"]."</td>
			<td><a href='delete.php?username=$row[username]'>Delete</td>
		</tr>";
	}
	echo "</table>";
}
else
{
	echo '<script>alert("Zero Results!")</script>';
}
$conn-> close();
?>
		</center>
	</body>
</html>

