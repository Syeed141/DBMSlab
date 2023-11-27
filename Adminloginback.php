<?php
session_start();
//Admin login back
include ('connection.php');
if(isset($_POST["nam"]) && isset($_POST["pas"])) {


$name=$_POST["nam"];
$pass=$_POST["pas"];

if(empty($name)){

header("location:Adminloginfront.php?error=user name is required");
exit();


}

        else if(empty($pass)){

            header("location:Adminloginfront.php?error=Password is required");
            exit(); 
            
           }

                                else {

                            $sql= "select * from admin where Username='$name' ";
                                    
                            $result =mysqli_query($conn, $sql);


                                        if(mysqli_num_rows($result)==1){

                                            $row=mysqli_fetch_assoc($result);

                             if(password_verify($pass,$row['Password'])){

                                $_SESSION['username']=$row['Username'];
                                               
                                header("location:./Admin/Adminhome.php "); //admin session starts
                                exit(); 

                             }

                             else {
                                header("location:Adminloginfront.php?error=Incorrect Password");
                                exit();
                                
                            }
                                         
      

                             } 
                             else {

                                header("location:Adminloginfront.php?error=Admin info not found");
                                exit();



                             }
                                      }

                                      
                                    }


                                    else {
                                        header("location:Adminloginfront.php?error=Admin id not found");
                                        exit();

                                      
                                         
                                        }

                                                    

                                                                     

                                                

                    

                

            


?>