<?php
include_once "connect.php";

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $pass=$_POST['password'];
  $id = mt_rand(100000000, 999999999);
    $query = "SELECT * FROM users WHERE email = '$email' OR contact = '$contact'";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) > 0) {
    echo '<script>alert("your email and contact already existes");</script>';
  } else {
    $query1 = "INSERT INTO users (id,name, contact, email,password) VALUES ('$id','$name', '$contact', '$email','$pass')";

    if (mysqli_query($connection, $query1)) {
      echo '<script>alert("Registration sucessful");</script>';
    } else {
      echo '<script>alert("failed ! something went wrong");</script>';
    }
    
  }
 
  
  mysqli_close($connection);
 
}
?>



