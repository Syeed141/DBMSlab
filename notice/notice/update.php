<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['content'] . "</td>";
        echo "<td>" . $row['date_added'] . "</td>";
        echo "<td><a href='edit_notice.php?id=" . $row['id'] . "'>Update</a></td>"; // Add an Update link
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No notices available.</td></tr>";
}
?>
