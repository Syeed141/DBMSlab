<?php
include('connection.php');
session_start();

if (isset($_SESSION["username"])) {

    $id= $_SESSION['id'];



?>
















<?php

$mysqli = new mysqli("localhost", "root", "", "noticeboard");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


$select_query = "SELECT * FROM notices";
$result = $mysqli->query($select_query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Notices</title>
</head>
<body>
    <h1>View Notices</h1>
    
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Date Added</th>
        </tr>
        <?php
        
        // if ($result->num_rows > 0) {
        //     while ($row = $result->fetch_assoc()) {
        //         echo "<tr>";
        //         echo "<td>" . $row['title'] . "</td>";
        //         echo "<td>" . $row['content'] . "</td>";
        //         echo "<td>" . $row['date_added'] . "</td>";
        //         echo "<td><a href='edit_notice.php?id=" . $row['id'] . "'>Update</a></td>"; // Add an Update link
        //         echo "</tr>";
        //     }
        // } else {
        //     echo "<tr><td colspan='4'>No notices available.</td></tr>";
        // }
    
        // Use PHP to fetch and display notices from the database
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['content'] . "</td>";
                echo "<td>" . $row['date_added'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No notices available.</td></tr>";
        }
        ?>
    </table>
    
</body>
</html>


<?php

} 





else {


    header("location:../login/logininterface.php ");
}



?>