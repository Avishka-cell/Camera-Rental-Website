<?php 
include_once "connect.php";
if(isset($_GET['edit'])){
  $id=$_GET['edit'];
  $sql="DELETE FROM `users` WHERE  	id = '$id'";
  $result=mysqli_query($connection,$sql);
  if(mysqli_query($connection,$sql)){
    echo '<script>alert("Deleted successfully");</script>';
   
  }
  else{
    echo '<script>alert("Error");</script>';
    
  }
}
?>