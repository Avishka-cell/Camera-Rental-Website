<?php
include_once "connect.php";
if(isset($_GET['deleteCode'])){
  $code=$_GET['deleteCode'];
  $sql="DELETE FROM `camera` WHERE itemCode = '$code'";
  $result=mysqli_query($connection,$sql);
  if($result){
    echo '<script>alert("Deleted successfully");</script>';
  }
  else{
    echo '<script>alert("Error");</script>';
  }
}
?>
