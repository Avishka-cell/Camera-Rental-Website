
<?php include_once "adminframe.php"; ?>
<style>

table{
  position:relative;
  left:310px;
  top:70px;

  width:60%;
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
$query = "SELECT id,bookingNo,
cardOwner,
userEmail,
cardNo,
payment

 FROM  paymentdtls";
$result = mysqli_query($connection, $query);

// Displaying the fetched data in a table
echo '<table>';
echo '<th>Booking No</th>
       <th>Card Owner</th>
       <th>Card No</th>
       <th>Payment</th>
       <th>Action</th>';


while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td class="td1">'.$row['bookingNo'].'</td>';
    echo '<td class="td1">' . $row['cardOwner'] . '</td>';
    echo '<td class="td1">' . $row['cardNo'] . '</td>';
    echo '<td class="td1">' . $row['payment'] . '</td>';

    echo '<td><button class="button2" onclick="confirmDelete(' . $row['id'] . ')">Delete</button></td>';
    echo '</tr>';
}

echo '</table>';

// Free the result variable
mysqli_free_result($result);

mysqli_close($connection);
?>


<script>
  function confirmDelete(id) {
    if (confirm("Are you sure?")) {
      window.location.href = 'deletePay.php?deleteCode=' + id;
    } else {
      // User clicked cancel, do nothing or show a message
    }
  }
</script>