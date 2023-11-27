
<?php 
session_start();
if(isset($_SESSION["username"])){

  
   

    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="shamscss.css" > </link>
</head>
<body>
    <h1> Hello, <?php  echo  $_SESSION["username"]  ?> !</h1>


    <div class = "container">
    <ol>
    <h3> <a href="./admininfofront.php" class="admin" > Admin info </a> </h3>
    <h3> <a href="studentinfooption.php" class="admin" > Student information </a> </h3>
    <h3> <a href="./Employee/employeeinfooption.php" class="admin" > Employee information </a> </h3>
    <h3> <a href="./Employee/Attendance/viewattendance.php" class="admin" > Employeee Attendance</a> </h3>
    <h3> <a href="../meal_menu/meal_menu/update_meal.php" class="admin" > Update meal menu </a> </h3>
    <h3> <a href="../notice/notice/manage_notices.php" class="admin" > Manage Notice </a> </h3>
    <h3> <a href="../My project/My project/backread.php" class="admin" > Read complains from students </a> </h3>
 


    </ol>

</div>

    <div class=" logout " >
    <a  href="../logout.php"> Logout </a>

    </div>
</body>
</html>

<?php
}




else {

    header("location:../logininterface.php");
    exit();


}




?>