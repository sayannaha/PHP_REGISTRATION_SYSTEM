<?php
echo "<center><b>WELCOME ADMIN </b></center>";
?>
<html>
    <head>
        <title>
            add user
        </title>
    </head>
    <body>
	<center>
            <form name="form1" action="newuser.php" method="POST">
				<h1><b><u>ADD USER</u></b></h1>
				<table>
				
					<tr>
					<div class="inputbody">
                        <td>User-name :</td>
                        <td>
                            <input type="text" name="username" placeholder="Enter User-name" autocomplete="off" required> 
                        </td>
					</div>
                    </tr>

                    <tr>
					<div class="inputbody">
                        <td>E-Mail :</td>
                        <td>
                            <input type="text" name="email" placeholder="Enter E-mail" autocomplete="off" required>
                        </td>
					</div>
                    </tr>

                    <tr>
					<div class="inputbody">
                        <td>Password :</td>
                        <td>
                            <input type="password" name="password" autocomplete="off" required>
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
                        <td>Gender :</td>
                        <td><input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Others
                        </td>
					</div>
                    </tr>

                    <tr>
					<div class="inputbody">
                        <td>State :</td>
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
					<div class="inputbody">
                        <td>Upload a Photo :</td>
                        <td>
                            <input type="file" name="image" accept="image/jpeg,image/png" onchange="show(event);" required>
                        </td>
					</div>
					</tr>
						
					<div class="inputbody">
                        <td>User-Type :</td>
                        <td><input type="radio" name="usertype" value="admin">Admin
                            <input type="radio" name="usertype" value="notadmin">Normal User
                        </td>
					</div>
                    </tr>
						
                    <tr>
					<div class="btn">
                        <td>
                            <button type="submit" value="adduser" name="adduser"><b>ADD USER</b></button>
                        </td>
						
					</div>
                    </tr>
                    
                </table>
            </form>
        </center>
    </body>
</html>
