<?php 
session_start();
include("connection.php");
if(isset($_SESSION["username"])) {




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
<button class="btn btn-primary my-5" > <a href="./submit_attendance.php "  class="text-light">ADD EMPLOYEE Attendance</a>  </button>


<h2>AUAH EMPLOYEE ATTENDANCE INFO</h2>

    


     <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Operations</th>
      
      
    </tr>
  </thead>
  <tbody>

  <?php 
  
  $sql="Select * from employees order by date DESC";
  $result=mysqli_query($conn,$sql);
  if($result){

   while($row=mysqli_fetch_assoc($result)){

    $sl=$row["id"];
    $name=$row["name"];
    $date=$row["date"];
    $stat=$row["status"];



    echo  '<tr>
    <th scope="row">'.$sl.'</th>
    <td>'.$name.'</td>
    <td>'.$date.'</td>
    <td>'.$stat.'</td>
 
    <td>
    <button class="btn btn-primary "><a href="./Update.php?updateid='.$sl.'" class="text-light" >Update</button>
     <button class="btn btn-danger "><a href="./delete.php?delid='.$sl.'" class="text-light" >Delete</button>
</td>
  </tr> ' ;



  }
  
}


  
  
  
  ?>




   
  </tbody>
</table> 


   <button class="btn btn-primary my-5"><a  href="../../Adminhome.php" class="text-light"> Want to go back? </a></button> 
    

   
</body>
</html>




<?php

 }

else {


    header("location: ../../logininterface.php ");
}



 ?>