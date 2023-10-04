<?php
session_start(); 
require "MySQLConnectionInfo.php";

$error = "";

if(isset($_POST["updatepersonId"]))
{
	try {
		$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$mysqli = new mysqli($host, $username, $password, $database);
    	echo "Connected successfully" . "</br>";

		$sqlQuery = "UPDATE Employee SET FirstName = '".
		$_POST["updatefirstName"]."', LastName = '".
		$_POST["updatelastName"]."' WHERE EmployeeId = '".
		$_POST['updateemployeeId']."'";
		
		try {
			$result = $mysqli->query($sqlQuery); 
			// $result = $pdo->query( $sqlQuery );
			echo "Employee Successfully Updated". "<br>";
			}
		catch(PDOException $e) {
			echo "Employee Could not be Updated:  " . $e->getMessage();
		}	
		//$pdo = null;		
		$mysqli = null;		
	}	
	catch(PDOException $e) {
		echo "Connection failed:  " . $e->getMessage();
	}	
	
}
include "Header.php";
?>

		<title>MySQL Insert</title>

<?php 
		include "MySQLMenu.php";

		echo $error;
include "Footer.php";
?>
