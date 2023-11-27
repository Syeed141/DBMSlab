
<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "meal_69";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $day_name = $_POST["day_name"];
    $new_breakfast = $_POST["breakfast"];
    $new_lunch = $_POST["lunch"];
    $new_dinner = $_POST["dinner"];

    
    $update_sql = "UPDATE meal_menu SET breakfast='$new_breakfast', lunch='$new_lunch', dinner='$new_dinner' WHERE day_name='$day_name'";

    if ($conn->query($update_sql) === TRUE) {
        echo "Meal updated successfully.";
    } else {
        echo "Error updating meal: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Meal Result</title>
</head>
<body>
    <p><a href="update_meal.php">Go back to update more meals</a></p>
</body>
</html>
