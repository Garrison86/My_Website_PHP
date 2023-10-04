<?php
session_start(); 

include "Header.php";
//========================================================================================= Submit
    // if (isset($_POST["submit"]))
    if (isset($_POST["empEmailTextBox"]) && isset($_POST["passTextBox"]))
    {
        $_SESSION["empEmail"] = $_POST["empEmailTextBox"];
        $_SESSION["empPass"] = $_POST["passTextBox"];
        header("Location: ViewAllEmployees.php");
        exit;
    }

//========================================================================================= Form below
?>

<div class="row container-fluid" style="text-align: center">
    <div class="left-side" style="height: 400px; ">
        <br>
        <h3>Create your new Account</h3>


<?php // Form to be used in filling out email and password, if matches should bring user to ViewAllEmployees.php
?>
        <form method="post">
            <div class="col">
                <br>
                <input type="text" name="empEmailTextBox" placeholder="Email Address?" style="margin:2px;" />
                <br>
                <input type="text" name="passTextBox" placeholder="Password" style="margin:2px;" />
                <br><br>
                <input type="submit" value="Submit Information" />
            </div>
        </form>
    
    </div>
</div>
<?php include "Footer.php";
?>