<?php
echo "<center><b>WELCOME</b></center>";
?>
<html>
    <head>
        <title>
            welcome user
        </title>
    </head>
    <body>
		<center>
			<form name="btn-view" action="details.php?username=$row[username]">
			<div class="btn">
				<button type="submit" name="view" id="view"><b>SEE DETAILS</b></button> 
			</div>
			</form>
			</form>
			<form name="btn-logout" action="logout.php">
				<button type="submit" name="logout" id="logout"><b>LOG OUT</b></button>
			</form>
			
		</center>
	</body>
</html>
