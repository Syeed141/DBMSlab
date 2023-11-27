<?php


include("connection.php");

if(isset($_POST["submit"])){


$name = $_POST['name'];
$status = $_POST['status'];
$date = date('Y-m-d');

// Insert attendance record into the database
$sql = "INSERT INTO employees (name, date, status) VALUES ('$name', '$date', '$status')";

$result=mysqli_query($conn, $sql);

if ($result) {
    echo "Attendance recorded successfully.";
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance System</title>
</head>
<body>
    <h1>Employee Attendance System</h1>

    <form action="submit_attendance.php" method="post">
        <label for="name">Employee Name:</label>
        <input type="text" name="name" required>
        
        <label for="status">Status:</label>
        <select name="status">
            <option value="Present">Present</option>
            <option value="Absent">Absent</option>
        </select>
        
        <input type="submit" value="Submit" name="submit" >
    </form>
</body>
</html>

