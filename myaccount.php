


<!DOCTYPE html>
<html>
<head>
  <style>
input[type='text'], select,input[type='password'] {
  width: 90%;
  height:39px;
  padding: 18px 20px;
  margin: 8px 8px;
  display: inline-block;
  box-shadow: lightseagreen 3px 3px 3px 3px;
  border:none;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text]:hover {
  background-color:lightblue;

}
input[type=password]:hover {
  background-color:lightblue;
}
.button2 {
  width: 90%;
  background-color: white;
  color: black;
  padding: 14px 20px;
  margin: 8px 8px;
  border:1px solid red;
  border-radius: 10px;
  cursor: pointer;
  font-size: 16px;
}

.button2:hover {
  background-color:red;
}

.mmc {
  width:450px;
  height:100%;
  margin:auto;
  

}
p{
  position:relative;
  left:100px;
}

.topNav{
  position:fixed;
  width:100%;
  height:53px;
  background-color: white;
  /* border-style: solid;
  border-width: 1px;
  border-color: black; */
  margin-top: -8px;
  margin-left: -9px;
}
.telephone{
  margin-left: 51px;
  font-size: 21px;
  margin-top:14px;
  font-weight: bolder;
}
.social{
  margin-top:-30px;
  margin-left:1290px;
  height:40px;
}
.loginmain{
  width:900px;
  height:500px;
  background-color:white;
  display:flex;
  position:relative;
  left:300px;
 top:170px;
}
.signpic{
  width: 450px;
  height:500px;
  background-color:black;
  border-radius: 15px;
}
Form{
  margin-left:5px;
  margin-top:100px;
}
.img1{
  width:100%;
  height:100%;
  border-radius: 15px;
}
</style>
</head>
<body>
<div class="topNav">
   <div class="telephone">
   +94714725170
   </div>
   <div class="social">
 <img src="./images/xcv.png">
   </div>
</div>
<?php include_once "head.php" ?>

<div class="loginmain">
  <div class="signpic">
<img src="./images/zoltan-tasi-rki2tyGFJO4-unsplash.jpg" class="img1">
  </div>
  <div class="mmc">
  <?php
// session_start();
include_once "connect.php";
error_reporting(0);

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    
    // Check if the order is accepted
    $query = "SELECT id,name,contact,email,password FROM users WHERE 	email='$email'";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0) {
       
        echo '<form method="post">';
       

        while ($row = mysqli_fetch_assoc($result)) {
            echo ' <input type="text" id="fname" name="name" value="'.$row['name'].'">';
            echo ' <input type="text" id="lname" name="contact" value="'.$row['contact'].'" >';
            echo ' <input type="text" id="lname" name="email" value="'.$row['email'].'">';
            echo '<input type="password" id="lname" name="password" value="'.$row['password'].'" >';    
            echo '<td><button class="button2" onclick="confirmDelete(' . $row['id'] . ')">Delete Account</button></td>';
                   
            
        }

        echo '</form>';
    } 
         
    }

    // Free the result variable
    mysqli_free_result($result);

    mysqli_close($connection);

?>

</div>
</div>

</body>
</html>
<script>
  function confirmDelete(id) {
    if (confirm("Are you sure??")) {
      window.location.href = 'deleteme.php?edit=' + id;
    } else {
      // User clicked cancel, do nothing or show a message
    }
  }
</script>

