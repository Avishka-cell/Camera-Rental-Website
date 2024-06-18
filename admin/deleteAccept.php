<?php
include_once "connect.php";
if(isset($_GET['deleteCode'])){
  $code=$_GET['deleteCode'];
  $sql="DELETE FROM `accept` WHERE  	bookingID = '$code'";
  $result=mysqli_query($connection,$sql);
  if(mysqli_query($connection,$sql)){
    echo '<script>alert("Deleted successfully");</script>';
   
  }
  else{
    echo '<script>alert("Error");</script>';
    
  }
}
?>