<?php session_start(); 


require "MySQLConnectionInfo.php";

$error = "";

if(!isset($_POST['EmployeeId']))
{
	$error = "Employee could not be deleted.";
}
else
{
	try {
		$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
			  // set the PDO error mode to exception
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully" . "</br>";
		
		$sqlQuery = "DELETE FROM Employee WHERE EmployeeId = ".$_POST['EmployeeId'];
		
		try {
			$result = $pdo->query( $sqlQuery );
			echo "Employee Successfully Deleted". "<br>";
			}
		catch(PDOException $e) {
			echo "Employee Could not be deleted:  " . $e->getMessage();
		}	
		
		$pdo = null;		
	}	
	catch(PDOException $e) {
		echo "Connection failed:  " . $e->getMessage();
	}	

}
include "Header.php";
include "MySQLMenu.php";

	echo $error;

include "Footer.php";	
?>
