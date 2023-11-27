<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP </title>
    <link rel="stylesheet" type="text/css" href="s.css" > </link>
</head>
<body>
    <form action="signinback.php" method="post">
    <h2> Sign-up <h2/> 
    <br/>

    <?php
 if(isset($_GET["error"])){
 ?>
 <p class="error"> <?php echo $_GET["error"];  ?> </p>
 
 <?php } ?>


 
 <?php
 if(isset($_GET["success"])){ //student account creation form
 ?>
 <p class="success"> <?php echo $_GET["success"];  ?> </p>
 
 <?php } ?>
    

 
<label> User Name </label>
<input type= "text" name ="nam" placeholder="User name " >

<label> User ID </label>
<input type= "text" name ="id" placeholder="User ID " >

<label> User Department name </label>
<input type= "text" name ="dept" placeholder="Department " >

<label> User Room number </label>
<input type= "text" name ="room" placeholder="Room number " >
<label> User Phone number </label>
<input type= "text" name ="phone" placeholder="Phone number " >

<label> Password </label>
<input type= "password" name ="pas" placeholder="Password " >

<label>Again enter Password </label>
<input type= "password" name ="apas" placeholder="RE-Password " >

<button type="Submit" name="submit" > Login </button>

<a  href="logininterface.php " class="ac"> Already have an account? </a>
</form>
</body>
</html>