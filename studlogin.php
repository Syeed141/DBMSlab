<?php
session_start();
include ('connection.php');
if(isset($_POST["nam"]) && isset($_POST["pas"])) {  //student login back


$name=$_POST["nam"];
$paass=$_POST["pas"];

  if(empty($name)){

    header("location:studentlogin.php?error=user name is required");
         exit();


             }

        else if(empty($paass)){

             header("location:studentlogin.php?error=Password is required");
                exit();
                        
                        
                 }

                            else {

                                //$enc_password2=password_hash($paass,PASSWORD_DEFAULT);

                        $sql= "select * from users where username= '$name'  ";
                                
                        $result =mysqli_query($conn, $sql);


                            if(mysqli_num_rows($result)==1){

                            $row=mysqli_fetch_assoc($result);

                            if(password_verify($paass,$row['password']) && $row['is_approved']==1){

                                $_SESSION['username']=$row['username'];
                                $_SESSION['id']=$row['id'];
                                header("location: home.php"); //student session starts
                                exit();
                            }

                            else if($row['is_approved']==0) {
                                header("location:studentlogin.php?error=Your account is  pending approval");
                                exit();
                                
                            }
                                            else {
                                            header("location:studentlogin.php?error=Incorrect username or password");
                                            exit();
                                            
                                        }


                                        }

                                        else {

                                            header("location:studentlogin.php?error=Incorrect username or password");
                                            exit();
                                            
                                            
                                        }

    }


}


else {

    header("location:studentlogin");
    exit();
    
    
    }

?>