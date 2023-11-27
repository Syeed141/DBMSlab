<?php 
session_start();
include("connection.php");
if(isset($_SESSION["username"])) {




?>







<?php

$mysqli = new mysqli("localhost", "root", "", "noticeboard");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


$id = "";
$title = "";
$content = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $select_query = "SELECT * FROM notices WHERE id = $id";
    $result = $mysqli->query($select_query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
    } else {
        echo "Notice not found.";
        exit;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newTitle = $_POST['title'];
    $newContent = $_POST['content'];

    if ($id) {
        
        $update_query = "UPDATE notices SET title = '$newTitle', content = '$newContent' WHERE id = $id";

        if ($mysqli->query($update_query) === TRUE) {
            echo "Notice updated successfully.";
        } else {
            echo "Error updating notice: " . $mysqli->error;
        }
    } else {
        
        $insert_query = "INSERT INTO notices (title, content) VALUES ('$newTitle', '$newContent')";

        if ($mysqli->query($insert_query) === TRUE) {
            echo "Notice added successfully.";
        } else {
            echo "Error adding notice: " . $mysqli->error;
        }
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Notices</title>
</head>
<body>
<style>
    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #3498db; 
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin: 5px;
        text-align: center;
    }
</style>

    <h1>Manage Notices</h1>

    
    <form action="manage_notices.php<?php if ($id) echo "?id=$id"; ?>" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $title; ?>" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" rows="4" required><?php echo $content; ?></textarea>
        <br>
        <button class="button" type="submit"><?php echo $id ? "Update" : "Add" ?> Notice</button>
    </form>
    <a class="button" href="view_notices.php">View Notices</a>
    
</body>
</html>


<?php

 }

else {


    header("location: ../../logininterface.php ");
}



 ?>