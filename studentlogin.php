<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello </title>
    <link rel="stylesheet" type="text/css" href="s.css" > </link>
</head>
<body>
    <form action="studlogin.php" method="post">
        
    <h2> STUDENT LOGIN <h2/> 
 <?php
 if(isset($_GET["error"])){
 ?>
 <p class="error"> <?php echo $_GET["error"];  ?> </p>
 
 <?php } ?>


    <br/>
<label> User Name </label>
<input type= "text" name ="nam" placeholder="User name " >

<label> Password </label>
<input type= "password" name ="pas" placeholder="Password " >

<button type="Submit" > Login </button>
<a  href="sign.php " class="ac"> Create an account </a>
</form>
</body>
</html>