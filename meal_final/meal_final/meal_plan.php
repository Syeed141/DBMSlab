<?php 
session_start();
if(isset($_SESSION["username"])){

  //STUDENTT HOMEEEE


?>










<!DOCTYPE html>
<html>
<head>
    <title>AUAH MEAL MANAGEMENT</title>
    <link rel="stylesheet" href="style.css">
      
    <script>
        function disableCheckboxes() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            
            if (hours < 7 || hours >= 24) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].disabled = true;
                }
            }
        }
        

        window.onload = disableCheckboxes;
    </script>
</head>
<body>
    <h1>Meal Plan for the <?php $currentMonthName = date('F'); echo $currentMonthName; ?> Month</h1>
    <form action="save_meal_plan.php" method="post">
    
        <table>
            <tr>
                <th>Day</th>
                <th>Date</th>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Dinner</th>
            </tr>
            <?php
            $currentYear = date('Y');
            $currentMonth = date('m');
            //$currentMonth = 2;
            //echo $currentMonth;
            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

            for ($day = 1; $day <= $daysInMonth; $day++) {
                $date = date("d-m-Y", strtotime("$currentYear-$currentMonth-$day"));
                $dayName = date("l", strtotime($date));

                echo "<tr>";
                echo "<td>$date</td>";
                echo "<td>$dayName</td>";
                echo "<td><input type='checkbox' name='breakfast[$day]' value='1'></td>";
                echo "<td><input type='checkbox' name='lunch[$day]' value='1'></td>";
                echo "<td><input type='checkbox' name='dinner[$day]' value='1'></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <input type="submit" name="save" value="Save">
    </form>
</body>
</html>
 <?php 

  }
 
 
 else {

header("location:../../logininterface.php");

 }
 
 
 ?>