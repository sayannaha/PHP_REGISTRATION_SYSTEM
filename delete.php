<?php
$conn = mysqli_connect("localhost", "root", "", "form");
if($conn-> connect_error)
{
	die("Connection Failed :".$conn-> connect_error);
}
$username = $_GET["username"];
$qry = "DELETE FROM register WHERE username='$username'";

$data = mysqli_query($conn, $qry);
if($data)
{
	echo '<script>alert("Record deleted from Database!")</script>';
}
else
{
	echo '<script>alert("Failed to delete Data from Database!")</script>';
}
?>