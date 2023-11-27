
<?php 
session_start();
include("connection.php");
if(isset($_SESSION["username"])) {




?>






<!DOCTYPE html>
<html>
<head>
    <style>
        /* Button styles */
        .my-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Button hover effect */
        .my-button:hover {
            background-color: #2980b9;
        }
        
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #F9B572; /* Change the background color here */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #F9B572;
        }

        tr:nth-child(even) {
            background-color: #F9B572;
        }

        tr:nth-child(odd) {
            background-color: #F9B572;
        }
    </style>
</head>
<body>
    <!-- //<a href="c.php">Home</a> -->
    <a href="c.php" class="my-button">Home</a>
    <table>
        <tr>
            <th>id</th>
            <th>complain</th>
        </tr>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'auah');
        $sql = "select * from complain";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_num_rows($result);

        if ($data) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['complain']; ?></td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="2">No record</td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>


<?php

 }

else {


    header("location: ../../logininterface.php ");
}



 ?>