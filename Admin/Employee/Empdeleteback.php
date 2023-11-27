<?php

include ('./connection.php');

if (isset($_POST["deleteid"])) {
    $id = $_POST["deleteid"];

    $sql = "DELETE FROM employeeinfo WHERE SL = $id ";
    $result =mysqli_query($conn, $sql);


if($result){
      
    header('location:./employeeinfooption.php?no=success');
    exit();
}

else{

echo  "Error orrcured " ;
}
    
} else {
    // Handle the case where "delid" is not present in the URL.
    echo "The 'delid' parameter is missing.";
}

                              
                            

                          




?>