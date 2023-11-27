
<?php 
session_start();
if(isset($_SESSION["username"])){
    $id= $_SESSION['id'];
  //STUDENTT HOMEEEE


?>







<?php

date_default_timezone_set('Asia/Dhaka');


$allowedStartTime = strtotime('7:00:00');
$allowedEndTime = strtotime('24:00:00');


$currentTime = strtotime(date('H:i:s'));


if ($currentTime >= $allowedStartTime && $currentTime <= $allowedEndTime) {
    

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "meal";

    
    $conn = new mysqli($servername, $username, $password, $database);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['save'])) {
        
        for ($day = 1; $day <= 31; $day++) {
            $breakfast = isset($_POST['breakfast'][$day]) ? 1 : 0;
            $lunch = isset($_POST['lunch'][$day]) ? 1 : 0;
            $dinner = isset($_POST['dinner'][$day]) ? 1 : 0;
            


            
            $checkSql = "SELECT * FROM meal_plan WHERE day='$day'";
            $result = $conn->query($checkSql);

            if ($result->num_rows > 0) {
                
                $updateSql = "UPDATE meal_plan SET id=$id, breakfast='$breakfast', lunch='$lunch', dinner='$dinner' WHERE day='$day'";
                if ($conn->query($updateSql) !== TRUE) {
                    echo "Error updating record: " . $conn->error;
                }
            } else {
                
                $insertSql = "INSERT INTO meal_plan (id,day, breakfast, lunch, dinner) VALUES ('$id','$day', '$breakfast', '$lunch', '$dinner')";
                if ($conn->query($insertSql) !== TRUE) {
                    echo "Error inserting record: " . $conn->error;
                }
            }
        }

        echo "Meal plan saved successfully!";
    }

    
    $conn->close();
} else {
    echo "Time not allow ";
}
?>


<?php 

  }
 
 
 else {

header("location:../../logininterface.php");

 }
 
 
 ?>