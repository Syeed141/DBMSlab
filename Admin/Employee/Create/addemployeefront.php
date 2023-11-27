<?php
session_start();

if (isset($_SESSION["username"])) {




?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student info </title>
        <link rel="stylesheet" type="text/css" href="./addemployee.css">
        </link>
    </head>

    <body>
        <form action="addEmpback.php" method="post">
            <h2> AUAH </h2>
            <h2>EMPLOYEE ADD PORTAL </h2>
            <br />

            <?php
            if (isset($_GET["error"])) {
            ?>
                <p class="error"> <?php echo $_GET["error"];  ?> </p>

            <?php } ?>



            <?php
            if (isset($_GET["success"])) {
            ?>
                <p class="success"> <?php echo $_GET["success"];  ?> </p>

            <?php } ?>



            <label> Employee Name </label>
            <input type="text" name="nam" placeholder="User name ">

            <label> Employee ID </label>
            <input type="text" name="id" placeholder="ID ">

            <label> Home address </label>
            <input type="text" name="home" placeholder="Address ">

            <label> Employee Phone Number </label>
            <input type="text" name="phone" placeholder="phone">

            <label> Occupation </label>
            <input type="text" name="occu" placeholder="Occupation ">







            <button type="Submit"> ADD </button>
            <a href="../employeeinfooption.php" class="ac"> Want to go back? </a>
        </form>
    </body>

    </html>
<?php

} else {


    header("location:../../../logininterface.php ");
}



?>