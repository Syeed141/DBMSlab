

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
    echo '<div class="alert alert-success" role="alert">Employee information successfully updated!</div>';
}

if (isset($_GET['no']) && $_GET['no'] === 'success') {
    echo '<div class="alert alert-success" role="alert">Employee information deleted!</div>';
}

if (isset($_GET['add']) && $_GET['add'] === 'success') {
  echo '<div class="alert alert-success" role="alert">Employee information successfully added!</div>';
}
?>
<button class="btn btn-primary my-5" > <a href="../Employee/Create/addemployeefront.php "  class="text-light">ADD EMPLOYEE</a>  </button>


<h2>AUAH EMPLOYEE INFO</h2>



     <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Name</th>
      <th scope="col">EID</th>
      <th scope="col">HomeAddress</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Occupation</th>
      <th scope="col">Operations</th>
      
    </tr>
  </thead>
  <tbody>

  <?php 
  
  $sql="Select * from employeeinfo order by Occupation";
  $result=mysqli_query($conn,$sql);
  if($result){

   while($row=mysqli_fetch_assoc($result)){

    $sl=$row["SL"];
    $name=$row["Name"];
    $eid=$row["EID"];
    $home=$row["HomeAddress"];
    $phone=$row["PhoneNumber"];
    $occupation=$row["Occupation"];   
    $_SESSION['deleteid'] = $sl;


    echo  '<tr>
    <th scope="row">'.$sl.'</th>
    <td>'.$name.'</td>
    <td>'.$eid.'</td>
    <td>'.$home.'</td>
    <td>'.$phone.'</td>
    <td>'.$occupation.'</td>
  
    <td>
    <form method="POST" action="./Empdeleteback.php">
        <input type="hidden" name="deleteid" value="' . $sl . '">
        
        <button class="btn btn-danger" type="submit" onclick="return confirm(\'Are you sure you want to delete?\')">Delete</button>
        <button class="btn btn-primary" type="submit" value=" ' .  $_SESSION['deleteid'] . '" formaction="./Update/EmpUpdateFront.php">Update</button>
        </form>

</td> 



  </tr> ' ;



  }
  
}

  
  
  
  ?>




   
  </tbody>
</table> 


   <button class="btn btn-primary my-5"><a href="../Adminhome.php" class="text-light"> Want to go back? </a></button> 
    

   
</body>
</html>




<?php

 }

else {


    header("location: ../../logininterface.php ");
}



 ?>