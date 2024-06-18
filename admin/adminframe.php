


<style>
body{
  background-color: lightgray;
}
.nav{
  width:140px;
  height:700px;
  position: fixed;
  margin-top: 10px;

  margin-left: -10px;
 
  background-color: black;
}


.navigation{

  position: relative;
  left:-7px;
  top:60px;
  width:140px;
  height:400px;
  background-color: black;

}
ul{
  list-style: none;
}
.buttons{
  width:100px;
  height:30px;
  margin-left: -17px;
  margin-top: 20px;
  background-color: lightskyblue;
  color: black;
  font-weight: bold;
  border-radius: 8px;
  border-style: none;
  
  
}
button:hover{
  background-color: white;
}
button:active{
  background-color: yellow;
}
.topNav{
  margin-left: -8px;
  margin-top: -10px;
  width:100%;
  height:70px;
  background-color: black;
  position: fixed;
}
.buttons1{
  background-color: orange;
  width:100px;
  height:30px;
  margin-left: -17px;
  margin-top: 20px;
  border-radius: 8px;
  border-style: none;
  
  color: black;
  font-weight: bold;
}
.adminLogo{
position: relative;
left:15px;
top:-50px;
width:125px;
height:100px;
background: transparent;
border-radius:15px;
}
.h22{
  color: white;
  position: relative;
  top:-55px;
  left:35px;
}

  </style>
  <body>
    <div class="topNav">


    </div>
<div class="nav">

  <div class="navigation">
    <img src="./images/admin logo.png" class="adminLogo">
    <h2 class="h22">Admin</h2>
  <ul>
    <li><a href="adminHome.php"><button class="buttons">Home</button></a></li>
    <li><a href="customer.php"><button class="buttons">Customers</button></a></li>
    <li><a href="bookingDtls.php"><button class="buttons">Requests</button></a></li>
    <li><a href="payment.php"><button class="buttons">Payments</button></a></li>
    <li><a href="acceptOrder.php"><button class="buttons">Accepted</button></a></li>
    <li><a href="camDtls.php"><button class="buttons">Cameras</button></a></li>
    <li><a href="lenceDtls.php"><button class="buttons">Lencers</button></a></li>
   </ul>
   <ul>
   <li><a href="adminlog.php"><button class="buttons1" name="logout">LogOut</button></a></li>
   </ul>
  </div>
  </div>
</div>

  </body>
  <?php
if(isset($_POST['logout'])){
  header("Location: adminlog.php");
  exit();
}

?>

