<style>
  table {
    position: relative;
    left: 400px;
    top: 130px;
  }
  td {
    width: 200px;
    text-align: center;
  }
  th {
    width: 200px;
    text-align: center;
    background-color: #0091D5;
    color: aliceblue;
  }
  .search {
    position: relative;
    left: 80px;
    top: 100px;
  }
  .button2 {
    position: relative;
    left: 25px;
    width: 80px;
    background-color: red;
    border-radius: 7px;
  }
  a {
    text-decoration: none;
    color: black;
  }
</style>

<?php include_once "adminframe.php"; ?>

<?php
include_once "connect.php";

// Fetching all customers data from the "users" table
$query = "SELECT id,name, contact, email FROM users";
$result = mysqli_query($connection, $query);

// Check if the query was executed successfully
if ($result && mysqli_num_rows($result) > 0) {
  // Displaying all customers data in a table
  echo '<table>';
  echo '<tr>
  <th>Customer Name</th>
  <th>Contact Number</th>
  <th>Email</th>
  <th>Action</th>
  </tr>';

  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['contact'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td><button class="button2" onclick="confirmDelete(' . $row['id'] . ')">Delete</button></td>';
    echo '</tr>';
  }

  echo '</table>';
}

mysqli_free_result($result);
mysqli_close($connection);
?>

<script>
  function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this user?")) {
      window.location.href = 'deleteUser.php?edit=' + id;
    } else {
      // User clicked cancel, do nothing or show a message
    }
  }
</script>
