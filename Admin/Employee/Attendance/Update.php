

<?php 
session_start();
include ('./connection.php');


if(isset($_SESSION["username"])) {
    
if(isset($_POST["submit"])) {

$name = $_POST['name'];
$status = $_POST['status'];
$date = date('Y-m-d');

$id=$_GET["updateid"];


$sql=" UPDATE employees SET name='$name', date='$date', status='$status' where id=$id order by date DESC";
$result=mysqli_query($conn,$sql);
if($result) {

    echo" Successfully updated ";
 
    header("location:./viewattendance.php");


}

else {

   echo"Echo occured " ;

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

    <form method="post">
        <label for="name">Enter Employee Name:</label>
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

<?php 

}


else {


    echo "Session has not started yet";
}

?>