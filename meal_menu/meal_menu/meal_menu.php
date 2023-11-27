<!DOCTYPE html>
<html>
<head>
    <title>Meal Menu</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>

<h1>Meal Menu</h1>

<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "meal_69";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM meal_menu";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Dinner</th></tr>";

    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["day_name"] . "</td>";
        echo "<td>" . $row["breakfast"] . "</td>";
        echo "<td>" . $row["lunch"] . "</td>";
        echo "<td>" . $row["dinner"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>

</body>
</html>
