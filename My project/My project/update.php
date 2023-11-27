<?php
    $conn = mysqli_connect('localhost', 'root', '', 'auah');
    
    if(isset($_POST["id"])){
        $a = $_POST["id"];
        $newComplain = $_POST["complain"];

        $sql = "UPDATE complain SET complain='$newComplain' WHERE id='$a'";
        if (mysqli_query($conn, $sql)) {
            echo "Complaint updated successfully!";
        } else {
            echo "Error updating complaint: " . mysqli_error($conn);
        }
    }

    // Fetch the complaint details for the form
    $a = $_POST["id"];
    $sql = "SELECT * FROM complain WHERE id='$a'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>
<div>
    <form  method="post">
        <label for="id">Enter your ID:</label><br>
        <input type="number" name="id" value="<?php echo $row['id']; ?>"><br><br>
        <label for="complain">Write your complain:</label><br>
        <textarea name="complain" cols="20" rows="5"><?php echo $row['complain']; ?></textarea><br>
        <input type="submit" name="update" value="Update">
        <button><a href="c2.php">View</a></button>
    </form>
</div>
<?php
    } else {
        echo "No complaints found with the provided ID.";
    }
?>
