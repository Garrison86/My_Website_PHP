<?php
session_start();

require "MySQLConnectionInfo.php";
//==================================================== TRY CATCH ========================================
try {
    // $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $mysqli = new mysqli($host, $username, $password, $database); // CONNECTION
    echo "Connected successfully" . "</br>";

    $sqlQuery = "SELECT * FROM employee";	
    $result = $mysqli->query($sqlQuery); 
    $outputInArrayFormat = $result->fetch_all(MYSQLI_ASSOC);
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
//======================================================================================================== 
include "Header.php";
?>

<div class="col">
    <div class="row" style="background-color:white; height: 200px; height: fit-content; margin: 5px;">
    <h3>Session State Data</h3>
    <?php
  if(isset($_SESSION["empEmail"]))  
        foreach ($outputInArrayFormat as $employee ){		
            if($employee['EmailAddress'] == $_SESSION["empEmail"] && $employee['PASSWORD'] == $_SESSION["empPass"]){
                echo 'success...<br>'; 
                echo $employee['EmailAddress'].'<br>';
                echo $employee['PASSWORD'].'<br>'; 
            }else{
 
            }
        }
    ?>
    </div>
    <div class="row" style="background-color:white; height: 250px; height:fit-content; margin: 5px;">
        <h3>Database Data</h3>
        <div class="col">
        <h5>First Name</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['FirstName'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>Last Name</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['LastName'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
            <h5>Email Address</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['EmailAddress'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>Phone Number</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['PhoneNumber'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>SIN</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['SocialInsuranceNumber'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>Password</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['PASSWORD'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include "Footer.php"; ?>