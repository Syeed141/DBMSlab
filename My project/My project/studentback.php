<?php
if (isset($_POST["id"])) {
    $conn = mysqli_connect('localhost', 'root', '', 'auah');
    $a = $_POST["id"];

    $sql = "SELECT * FROM complain WHERE id = '$a'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<form action='update.php' method='post'>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Complain</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            // echo "<td>" . $row["id"] . "</td>";
            // echo "<td>" . $row["complain"] . "</td>";
            echo "<td><input type='number' name='id' value='" . $row["id"] . "'></td>";
            echo "<td><input type='text' name='complain' value='" . $row["complain"] . "'></td>";
            echo "<td><input type='submit' name='update' value='Update'></td>";
            echo "<td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</form>";
    }
} else {
    echo "ID not provided.";
}
?>
