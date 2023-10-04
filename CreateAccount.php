<?php 
session_start(); 
include "Header.php";

//========================================================================================= Submit
if (isset($_POST["firstNameTextBox"]) 
&& isset($_POST["LastNameTextBox"]) 
&& isset($_POST["empEmailTextBox"]) 
&& isset($_POST["TeleTextBox"]) 
&& isset($_POST["SinTextBox"]) 
&& isset($_POST["passWord"])) // if statment for all feilds
{ 
    $_SESSION["empFirstName"] = $_POST["firstNameTextBox"];
    $_SESSION["empLastName"] = $_POST["LastNameTextBox"];
    $_SESSION["empEmail"] = $_POST["EmailTextBox"];
    $_SESSION["empTele"] = $_POST["TeleTextBox"];
    $_SESSION["empSIN"] = $_POST["SinTextBox"];
    $_SESSION["empPass"] = $_POST["passWord"];
    
    // header("Location: MySQLInsert.php");
    header("Location: MySQLInsert.php");
    exit;
} 
// else {
//     echo 'empty fields left...';
// }
?>

<div class="row container-fluid" style="text-align: center">
    <div class="left-side" style="height: 400px; ">
        <br>
        <h3>Create your new Account</h3>

        <?php // Form to be used in filling out email and password, if matches should bring user to ViewAllEmployees.php?>
        <form method="post" action="MySQLInsert.php">
            <div class="col">
                <input type="text" name="firstNameTextBox" placeholder="First Name?" style="margin:2px;" />
                <br>
                <input type="text" name="LastNameTextBox" placeholder="Last Name?" style="margin:2px;" />
                <br>
                <input type="text" name="EmailTextBox" placeholder="Email Address?" style="margin:2px;" />
                <br>
                <input type="text" name="TeleTextBox" placeholder="Telephone Number?" style="margin:2px;" />
                <br>
                <input type="text" name="SinTextBox" placeholder="SIN" style="margin:2px;" />
                <br>
                <input type="text" name="passWord" placeholder="Password" style="margin:2px;" />
                <br><br>
                <input type="submit" value="Submit Information" />
            </div>
        </form>


    </div>
</div>

   
<?php
include "Footer.php";
?>