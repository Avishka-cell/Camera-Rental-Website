

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
.td{
  width:100px;
  /* text-align: left; */
  text-align:center;
 

}

th{
  width:200px;
  text-align:center;
  background-color: #0091D5;
  color:aliceblue;
/* 
  border:2px solid black; */


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
  .button1{
  position: relative;
  left:25px;
  width:80px;
  background-color: lightgreen;
  border-radius: 7px;

  }
  .button2{
  position: relative;
  left:25px;
  width:80px;
  background-color: red;
  border-radius: 7px;
  }
  a{
    text-decoration: none;
    color: black;
  }
</style>
<div class="config">
<h2>Customer | Booking </h2>
<?php
include_once "connect.php";

// Fetching the data from the "camera" table
$query = "SELECT id, itemCode,itemName, fromDate, returnDate,bookingDate,email,	amount FROM booking";
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
       <th colspan="2">Action</th>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td class="td1">'.$row['id'].'</td>';
    echo '<td class="td1">' . $row['itemCode'] . '</td>';
    echo '<td class="td1">' . $row['itemName'] . '</td>';
    echo '<td class="td1">' . $row['fromDate'] . '</td>';
    echo '<td class="td1">' . $row['returnDate'] . '</td>';
    echo '<td class="td1">' . $row['bookingDate'] . '</td>';
    echo '<td class="td">' . $row['email'] . '</td>';
    echo '<td class="td">' . $row['amount'] . '</td>';
 
 
    echo '<td><button class="button1"><a href="accept.php?edit=' . $row['id'] . '&&itemcode='.$row['itemCode'] .'&&itemname='.$row['itemName'].'&&fdate='.$row['fromDate'].'&&rdate='. $row['returnDate'].'&&book='.$row['bookingDate'] . '&&email='. $row['email'] .'&&amount=' . $row['amount'] . '">Accept</a></button></td>';
    echo '<td><button class="button2" onclick="confirmDelete(' . $row['id'] . ')">Delete</button></td>';
    echo '</tr>';
}

echo '</table>';

// Free the result variable
mysqli_free_result($result);

mysqli_close($connection);
?>
</div>


<script>
  function confirmDelete(id) {
    if (confirm("Are you sure?")) {
      window.location.href = 'deleteBooking.php?deleteCode=' + id;
    } else {
      // User clicked cancel, do nothing or show a message
    }
  }
</script>
