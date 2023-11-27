




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP </title>
    <link rel="stylesheet" type="text/css" href="../s.css" > </link>
</head>
<body>



    <form action="addadminback.php" method="post">
    
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
    

 
<label> Admin Name </label>
<input type= "text" name ="nam" placeholder="Admin name " >

<label> Admin Phone number </label>
<input type= "text" name ="phone" placeholder="Phone number " >

<label> Home address </label>
<input type= "text" name ="home" placeholder="Home" >

<label> Password </label>
<input type= "password" name ="pas" placeholder="Password " >

<label>Again enter Password </label>
<input type= "password" name ="apas" placeholder="RE-Password " >

<button type="Submit" name="submit" > ADD </button>

<a  href="./admininfofront.php " class="ac"> Want to go back? </a>
</form>

</body>
</html>



