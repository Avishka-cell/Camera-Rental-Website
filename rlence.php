<?php
session_start();
include_once "connect.php";
error_reporting(0);

if(isset($_SESSION['id']) && isset($_SESSION['email'])){

    if(isset($_POST['submit'])){
        $itemCode = $_GET['code'];
        $userEmail = $_SESSION['email'];
        $due = $_POST['from-date'];
        $return = $_POST['return-date'];
        $bookID = mt_rand(100000000, 999999999);
        $orderDate = date('Y-m-d');

        // Fetching the item price from the camera based on the item code
        $priceQuery = "SELECT price,	itemName FROM  lencers WHERE itemCode = '$itemCode'";
        $priceResult = mysqli_query($connection, $priceQuery);

        if($priceResult && mysqli_num_rows($priceResult) > 0) {
            $row = mysqli_fetch_assoc($priceResult);
            $itemPrice = $row['price'];
            $name=$row['itemName'];

            // Calculating the amount based on the item price and duration
            $datetime1 = new DateTime($due);
            $datetime2 = new DateTime($return);
            $interval = $datetime1->diff($datetime2);
            $duration = $interval->format('%a');
            $amount = $itemPrice * $duration;

            // Storing the booking details in the booking table
            $query = "INSERT INTO booking(id, itemCode,itemName,fromDate, returnDate,bookingDate, email, amount) VALUES('$bookID', '$itemCode','$name', '$due', '$return','$orderDate', '$userEmail', '$amount')";
            $result = mysqli_query($connection, $query);

            if($result){
                echo '<script>alert("Booking successful");</script>';
            } else{
                echo '<script>alert("Booking Failed: ' . mysqli_error($connection) . '");</script>';
            }
        } else {
            echo '<script>alert("Item code not found");</script>';
        }
    }
} else{
    echo '<script>alert("Please log in to the page!");</script>';
}
?>




<style>
.cart {
  /* display: flex; */
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
 
}

.cart form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 300px;
  background-color: rgb(224, 188, 188);
  width:500px;
  height:300px;
  border-radius: 10px;
}

.cart h2 {
  margin-bottom: 20px;
}

.cart label {
  margin-bottom: 10px;
  margin-top: 10px;
  font-size: 17px;
  font-weight: bold;
}

.cart input {
  margin-bottom: 15px;
  width: 70%;
  padding: 5px;
  border-radius: 10px;
}

.cart button {
  padding: 10px 20px;
  margin-top: 10px;
}
button{
  position: relative;
      top:30px;
      left:33px;
      width:300px;
      height:40px;
      background-color: white;
      border-radius: 10px;
      color:Black;
      border:1px solid black;
      font-size: 16px;
}
body{
 
 background-color: white;


}
button:hover {
  background-color:orange;
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
.signup{
  position:relative;
  top:-100px;
  left:150px;
}
.mmc {
  width:450px;
  height:100%;
  margin:auto;
}
.signpic{
  width: 450px;
  height:500px;
  background-color:black;
}
.date1{
      width:300px;
      height:40px;
      border-radius: 10px;
      margin-top:10px;
      margin-left:30px;
      text-align: center;
      box-shadow: lightseagreen 3px 3px 3px 3px;
      border:none;
    }
    .date2{
      width:300px;
      height:40px;
      border-radius: 10px;
      margin-top:20px;
      margin-left:30px;
      text-align: center;
      box-shadow: lightseagreen 3px 3px 3px 3px;
      border:none;
    }
   form{
    margin-left:40px;
    margin-top:80px;
   }
   .label1{
    margin-left:50px;
    margin-top:80px;
   }
   .label2{
    margin-left:50px;
    margin-top:80px;
   }
   .img1{
  width:100%;
  height:100%;
  border-radius: 15px;
}
</style>

<?php include_once "head.php";
?>


<body>
 <div class="loginmain">
 <img src="./images/zoltan-tasi-rki2tyGFJO4-unsplash.jpg" class="img1">
<div class="signpic">

  </div>

  <div class="mmc">
  <form method="post">
   
   <label for="from-date" class="label1">From Date:</label><br>
   <input type="date" id="from-date" name="from-date" class="date1" required><br><br>
   <label for="return-date" class="label2">Return Date:</label><br>
   <input type="date" id="return-date" name="return-date" class="date2" required><br>
   <button type="submit"  name="submit">Rent</button>
 </form>
  </div>
</div>

</body>














