<?php

include ('./connection.php');
if( isset($_GET["delid"])  ) {



$id= $_GET["delid"];
  

                           
                                
                           $sql = "DELETE FROM employees WHERE id = $id ";
                                $result =mysqli_query($conn, $sql);


                            if($result){
                                  
                                header('location:./viewattendance.php ');
                                exit();
}

else{

    echo  "Error orrcured " ;
}


                            }
                              
                            

                          
else {

    echo" could not get " ;
    // header("location:../studentinfooption.php ");
    // exit();



}

         



?>