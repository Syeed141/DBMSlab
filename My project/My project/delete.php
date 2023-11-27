<?php
$a = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', 'auah');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM complain WHERE id='$a'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Delete successfully";
} else {
    echo "Failed: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
