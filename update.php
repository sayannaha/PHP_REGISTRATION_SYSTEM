<?php
$conn = mysqli_connect("localhost", "root", "", "form");
if($conn-> connect_error)
{
	die("Connection Failed :".$conn-> connect_error);
}
error_reporting(0);
$username_u = $_GET["username"];
$email_u = $_GET["email"];
$indian_u = $_GET["indian"];
$state_u = $_GET["state"];

?>

<html>
    <head>
        <title>
            update
        </title>
    </head>
    <body>
		<center>
            <form name="form1" action="details.php?username=$row[username]" method="POST">
				<h1><b><u>Update Details</u></b></h1>
				<table>
				
					<tr>
					<div class="inputbody">
                        <td>Change User-name :</td>
                        <td>
                            <input type="text" name="username" value="<?php echo "$username" ?>" autocomplete="off" required> 
                        </td>
					</div>
                    </tr>

                    <tr>
					<div class="inputbody">
                        <td>Update E-Mail :</td>
                        <td>
                            <input type="text" name="email" value="<?php echo "$email" ?>" autocomplete="off" required>
                        </td>
					</div>
                    </tr>

                    
                    <tr>
					<div class="inputbody">
                        <td>Currently residing in India :</td>
                        <td><input type="checkbox" name="indian" value="yes">Yes
                            <input type="checkbox" name="indian" value="no">No</td>
					</div>
                    </tr>

                    
                    <tr>
					<div class="inputbody">
                        <td>Update State :</td>
                        <td><select name="state" required>
                                <option name="westbengal" value="westbengal">West Bengal</option>
                                <option name="bihar" value="bihar">Bihar</option>
                                <option name="sikkim" value="sikkim">Sikkim</option>
                                <option name="jharkhand" value="jharkhand">Jharkhand</option>
                                <option name="assam" value="assam">Assam</option>
                            </select>
                        </td>
					</div>
                    </tr>

                    
                    <tr>
					<div class="btn">
                        <td colspan="2" align="center">
                            <button type="submit" value="update" name="update"><b>Update</b></button>
                        </td>
						
					</div>
                    </tr>
                    
                </table>
            </form>
        </center>
    </body>
</html>

<?php

if($_GET["update"])
{
	$username = $_GET["username"];
	$email = $_GET["email"];
	$indian = $_GET["indian"];
	$state = $_GET["state"];
	
	$query = "UPDATE register SET username='$username',email='$email',indian='$indian',state='$state' WHERE username='$username_u'";
	
	$data = mysqli_query($conn, $query);
	if($data)
	{
		echo '<script>alert("Record Updated!")</script>';
	}
	else
	{
		echo '<script>alert("Failed to Update Record!")</script>';
	}
}
?>

