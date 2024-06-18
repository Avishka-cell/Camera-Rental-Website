
<?php include_once "adminframe.php"; ?>
<style>

table{
  position:relative;
  left:220px;
  top:80px;

  width:80%;
}
.td1{
  width:70px;
  /* text-align: left; */
  text-align:center;
 

}
td{
  width:100px;
  /* text-align: left; */
  text-align:center;


}
th{
  width:200px;
  text-align:center;
  background-color: #0091D5;
  color:aliceblue;




}
h2{
  position:relative;
  left:220px;
  top:-700px;
  }
  .config{
    width:100%;
    height:80px;
  }
  .button{
  position: relative;
  left:25px;
  width:80px;
  }
  .button2{
  position: relative;
  left:25px;
  width:80px;
  background-color: red;
  border-radius: 7px;
  }
</style>
<div class="config">
<h2>Accepted | Bookings </h2>
<?php
include_once "connect.php";

// Fetching the data from the "camera" table
$query = "SELECT bookingID,
itemCode,
itemName,
fromdate,
returnDate,
bookingDate,
userEmail,
amount
 FROM accept";
$result = mysqli_query($connection, $query);

// Displaying the fetched data in a table
echo '<table>';
echo '<th>Booking ID </th>
       <th>Item Code</th>
       <th>Item Name</th>
       <th>From Date</th>
       <th>Return Date</th>
       <th>Booking Date</th>
       <th>Customer Email</th>
     
       <th>Amount</th>
       <th>Action</th>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td class="td1">'.$row['bookingID'].'</td>';
    echo '<td class="td1">' . $row['itemCode'] . '</td>';
    echo '<td class="td1">' . $row['itemName'] . '</td>';
    echo '<td class="td1">' . $row['fromdate'] . '</td>';
    echo '<td class="td1">' . $row['returnDate'] . '</td>';
    echo '<td class="td1">' . $row['bookingDate'] . '</td>';
    echo '<td class="td">' . $row['userEmail'] . '</td>';
    echo '<td class="td">' . $row['amount'] . '</td>';
    echo '<td><button class="button2" onclick="confirmDelete(' . $row['bookingID'] . ')">Delete</button></td>';
    echo '</tr>';
}

echo '</table>';

// Free the result variable
mysqli_free_result($result);

mysqli_close($connection);
?>


<script>
  function confirmDelete(bookingID) {
    if (confirm("Are you sure?")) {
      window.location.href = 'deleteAccept.php?deleteCode=' + bookingID;
    } else {
      // User clicked cancel, do nothing or show a message
    }
  }
</script>