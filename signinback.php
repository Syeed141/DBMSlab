<?php
session_start();
//STudent signup backend
include('connection.php');
if (isset($_POST["submit"]) ) {


    $name = $_POST["nam"];
    
    $id = $_POST["id"];
    $repaass = $_POST["apas"];
    $paass = $_POST["pas"];
    $dept= $_POST["dept"];
    $room=$_POST["room"];
    $phone= $_POST["phone"];

    
  

   

    

    $sql = "select * from users where id= '$id'  ";

    $result = mysqli_query($conn, $sql);




      if (mysqli_num_rows($result) > 0) {

          header("location:sign.php?error= ID is already taken");
            exit();
                                        } 

                                        $sql3 = "select * from users where username= '$name'  ";

    $result3 = mysqli_query($conn, $sql3);




      if (mysqli_num_rows($result3) > 0) {

          header("location:sign.php?error= Name is already taken");
            exit();
                                        } 
    


    else if (empty($name)) {

        header("location:sign.php?error=user name is required");
        exit();
    }  

                    else  if (!preg_match("/^[a-zA-Z ]*$/", $name)) {  //validation for name
                            
                            header("location:sign.php?error=Only alphabets and whitespace are allowed for user name.");
                            exit();
                        }
    
            

                    else if (empty($id)) {

                        header("location:sign.php?error=ID is required");
                        exit();
                                        } 

                                       else  if (!preg_match ("/^[0-9]*$/", $id) ){    //validation for id
                                        header("location:sign.php?error=ID must be numeric");
                                        exit();
                                        } 



                                        else if (empty($dept)) {

                                            header("location:sign.php?error=Department Name  is required");
                                            exit();
                                                } 

                                                else  if (!preg_match("/^[a-zA-Z ]*$/", $name)) {  //validation for department
                            
                                                    header("location:sign.php?error=Department must be alphabetical.");
                                                    exit();
                                                }


                                                else if (empty($room)) {

                                                    header("location:sign.php?error=room number  is required");
                                                    exit();
                                                        } 

                                                        else  if (!preg_match ("/^[0-9]*$/", $room) ){   //validation for room number
                                                            header("location:sign.php?error=Room number  must be numeric");
                                                            exit();
                                                            } 

                                                        
                                

                                                                                
                                                            else if (empty($phone)) {

                                                                header("location:sign.php?error=Phone number  is required");
                                                                exit();
                                                                    } 

                                                                    else  if (!preg_match ("/^[0-9]*$/", $phone) ){  //validation for phone uumber
                                                                        header("location:sign.php?error=Phone number  must be numeric");
                                                                        exit();
                                                                        }  


                                                                      else  if ( strlen($phone)!=11) {  

                                                                            header("location:sign.php?error=Phone number  must consist of 11 numeric values");
                                                                            exit();
                                                                                } 



                                                                        else if (empty($paass)) {

                                                                            header("location:sign.php?error=Password is required");
                                                                            exit();
                                                                                } 

                                                                                else  if ( strlen($paass)<=3) {   //length check of password

                                                                                    header("location:sign.php?error=Password  must be at least 4 characters long");
                                                                                    exit();
                                                                                        } 
                                    

                                                                                        else if (empty($repaass)) {

                                                                                    header("location:sign.php?error=Re-Password is required");
                                                                                    exit();
                                                                                        } 

                                                                                        


                                              
                                              

                                                            

                                                                                                else if ($paass !== $repaass) {

                                                                                                header("location:sign.php?error=Passwords are not matching");
                                                                                                exit();

                                                                                            }


                         
       
       
 else {

            $enc_password = password_hash($paass, PASSWORD_DEFAULT);

            $sql2 = "INSERT into users(id,
    username,password,Dept,RoomNumber,phone)
    
    values('$id', '$name', '$enc_password', '$dept','$room','$phone')";

            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {

                header("location:sign.php?success=Your account is successfully created. Waiting approval");
                exit();
            } 
            else {


                header("location:sign.php?error=unknown error occurred");
                exit();
            }
        }
    }


?>
