<style>
  table{
    width:70%;
    position: relative;
    top:225px;
    left:250px;
    border:2px solid black;
  }
  th{
    background-color: lightseagreen;
    height:50px;
  }
  td{
    text-align: center;
    background-color: lightgray;
    height:60px;
  }
  .instruct{
    position:fixed;
  margin-top: -20px;
  margin-left:670px;
  }
  .instruct h2{
    color:black;
    
  }
  body{
    background-color: rgb(239, 239, 239);
  }
  .button2{
  position: relative;
  left:4px;
  width:70px;
  background-color: orange;
  border-radius: 2px;
  color:aliceblue;
  border-radius: 10px;
  }
  .button3{
  position: relative;
  left:4px;
  width:70px;
  background-color: yellow;
  border-radius: 2px;
  }
  .button2:hover{
    background-color: orangered;
  }
  .link{
    position:relative;
    top:250px;
    left:620px;
  }
  a{
    position:relative;
    top:-42px;
    left:239px;
    text-decoration: none;
  }
  
  </style>







<body>
<?php
session_start();
include_once "connect.php";
error_reporting(0);

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    
    // Check if the order is accepted
    $query = "SELECT id,itemName,fromDate,returnDate,bookingDate,email,amount FROM booking WHERE 	email='$email'";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0) {
       
        echo '<table>';
        echo '<th>Booking No</th>
               <th>Item Name</th>
               <th>From Date</th>
               <th>Return Date</th>
               <th>Booking Date</th>
               <th>Customer Email</th>
               <th>Amount</th>
               <th colspan="2">Action</th>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td class="td1">' . $row['id'] . '</td>';
            echo '<td class="td1">' . $row['itemName'] . '</td>';
            echo '<td class="td1">' . $row['fromDate'] . '</td>';
            echo '<td class="td1">' . $row['returnDate'] . '</td>';
            echo '<td class="td1">' . $row['bookingDate'] . '</td>';
            echo '<td class="td">' . $row['email'] . '</td>';
            echo '<td class="td">' . $row['amount'] . '</td>';
            echo '<td><button class="button2" onclick="confirmDelete(' . $row['id'] . ')">Delete</button>';
          
        }

        echo '</table>';
    } 
         
    }

    // Free the result variable
    mysqli_free_result($result);

    mysqli_close($connection);

?>
<script>
  function confirmDelete(id) {
    if (confirm("Are you sure?")) {
      window.location.href = 'bookDelete.php?deleteCode=' + id;
    } else {
      // User clicked cancel, do nothing or show a message
    }
  }
</script>

<div class="instruct">
  <h2>Your order details</h2>

 
</div>
<div class="link">
  <h4>See more details about your order..</h4>
  <a href="check.php">See More...</a>
</div></body>
