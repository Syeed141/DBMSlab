<?php
session_start();
include ('../connection.php');
if(isset($_POST["nam"]) && isset($_POST["id"]) && isset($_POST["home"]) && isset($_POST["phone"]) && isset($_POST["occu"])) {


$name=$_POST["nam"];
$eid=$_POST["id"];
$home=$_POST["home"];
$phone=$_POST["phone"];
$work=$_POST['occu'];

$sql= "select * from employeeinfo where EID= '$eid'  ";  //will check duplicate eid
                                
$result =mysqli_query($conn, $sql);


  if(empty($name)){  //validation for name

    header("location:addemployeefront.php?error=Employee name is required");
         exit();


             } 

             else  if (!preg_match("/^[a-zA-Z]*$/", $name)) {  //validation for name
                            
                header("location:addemployeefront.php?error=Only alphabets and whitespace are allowed for name.");
                exit();
            }

        else if(empty($eid)){

             header("location:addemployeefront.php?error= Employee ID is required");
                exit();
                        
                        
                 }  
                 
                 else  if (!preg_match ("/^[0-9]*$/", $eid) ){    //validation for eid
                    header("location:addemployeefront.php?error=EID must be numeric");
                    exit();
                    } 



                 else if(empty($home)){

                    header("location:addemployeefront.php?error=Address is required");
                       exit();
                               
                               
                        } 
                        else  if (!preg_match("/^[a-zA-Z]*$/", $home)) {  //validation for home
                            
                            header("location:addemployeefront.php?error=Only alphabets and whitespace are allowed for home address.");
                            exit();
                        }


                        else if(empty($phone)){

                            header("location:addemployeefront.php?error=Phone number is required");
                               exit();
                                       
                                       
                                } 

                                else  if (!preg_match ("/^[0-9]*$/", $phone) ){    //validation for eid
                                    header("location:addemployeefront.php?error=Phone number must be numeric");
                                    exit();
                                    } 

                                    else  if ( strlen($phone)!=11) {  

                                        header("location:addemployeefront.php?error=Phone number  must consist of 11 numeric values");
                                        exit();
                                            } 


                                  
                            
                                else if(empty($work)){

                                    header("location:addemployeefront.php?error=Occupation is required");
                                       exit();
                                               
                                               
                                        } 
                                                                            
                                                else  if (!preg_match("/^[a-zA-Z]*$/", $work)) {  //validation for name
                                                                
                                                    header("location:addemployeefront.php?error=Only alphabets and whitespace are allowed for occupation.");
                                                    exit();
                                                }
                 
                 
                                                    

                                                    else {

                                                        //$enc_password2=password_hash($paass,PASSWORD_DEFAULT);

                                                //$sql2= "select * from studentdata where ID= '$paass'  ";
                                                if(mysqli_num_rows($result)==1) {   //will check duplicate employee


                                                    

                                                    header("location:addemployeefront.php?error=Employee  already exists");
                                                    exit();

                                        
                                                                            }


                                              
                          

                                                                                            else {

                                                                                                $sql2="INSERT into employeeinfo (Name,
                                                                                                                        EID,HomeAddress,PhoneNumber,Occupation)
                                                                                                
                                                                                                values( '$name', $eid,'$home','$phone','$work' )";
                                                                                            
                                                                                            $result2 =mysqli_query($conn, $sql2);



                                                                                            header("location:../employeeinfooption.php?add=success");
                                                                                            exit();
                                                                                            
                                                                                        }


                                     

    }


}


else {

    header("location:addemployeefront.php");
    exit();
    
    
    }
