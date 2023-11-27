<?php
session_start();
//STudent signup backend
include('connection.php');
if (isset($_POST["submit"]) ) {


    $name = $_POST["nam"];
  
    
    $phone= $_POST["phone"];
    $home=$_POST["home"];
      
    $paass = $_POST["pas"];
    $repaass = $_POST["apas"];
   
    
  

   

    

    $sql = "select * from admin where Username='$name'   ";

    $result = mysqli_query($conn, $sql);




      if (mysqli_num_rows($result) > 0) {

          header("location:addadmin.php?error= Admin already exists");
            exit();
                                        } 
    


    else if (empty($name)) {

        header("location:addadmin.php?error=user name is required");
        exit();
    }  

                    else  if (!preg_match("/^[a-zA-Z ]*$/", $name)) {  //validation for name
                            
                            header("location:addadmin.php?error=Only alphabets and whitespace are allowed for Admin name.");
                            exit();
                        }
    
            
                                                                                
                                                            else if (empty($phone)) {

                                                                header("location:addadmin.php?error=Phone number  is required");
                                                                exit();
                                                                    } 

                                                                    else  if (!preg_match ("/^[0-9]*$/", $phone) ){  //validation for phone uumber
                                                                        header("location:addadmin.php?error=Phone number  must be numeric");
                                                                        exit();
                                                                        }  


                                                                      else  if ( strlen($phone)!=11) {  

                                                                            header("location:addadmin.php?error=Phone number  must consist of 11 numeric values");
                                                                            exit();
                                                                                } 



                                                                                else if (empty($home)) {

                                                                                    header("location:addadmin.php?error=Home address is required");
                                                                                    exit();
                                                                                }  
                                                                            
                                                                                                else  if (!preg_match("/^[a-zA-Z ]*$/", $home)) {  
                                                                                                        
                                                                                                        header("location:addadmin.php?error=Only alphabets and whitespace are allowed for home address.");
                                                                                                        exit();
                                                                                                    }



                                                                        else if (empty($paass)) {

                                                                            header("location:addadmin.php?error=Password is required");
                                                                            exit();
                                                                                } 

                                                                                else  if ( strlen($paass)<=3) {   //length check of password

                                                                                    header("location:addadmin.php?error=Password  must be at least 4 characters long");
                                                                                    exit();
                                                                                        } 
                                    

                                                                                        else if (empty($repaass)) {

                                                                                    header("location:addadmin.php?error=Re-Password is required");
                                                                                    exit();
                                                                                        } 


                                                                                                else if ($paass !== $repaass) {

                                                                                                header("location:addadmin.php?error=Passwords are not matching");
                                                                                                exit();

                                                                                            }


                         
       
       
 else {

            $enc_password = password_hash($paass,PASSWORD_DEFAULT);

            $sql2 = "INSERT INTO admin (Username,Home,Phone,Password) VALUES ('$name','$home','$phone', '$enc_password')";

            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {

                header("location:admininfofront.php?yes=success");
                exit();
            } 
            else {


                header("location:addadmin.php?error=unknown error occurred");
                exit();
            }
        }
    }


?>
