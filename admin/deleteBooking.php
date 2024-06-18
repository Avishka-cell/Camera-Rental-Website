<?php
include_once "connect.php";
if(isset($_GET['deleteCode'])){
  $code=$_GET['deleteCode'];
  $sql="DELETE FROM `booking` WHERE  id = '$code'";
  $result=mysqli_query($connection,$sql);
  if($result){
    echo '<script>alert("Deleted successfully");</script>';
    exit();
  }
  else{
    echo '<script>alert("Error");</script>';
    exit();
  }
}
?>