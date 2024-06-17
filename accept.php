<?php
include_once "connect.php";

if (isset($_GET['edit'])){
    $id=$_GET['edit']; 
     $itemcode=$_GET['itemcode'];
     $name=$_GET['itemname'];
     $fdate=$_GET['fdate'];
     $rdate=$_GET['rdate'];
     $email=$_GET['email'];
     $amount=$_GET['amount'];
     $bookDate=$_GET['book'];

     $query = "INSERT INTO accept(	bookingID,itemCode,itemName,fromdate,returnDate,bookingDate,userEmail,amount
     ) VALUES(' $id', ' $itemcode',' $name', ' $fdate', ' $rdate','$bookDate', '$email','$amount')";
     $result = mysqli_query($connection, $query);
     
     if($result){
        echo '<script>
        alert("Booking Accepted");
        window.location.href = "bookingDtls.php";
      </script>';
     } else{
        echo '<script>
        alert("Failed");
        window.location.href = "bookingDtls.php";
      </script>';
     }
 }

?>



