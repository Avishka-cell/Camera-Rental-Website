<style>
  .image {
    width: 150px;
    height: 100px;
  }
  table {
    margin-top: 70px;
    margin-left: 370px;
  }
  td {
    width: 100px;
    text-align: center;
  }
  th {
    width: 200px;
    text-align: center;
    background-color: #0091D5;
    color: aliceblue;
  }
  .btn {
    width: 60px;
    height: 30px;
    background-color: lightseagreen;
    border-color: #0091D5;
  }
  .add {
    position: relative;
    left: 250px;
    top: 100px;
  }
  .config {
    width: 100%;
    height: 80px;
  }
  .button1 {
    position: relative;
    left: 25px;
    width: 80px;
    background-color: lightgreen;
    border-radius: 7px;
  }
  .button2 {
    position: relative;
    left: 25px;
    width: 80px;
    background-color: orange;
    border-radius: 7px;
  }
  a {
    text-decoration: none;
    color: black;
  }
</style>

<?php include_once "adminframe.php"; ?>
<div class="add">
  <a href="addlencer.php"><button class="btn">Add</button></a>
</div>

<?php
include_once "connect.php";

// Fetching the data from the "camera" table
$query = "SELECT itemCode, picture, itemName, price FROM lencers";
$result = mysqli_query($connection, $query);

// Displaying the fetched data in a table
echo '<table>';
echo '<tr><th>Image</th><th>Description</th><th>Price</th><th>Item Code</th><th colspan="2">Action</th></tr>';

while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>';
  echo '<td><img src="' . $row['picture'] . '" alt="image" class="image"></td>';
  echo '<td>' . $row['itemName'] . '</td>';
  echo '<td>' . $row['price'] . '</td>';
  echo '<td>' . $row['itemCode'] . '</td>';
  echo '<td><button class="button1"><a href="editLencer.php?edit=' . $row['itemCode'] . '">Edit</a></button></td>';
  echo '<td><button class="button2" onclick="confirmDelete(\'' . $row['itemCode'] . '\')">Delete</button></td>';
  echo '</tr>';
}

echo '</table>';

// Free the result variable
mysqli_free_result($result);
mysqli_close($connection);
?>

<script>
  function confirmDelete(itemCode) {
    if (confirm("Are you sure?")) {
      window.location.href = 'deleteLencer.php?deleteCode=' + itemCode;
    } else {
      // User clicked cancel, do nothing or show a message
    }
  }
</script>
