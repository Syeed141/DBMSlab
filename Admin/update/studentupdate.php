<?php
session_start();
include('connection.php');
if (isset($_SESSION["username"])) {
 
   
    
    if (isset($_POST["submit"])) {
      
        $uid = $_SESSION['id'];
       
        $name = $_POST["nam"];
    
     
     
        $dept= $_POST["dept"];
        $room=$_POST["room"];
        $phone = $_POST["phone"];
        

        if (empty($name)) {

           

            header("location:studentupdate.php?error= Student name is required");
           
            exit();
       
        }

                 
                            else  if (!preg_match("/^[a-zA-Z ]*$/", $name)) {  //validation for name
                                                
                                header("location:studentupdate.php?error=Only alphabets and whitespace are allowed for user name.");
                                exit();
                            } 


                             
                            else if (empty($dept)) {
            
                                header("location:studentupdate.php?error=Department Name  is required");
                                exit();
                                    }     


                                    else  if (!preg_match("/^[a-zA-Z ]*$/", $dept)) {  //validation for name
                                                
                                        header("location:studentupdate.php?error=Only alphabets and whitespace are allowed for department name.");
                                        exit();
                                    } 
        
        
                                       

                                       
                                    else if (empty($room)) {
            
                                        header("location:studentupdate.php?error=room number  is required");
                                        exit();
                                            }   
                                            
                                            else  if (!preg_match ("/^[0-9]*$/", $room) ){    //validation for id
                                                header("location:studentupdate.php?error=Room number must be numeric");
                                                exit();
                                                } 

                                                
                              
                                                
                                            else if (empty($phone)) {
            
                                                header("location:studentupdate.php?error=Phone number  is required");
                                                exit();
                                                    }   

                                                                
                                                        else  if (!preg_match ("/^[0-9]*$/", $phone) ){    //validation for id
                                                            header("location:studentupdate.php?error=Phone number must be numeric");
                                                            exit();
                                                            } 

                                                            else  if ( strlen($phone)!=11) {  

                                                                header("location:studentupdate.php?error=Phone number  must consist of 11 numeric values");
                                                                exit();
                                                                    } 

                              
            
                                    
                                    
            
            




        else{


    
           

            $sql2 = "UPDATE users SET username='$name' ,Dept='$dept', RoomNumber='$room', phone='$phone' WHERE id = $uid ";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
            header("location:../../studnetpersonalinfo.php?yes=success");
            exit();

            }

            else {

                echo "Error occured";
            }
        }
    }


   

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student info </title>
        <link rel="stylesheet" type="text/css" href="shamscss.css">
        </link>
    </head>

    <body>
        <form method="post">
            <h2> AUAH </h2>
            <h2>STUDENT INFO UPDATING PORTAL </h2>
            <br />


            <?php
            if (isset($_GET["error"])) {
            ?>
                <p class="error"> <?php echo $_GET["error"];  ?> </p>

            <?php } ?>



            <?php
            if (isset($_GET["success"])) {
            ?>
                <p class="success"> <?php echo $_GET["success"];  ?> </p>

            <?php } 
            
?>

 
 
<label> User Name </label>
<input type= "text" name ="nam" placeholder="User name " >



<label> User Department name </label>
<input type= "text" name ="dept" placeholder="User name " >

<label> User Room number </label>
<input type= "text" name ="room" placeholder="User name " >
<label> User Phone number </label>
<input type= "text" name ="phone" placeholder="User name " >



<button type="Submit" name="submit" > Update </button>



            <a href="../../studnetpersonalinfo.php" class="ac"> Want to go back? </a>
        </form>
    </body>

    </html>



<?php

} 


else {


    header("location:../../logininterface.php ");
}



?>