<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Complain Box</title>
    
</head>
<body>
    <div class="text">
        <form action="connect.php" method="post">
            <h1>Complain Box</h1> <br> <br>
            <label for="id">Enter your ID:</label><br>
            <input type="number" name="id"> <br> <br>
            <label for="complain">Write your complain:</label> <br>
            <textarea name="complain" cols="20" rows="5"></textarea><br>
            <input type="submit">
            <button><a href="c2.php">View</a></button>
        </form>
    </div>
</body>
</html>
