<?php
include_once "connect.php";
if(isset($_GET['deleteCode'])){
  $code=$_GET['deleteCode'];
  $sql="DELETE FROM `booking` WHERE  id = '$code'";
  $result=mysqli_query($connection,$sql);
  if($result){
   header("Location: index.php");
    exit();
  }
  else{
    echo '<script>alert("Error");</script>';
    exit();
  }
}
?>