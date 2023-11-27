<?php
session_start();
include ('connection.php');
if(isset($_POST["nam"]) && isset($_POST["id"])) {


$name=$_POST["nam"];
$paass=$_POST["id"];

$sql= "select * from studentdata where SName= '$name'  ";  //will check duplicate name
                                
$result =mysqli_query($conn, $sql);


  if(empty($name)){

    header("location:studentadd.php?error=user name is required");
         exit();


             }

        else if(empty($paass)){

             header("location:studentadd.php?error=ID is required");
                exit();
                        
                        
                 }   
                 
                 
                 else if(mysqli_num_rows($result)==1) {   //will check duplicate name


                   

                            header("location:studentadd.php?error=student Name already exists");
                            exit();

                   
                                                     }



                                                    else {

                                                        //$enc_password2=password_hash($paass,PASSWORD_DEFAULT);

                                                $sql2= "select * from studentdata where ID= '$paass'  ";
                                                        
                                                $result2 =mysqli_query($conn, $sql2);


                                                    if(mysqli_num_rows($result2)==1){
                                                    


                                                        header("location:studentadd.php?error=student ID already exists");
                                                        exit();

                                                    }

                          

                                                                                            else {

                                                                                                $sql2="INSERT into studentdata (ID,
                                                                                                SName)
                                                                                                
                                                                                                values( '$paass', '$name' )";
                                                                                            
                                                                                            $result2 =mysqli_query($conn, $sql2);



                                                                                            header("location:studentadd.php?success=student added");
                                                                                            exit();
                                                                                            
                                                                                        }


                                     

    }


}


else {

    header("location:studentinfooption.php");
    exit();
    
    
    }

?>