<?php 
session_start();
include("connection.php");
if(isset($_SESSION["username"])) {




?>







<!DOCTYPE html>
<html>
<head>
    <title>Update Meal</title>
    <link rel="stylesheet"  href="updatemeal.css">
</head>
<body>
<h1>Update Meal</h1>

<form method="post" action="update_meal_process.php">
    <label for="day_name">Select Day:</label>
    <select name="day_name">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
    </select><br>

    <label for="breakfast">Breakfast:</label>
    <input type="text" name="breakfast"><br>

    <label for="lunch">Lunch:</label>
    <input type="text" name="lunch"><br>

    <label for="dinner">Dinner:</label>
    <input type="text" name="dinner"><br>

    <input type="submit" value="Update">
</form>

</body>
</html>


<?php

 }

else {


    header("location: ../../logininterface.php ");
}



 ?>