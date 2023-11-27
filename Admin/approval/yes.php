

<?php 
session_start();
include ('./connection.php');


if(isset($_SESSION["username"])) {
    
if(isset($_GET["aid"])) {



$aid=$_GET["aid"];


$sql=" UPDATE users SET is_approved=1 where id=$aid ";
$result=mysqli_query($conn,$sql);
if($result) {

    header('location:approve.php?yes=success');
    exit();
 
   

}

else {

    header('location:approve.php');
    exit();

}
}
}

    ?>
