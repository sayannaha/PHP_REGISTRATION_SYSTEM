<html>
    <head>
        <title>
            forget
        </title>
    </head>
    <body>
        <center>
            <form name="form2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <table>
                    <h1><b><u>FORGET PASSWORD</u></b></h1>

					<tr>
					<div class="emailid_me">
                        <td>E-mail:</td>
                        <td>
                            <input type="text" name="email" placeholder="Enter E-mail" autocomplete="off" required> 
                        </td>
					</div>
                    </tr>
					
					<tr>
					<div class="send_me">
						<td colspan = "2">
							<button type="submit" name="send" value="send"><b>Send in Mail</b></button>
						</td>
					</div>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>

<?php
$con = mysqli_connect('localhost', 'root', '', 'form');
if(isset($_POST['send']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $query = "SELECT * FROM register WHERE email='$email'";
    $run = mysqli_query($con, $query);
    if(mysqli_num_rows($run)>0)
    {
        $to = $db_email;
        $subject = "Password Reset Link";
        $message = "Mail to reset your password";
        $headers = "sayan@dualcube.com";
        mail($to, $subject, $message, $headers);
        header("location:reset.php");
    }
    else
    {
        echo '<script>alert("Mail not Sent!")</script>';        
    }   
}
?>
