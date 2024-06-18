<?php
include_once "connect.php";
session_start();
error_reporting(0);

if(isset($_POST['pay'])){
  $id=$_POST['bookid'];
  $owner=$_POST['owner'];
  $cardno=$_POST['cardNo'];
  $amount=$_POST['amount'];
  $expDate=$_POST['exp'];
  $email=$_SESSION['email'];

  $query = "SELECT * FROM accept WHERE bookingID = '$id'";
  $result = mysqli_query($connection, $query);


if(mysqli_num_rows($result) > 0){
  $query1="INSERT INTO paymentdtls(bookingNo,cardOwner,userEmail,cardNo,payment	
  ) VALUES('$id',' $owner',' $email','$cardno','$amount')";





if(mysqli_query($connection, $query1)){
  echo '<script>alert("Payment sucessful");</script>';
}
}
else{
  echo '<script>alert("Invalid booking! please check again");</script>';
}
}




?>





<?php include_once "head.php" ?>
<style>
  form{
    width:400px;
    height:430px;
    position: relative;
    top:170px;
    left: 600px;
    background-color: whitesmoke;
  }
.label1{
  position: relative;
  left:12px;
  top:20px;
}
.text1{
  position: relative;
  left:12px;
  top:26px; 
  width:90%;
  height:27px;
  border-radius: 7px;
  border:1px solid blue;

}
.label2{
  position: relative;
  left:12px;
  top:40px;
}
.text2{
  position: relative;
  left:12px;
  top:46px; 
  width:90%;
  height:27px;
  border-radius: 7px;
  border:1px solid blue;

}
.label3{
  position: relative;
  left:12px;
  top:60px;
}
.text3{
  position: relative;
  left:12px;
  top:66px; 
  width:77%;
  height:27px;
  border-radius: 7px;
  border:1px solid blue;

}
.label4{
  position: relative;
  left:-30px;
  top:70px;
}
.text4{
  position: relative;
  left:12px;
  top:76px; 
  width:57%;
  height:27px;
  border-radius: 7px;
  border:1px solid blue;

}
.label5{
  position: relative;
  left:60px;
  top:50px;
}
.text5{
  position: relative;
  left:290px;
  top:47px; 
  width:20%;
  height:27px;
  border-radius: 7px;
  border:1px solid blue;

}
.label6{
  position: relative;
  left:17px;
  top:67px;
}
.text6{
  position: relative;
  left:12px;
  top:73px; 
  width:90%;
  height:27px;
  border-radius: 7px;
  border:1px solid blue;

}

.image{
  width:43px;
  height:29px;
  position: relative;
  left:330px;
  top:35px;
}
input[type="submit"]{
  background-color: blue;
  position:relative;
  top:100px;
  left:10px;
  width:90%;
  height:30px;
  color:white;
  font-weight:bold;

}


</style>







<form method="post">
  <label class="label1">Booking No</label><br>
  <input  class="text1" type="text" name="bookid" required placeholder="Bookng No" maxlength="9"><br>


  <label class="label2">Card Owner</label><br>
  <input  class="text2" type="text" name="owner" required placeholder="Card Owner"><br>


<label class="label3">Card Number</label><br>
  <input  class="text3" type="text" name="cardNo" required placeholder="Card Number" maxlength="16"><br>
  <img src="./images/Mastercard_logo-800x445.jpg" class="image">

  <label class="label4">Expiration Date</label><br>
  <input  class="text4" type="Date" name="exp" required placeholder="">

  <label class="label5">CVC ?</label><br>
  <input  class="text5" type="text" name="bookNo" required placeholder="CVV" maxlength="3"><br>

  <label class="label6">Amount</label><br>
  <input  class="text6" type="text" name="amount" required placeholder="Amount"><br>

  <input type="submit" name="pay" Value="Confirm Payment">
</form>