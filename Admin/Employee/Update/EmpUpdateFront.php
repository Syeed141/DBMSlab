



<?php 
session_start();
include ('../connection.php');
if(isset($_SESSION["username"])) {

   
    if(isset($_POST["submit"])){

     $uid= $_SESSION['deleteid'];
    $name=$_POST["name"];
    $eid=$_POST["eid"];
    $home=$_POST["home"];
    $phone=$_POST["phone"];
    $work=$_POST['occu'];


    if(empty($eid)){
    
        header("location:EmpUpdateFront.php?error= Employee EID is required");
           exit();
                   
                   
            }   

            else  if (!preg_match ("/^[0-9]*$/", $eid) ){   
                header("location:EmpUpdateFront.php?error=EID must be numeric");
                exit();
                } 

    else  if(empty($name)){

        header("location:EmpUpdateFront.php?error=Employee name is required");
             exit();
    
    
                 }
                 else  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  //validation for name
                                                
                    header("location:EmpUpdateFront.php?error=Only alphabets and whitespace are allowed for employee name.");
                    exit();
                } 


                     
                else if(empty($phone)){
    
                    header("location:EmpUpdateFront.php?error=Phone number is required");
                       exit();
                               
                               
                        }    
                        
                        else  if (!preg_match ("/^[0-9]*$/", $phone) ){   
                            header("location:EmpUpdateFront.php?error=Phone number must be numeric");
                            exit();
                            } 

                            else  if ( strlen($phone)!=11) {  

                                header("location:EmpUpdateFront.php?error=Phone number  must consist of 11 numeric values");
                                exit();
                                    } 

    
           
                     else if(empty($home)){
    
                        header("location:EmpUpdateFront.php?error=Address is required");
                           exit();
                                   
                                   
                            } 

                            else  if (!preg_match("/^[a-zA-Z ]*$/",$home)) {  //validation for name
                                                
                                header("location:EmpUpdateFront.php?error=Only alphabets and whitespace are allowed for home address.");
                                exit();
                            } 
            
    
    
    
                                
                                    else if(empty($work)){
    
                                        header("location:EmpUpdateFront.php?error=Occupation is required");
                                           exit();
                                                   
                                                   
                                            } 
                                               
                                            else  if (!preg_match("/^[a-zA-Z ]*$/",$work)) {  //validation for name
                                                
                                                header("location:EmpUpdateFront.php?error=Only alphabets and whitespace are allowed for occupation.");
                                                exit();
                                            } 
                            
                            


                                                                    
                                                    else {

                                                        
                                                        $sql= "select * from employeeinfo where EID= $eid ";
                                                                
                                                        $result =mysqli_query($conn, $sql);
                                
                                
                                                            if(mysqli_num_rows($result)==1){
                                                            
                                                            
                                                                
                                                                // $sql2 = "UPDATE employeeinfo SET Name = '$name', HomeAddress='$home',PhoneNumber='$phone', Occupation='$work' WHERE EID = $eid ";
                                                                // $result2 =mysqli_query($conn, $sql2);
                                                                
                                                                header("location:EmpUpdateFront.php?error=EID is already taken");
                                                                exit();
                                
                                                            }

                                                            else {

                                                                $sql2 = "UPDATE employeeinfo SET Name = '$name', EID=$eid, HomeAddress='$home',PhoneNumber='$phone', Occupation='$work' WHERE SL=$uid";
                                                                $result2 =mysqli_query($conn, $sql2);
                                                                header("location:../employeeinfooption.php?yes=success");
                                                                exit();
                                

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
    <link rel="stylesheet" type="text/css" href="./Empupdate.css" > </link>
</head>
<body>
    <form method="post">
    <h2> AUAH  </h2> 
    <h2>EMPLOYEE INFO UPDATING PORTAL </h2>
    <br/>

    <?php
 if(isset($_GET["error"])){
 ?>
 <p class="error"> <?php echo $_GET["error"];  ?> </p>
 
 <?php } ?>


 
 <?php
 if(isset($_GET["success"])){
 ?>
 <p class="success"> <?php echo $_GET["success"];  ?> </p>
 
 <?php } ?>
    

 


<label> Enter Employee new EID </label>
<input type= "text" name ="eid" placeholder="New EID " >
<label> Enter new Name :  </label>
<input type= "text" name ="name" placeholder="New Name " >

<label> Enter new Phone Number :  </label>
<input type= "text" name ="phone" placeholder="New phone number " >

<label> Enter new Home Address:  </label>
<input type= "text" name ="home" placeholder="New home address " >

<label> Enter new Occupation :  </label>
<input type= "text" name ="occu" placeholder="New occupation " >




<button type="Submit" name="submit" > Update </button>
<button class="btn btn-primary"> <a  href="../employeeinfooption.php " class="ac"> Want to go back? </a></button>

</form>
</body>
</html>

<?php

 }

else {


    header("location:../../../logininterface.php ");
}



 ?>