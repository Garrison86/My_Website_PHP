<?php
session_start(); 
require "MySQLConnectionInfo.php";
$error = "";

//==================================================== TRY CATCH ========================================	
	try {
		// $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
		// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$mysqli = new mysqli($host, $username, $password, $database);
		echo "Connected successfully" . "</br>";
			
		$sqlQuery = "INSERT INTO employee (EmployeeId, FirstName, LastName, EmailAddress, PhoneNumber, SocialInsuranceNumber, PASSWORD) VALUES('"
		.$_SESSION["empFirstName"]."','"
		.$_SESSION["empLastName"]."','"
		.$_SESSION["empEmail"]."','"
		.$_SESSION["empTele"]."','"
		.$_SESSION["empSIN"]."','"
		.$_SESSION["empPass"]."')";
		
		try {
			// $result = $pdo->query( $sqlQuery );
			$result = $mysqli->query($sqlQuery); 
			// $outputInArrayFormat = $result->fetch_all(MYSQLI_ASSOC);
			echo "Employee Successfully Added". "<br>";
		}
		catch(PDOException $e) {
				echo "Employee Could not be added:  " . $e->getMessage();
		}		
		// $pdo = null;
		$mysqli = null;
		}	
	catch(PDOException $e) {
				echo "Connection failed:  " . $e->getMessage();
	}			

include "Header.php";
include "MySQLMenu.php";


include "Footer.php";
?>