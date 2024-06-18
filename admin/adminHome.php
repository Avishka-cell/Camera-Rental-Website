<?php


include_once "adminframe.php";
?>

<style>
.div_home_main{
  position: relative;
  background-color: lightgray;
  left:210px;
  top:100px;
  width:80%;
  height:200px;
  display:flex;


}
.orders{
  width:25%;
  height:200px;
  background-color: lightcoral;
  border-radius: 10px;
}
.customers{
  width:25%;
  height:200px;
  background-color:navy;
  position: relative;
  left: 50px;
  border-radius: 10px;
  
}
.conformed{
  width:25%;
  height:200px;
  background-color: lightseagreen;
  position: relative;
  left: 100px;
  border-radius: 10px;
}
.title{
  margin-left:10px;
  margin-top:5px;
  color:white;
}
.total{
  background-color: transparent;
  width:100px;
  height:60px;
  margin-top: -45px;
  margin-left:162px ;
  color:white;
  text-decoration: underline;
}
.total1{
  background-color: transparent;
  width:100px;
  height:60px;
  margin-top: -45px;
  margin-left:150px ;
  color:white;
  text-decoration: underline;
}
.total2{
  background-color: transparent;
  width:100px;
  height:60px;
  margin-top: -45px;
  margin-left:233px ;
  color:white;
  text-decoration: underline;
}
.subTitle{
  margin-left: 20px;
  color:white;
}
.subTitle1{
  margin-left: 20px;
  color:white;
}
.subTitle2{
  margin-left: 20px;
  color:white;
}
.link{
  position: relative;
  left:10px;
  top:10px;
  background-color: transparent;
  width:100px;
  height:50px;
}
.link1{
 
  color:lightskyblue;
}
</style>

<div class="div_home_main">
<div class="Users">

</div>


<div class="orders">
<h1 class="title">Customers</h1>
<h3 class="subTitle">No of Customers:</h3>
<div class="total">
<?php
include_once "connect.php";
$query="SELECT id FROM users ORDER BY id";
$query_run=mysqli_query($connection,$query);
$row=mysqli_num_rows($query_run);
echo '<h2>'.$row.'</h2>';
?>
</div>
<div class="link">
<a href="customer.php">See More</a>
</div>
</div>

<div class="customers">
<h1 class="title">Requests</h1>
<h3 class="subTitle1">No of Requests:</h3>
<div class="total1">
<?php
include_once "connect.php";
$query="SELECT id FROM booking ORDER BY id";
$query_run=mysqli_query($connection,$query);
$row=mysqli_num_rows($query_run);
echo '<h2>'.$row.'</h2>';
?>
</div>
<div class="link">
<a class="link1" href="bookingDtls.php">See More</a>
</div>
</div>

<div class="conformed">
<h1 class="title">Confirmed</h1>
<h3 class="subTitle2">No Of Conformed Orders:</h3>
<div class="total2">
<?php
include_once "connect.php";
$query="SELECT bookingID  FROM accept ORDER BY bookingID ";
$query_run=mysqli_query($connection,$query);
$row=mysqli_num_rows($query_run);
echo '<h2>'.$row.'</h2>';
?>
</div>
<div class="link">
<a href="acceptOrder.php">See More</a>
</div>
</div>




</div>