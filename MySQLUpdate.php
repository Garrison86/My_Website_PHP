<?php

require "MySQLConnectionInfo.php";
include "Header.php";
?>
	<title>MySQL Insert</title>
		<?php 
			include "MySQLMenu.php";
		?>	
		<br />				
		<h3>Update the following fields</h3>
		<br />
		<br />
		<form action="MySQLUpdateComplete.php" method="post">
			<input type="hidden" name="updatepersonId" value="<?php echo  $_POST['EmployeeId']; ?>" />
			First Name: <input type="text" name="updatefirstName" value="<?php echo  $_POST['FirstName']; ?>" />
			<br />
			Last Name: <input type="text" name="updatelastName" value="<?php echo  $_POST['LastName']; ?>"/>
			<br />
			<br />
			<input type="submit" value="Update Record" />
		</form>
		<br />
<?php include "Footer.php"; ?>