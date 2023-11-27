<?php
include('connection.php');
session_start();

if (isset($_SESSION["username"])) {

    $id= $_SESSION['id'];



?>









    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Options</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">

        <?php

if (isset($_GET['yes']) && $_GET['yes'] === 'success') {
    echo '<div class="alert alert-success" role="alert">Student information successfully updated!</div>';
}


?>

        <br>

      
        <br>

           
           <h2>AUAH STUDENT PERSONAL INFO</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Student ID Number</th>
                        <th scope="col">Name</th>
                       <th scope="col">Department</th> 
                       <th scope="col">RoomNumber</th> 
                       <th scope="col">PhoneNumber</th> 
                       <th scope="col">Operations</th> 
                        
                    </tr>

                </thead>
                <tbody>

                    <?php

                    $sql = "Select * from users where id='$id'    ";
                    $result = mysqli_query($conn, $sql);
                    
                    if ($result) {

                        while ($row = mysqli_fetch_array($result)) {

                            if ($row["is_approved"] == 1) {
                            $sl=$row["id"];
                          
                            $name = $row["username"];
                            $dept= $row["Dept"];
                            $room=$row["RoomNumber"];
                            $phone= $row["phone"];
                            echo    ' <tr>

                            <th scope="row" >' . $sl . '</th>   
                            <td>' . $name . '</td>
                            <td>' . $dept . '</td>
                            <td>' . $room . '</td>
                            <td>' . $phone. '</td>

                            <td>
                        
                         
                           <button class="btn btn-primary" onclick="return confirm(\'Are you sure you want to update?\')"><a href="./Admin/update/studentupdate.php"class="text-light" >Update</a></button>
                        
                           
       
                           </td>
                            

             
     
    
                                     </tr> ';
                        }
                    }
                }

                    ?>



                </tbody>
            </table>
        </div>


       <button class="btn btn-primary my-5">  <a href="../login/home.php" class="text-light"> Want to go back? </a> </button>  
       
        
    </html>


    <!-- <button class="btn btn-danger"  onclick="return confirm(\'Are you sure you want to delete?\')"><a href="./Admin/Delete/studentdeleteback.php" class="text-light" >Delete</a></button> -->

<?php

} 





else {


    header("location:../login/logininterface.php ");
}



?>