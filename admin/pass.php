<?php
include_once "connect.php";

if (isset($_POST['accept'])) {
    $acceptId = $_POST['accept'];

    // Fetching the data for the accepted entry
    $selectQuery = "SELECT id, itemCode, fromDate, returnDate, email FROM booking WHERE id = $acceptId";
    $selectResult = mysqli_query($connection, $selectQuery);
    $acceptedEntry = mysqli_fetch_assoc($selectResult);

    // Storing the accepted entry in the accept table
    $insertQuery = "INSERT INTO accept (id, itemCode, fromDate, returnDate, email) VALUES (
        '" . $acceptedEntry['id'] . "',
        '" . $acceptedEntry['itemCode'] . "',
        '" . $acceptedEntry['fromDate'] . "',
        '" . $acceptedEntry['returnDate'] . "',
        '" . $acceptedEntry['email'] . "'
    )";
    mysqli_query($connection, $insertQuery);

    // Deleting the accepted entry from the booking table
    $deleteQuery = "DELETE FROM booking WHERE id = $acceptId";
    mysqli_query($connection, $deleteQuery);

    // Redirecting to accept.php
    header("Location: accept.php");
    exit();
}

mysqli_close($connection);
?>
