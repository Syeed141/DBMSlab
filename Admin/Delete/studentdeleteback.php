<?php

include ('../connection.php');
if( isset($_GET["deleteid"])  ) {



$id= $_GET["deleteid"];
  

                           
                                
                           $sql = "DELETE FROM users WHERE id = $id ";
                                $result =mysqli_query($conn, $sql);


                            if($result){
                                  
                                header('location:../studentinfooption.php?deletion=success');
                                exit();
}

else{

    echo  "Error orrcured " ;
}


                            }
                              
                            

                          
else {
    header("location:../../logininterface.php ");
    exit();



}

         



?>