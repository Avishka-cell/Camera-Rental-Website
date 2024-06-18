<?php  session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>


  <style>
.navbar{
  margin-top:45px;
  margin-left:-9px;
  width:100%;
  height:82px;
  background-color: black;
  position:fixed;
}

.social{
  display:flex;
  background-color:transparent;
  width:400%;
  height:50px;
  margin-left:1200px;
  margin-top: 5px;
}


.icon1{
  width:30px;
  height:30px;
  margin-top: 11px;
}
.icon2{
  width:30px;
  height:30px;
  margin-top: 11px;
  margin-left: 15px;
}
.icon3{
  width:30px;
  height:30px;
  margin-top: 11px;
  margin-left:15px;
}
.icon4{
  width:30px;
  height:30px;
  margin-top: 11px;
  margin-left:15px;
}
.navigation{
  display: flex;
  position:relative;
  left:200px;
  top:26px;

 
}
.navigation1{
  display: flex;
  position:relative;
  left:1180px;
  top:4px;
  background-color: transparent;
}
.logo{
  width:100px;
  height:60px;
  background-color: #8fe2dd;
  margin-left: 65px;
  margin-top: -36px;
  border-radius: 20px;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
  margin-left:25px;
 
  
}

.navbar>ul>li {
  white-space: nowrap;
  padding: 10px 0 10px 28px;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 3px;
  font-family: var(--font-secondary);
  font-size: 18px;
  font-weight:bold;
  color: white;
  white-space: nowrap;
  transition: 0.3s;
  position: relative;
  text-decoration: none;
}
.navbar a:hover,

.navbar .active:focus,
.navbar li:hover>a {
  color:lightskyblue;
}



    </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

</head>
<body>
  <?php include_once "topHeader.php" ?>

  <div class="navbar">
  
    <div class="navigation">
      <ul>
     
      <li><a href="index.php">Home</a></li>
   
      <li><a href="#about">About</a></li>
      <li><a href="camera.php">Cameras</a></li>
      <li><a href="lencer.php">Lensers</a></li>
     
      <li><a href="#contact">Contact</a></li>
     </div>
     <div class="navigation1">
     </ul>
      <ul>
      <?php if (isset($_SESSION['id']) && isset($_SESSION['email'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="myaccount.php">My Account</a></li>
                    <li><a href="myorder.php">My Orders</a></li>
                    
                <?php } else { ?>
                    <li><a href="login.php">Login/Register</a></li>
                <?php } ?>

     
                </ul>
     </div>

    <img src="./images/obl.jpg"  class="logo"  >

  </div>
  <!-- slidesow images -->
  <div>

</body>
</html>