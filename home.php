
<?php 
session_start();
if(isset($_SESSION["username"])){
    
  //STUDENTT HOMEEEE


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT HOME</title>
    <link rel="stylesheet" href="./student.css" > </link>
</head>
<body>
    <h1> Hello, <?php  echo  $_SESSION["username"]  ?> !</h1>
    <div class = "container">
    <ol>
    
    <h3> <a  href="./studnetpersonalinfo.php" class="admin" > Account Information </a> </h3>
    <h3> <a  href="../login/meal_final/meal_final/meal_plan.php" class="admin" > Meal plan </a> </h3>
     <h3> <a  href="../login/meal_menu/meal_menu/meal_menu.php" class="admin" > Meal Menu </a> </h3>
     <h3> <a href="./notice/notice/student_view.php" class="admin" > View notices </a> </h3>
     <h3> <a  href="./My project/My project/student.php" class="admin" > Complain box </a> </h3>
    <!-- <h3> <a href="./Employee/Attendance/viewattendance.php" class="admin" > Employeee Attendance</a> </h3> -->

    </ol>

</div>
    
<div class=" logout " >

    
    <a  href="logout.php"> Logout </a>

</div>
</body>
</html>

<?php
}




else {

    header("location:index.php");
    exit();


}




?>