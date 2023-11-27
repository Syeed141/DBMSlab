<?php
    $id = $_POST['id'];
    $com= $_POST['complain']; 

    $conn=mysqli_connect('localhost','root','','auah');
   
if(!$conn){

echo "Connection failed" ;
 

}

else

{
$sql2="select * from complain where id='$id'";
$result2=mysqli_query($conn,$sql2);




    $sql = "INSERT INTO complain(id,complain) VALUES ('$id','$com')";
    $result = mysqli_query($conn,$sql);
    

}


?>