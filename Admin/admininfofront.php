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
  <?php
if (isset($_GET['yes']) && $_GET['yes'] === 'success') {
    echo '<div class="alert alert-success" role="alert">Admin information successfully added!</div>';
}

?>
<button class="btn btn-primary my-5" > <a href="./addadmin.php"  class="text-light">ADD Admin</a>  </button>


<h2>AUAH ADMIN INFO</h2>


     <table class="table">
  <thead>
    <tr>
   
      <th scope="col">Admin Name</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">HomeAddress</th>
      
    </tr>
  </thead>
  <tbody>

  <?php 
  
  $sql="Select * from admin order by AID DESC";
  $result=mysqli_query($conn,$sql);
  if($result){

   while($row=mysqli_fetch_assoc($result)){

   
    $name=$row["Username"];
    $home=$row["Home"];
    $phone=$row["Phone"];
    



    echo  '<tr>
    <th scope="row">'.$name.'</th>
    <td>'.$phone.'</td>
    <td>'.$home.'</td>
   
    
  </tr> ' ;



  }
  
}


  
  
  
  ?>




   
  </tbody>
</table> 


   <button class="btn btn-primary my-5"><a  href="./Adminhome.php" class="text-light"> Want to go back? </a></button> 
    

   
</body>
</html>




<?php

 }

else {


    header("location: ../../logininterface.php ");
}



 ?>