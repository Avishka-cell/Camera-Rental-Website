<style>
  table{
    width:50%;
    position: relative;
    top:215px;
    left:370px;
    border:2px solid black;
  }
  th{
    background-color: lightseagreen;
    height:30px;
  }
  td{
    text-align: center;
    background-color: lightblue;
    height:50px;
  }
  .instruct{
    position:relative;
    text-align: center;
    top:-10px;
  }
  .payment{
    position: relative;
    left:510px;
    top:240px;
    width:auto;
  }
  .bthPay{
    position: relative;
    left: 700px;
    top:260px;
  }
  .btnDecorate{
    width:100px;
    height:40px;
    border-radius: 10px;
    background-color: blue;
  }
  .bthPay a{
    color:white;
    text-decoration: none;
    font-size: medium;
    font-weight: bold;
  }
  .instruct h3{
    color:green;
  }
</style>



<?php include_once "head.php" ?>

<?php
session_start();
include_once "connect.php";
error_reporting(0);

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    
    // Check if the order is accepted
    $query = "SELECT bookingID,itemName,fromdate,returnDate,bookingDate,userEmail,amount FROM accept WHERE userEmail='$email'";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // Order is accepted, display details from accept table
        echo '<table>';
        echo '<th>Booking No</th>
               <th>Item Name</th>
               <th>From Date</th>
               <th>Return Date</th>
               <th>Booking Date</th>
               <th>Customer Email</th>
               <th>Amount</th>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td class="td1">' . $row['bookingID'] . '</td>';
            echo '<td class="td1">' . $row['itemName'] . '</td>';
            echo '<td class="td1">' . $row['fromdate'] . '</td>';
            echo '<td class="td1">' . $row['returnDate'] . '</td>';
            echo '<td class="td1">' . $row['bookingDate'] . '</td>';
            echo '<td class="td">' . $row['userEmail'] . '</td>';
            echo '<td class="td">' . $row['amount'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } 
         else {
         header("Location: myorder.php");
        }
    }

    // Free the result variable
    mysqli_free_result($result);

    mysqli_close($connection);

?>



  <img src="./images/logo_banks_srilanka.jpg"    class="payment">
<div class="bthPay">
  <button class="btnDecorate"><a href="pay.php">Pay Here</a></button>
</div>


