<?php
include_once "connect.php";

if (isset($_POST['save'])) {
    $imageName = $_FILES['imge']['name']; // Get the original image file name
    $imagePath = './images/' . $imageName; // Concatenate the file path
    $itemName = $_POST['itemName'];
    $code = $_POST['code'];
    $price = $_POST['price'];

    // Move the uploaded file to the desired directory
    move_uploaded_file($_FILES['imge']['tmp_name'], $imagePath);

    $query2 = "INSERT INTO lencers (itemCode, picture, itemName, price) 
    VALUES ('$code', '$imagePath', '$itemName', '$price')";
    $result = mysqli_query($connection, $query2);

    if ($result) {
        echo '<script>alert("Item Saved");</script>';
    } else {
        // echo '<script>alert("failed ! something went wrong");</script>';
    }
}
?>

<style>
 .main{
    margin-top: 30px;
  margin-left: 500px;
    background-color:lightseagreen;
    width:500px;
    height:400px;
  }
  input[type='file']{
    width:200px;
    height:30px;
    margin-top: 20px;
    margin-left: 10px;
  }
  input[type='text']{
    width:400px;
    height:30px;
    margin-left: 50px;
    margin-top: 30px;
  }
  input[type='submit']{
    width:400px;
    height:30px;
    margin-left: 50px;
    margin-top: 30px;
    background: lightblue;
   
  }
  label{
    margin-left: 50px;
    font-weight: bold;
  }
  button{
    position:relative;
    left:10px;
    top:20px;

  }
  .config{
    width:100%;
    height:100px;

  }
h2{
  position: relative;
  top:-700px;
  left:550px;
}
</style>
<div class="config">
    <?php include_once "adminframe.php"; ?>
    <h2>ADD | Lencers</h2>
    <div class="main">
        <form method="post" action="" enctype="multipart/form-data"> <!-- Add enctype attribute for file upload -->
            <label>Add an Image</label>
            <input type="file" name="imge">
            <br>

            <input type="text" name="itemName" placeholder="Item name"><br>
            <input type="text" name="code" placeholder="code"><br>
            <input type="text" name="price" placeholder="price"><br>
            <input type="submit" name="save" value="Save">
        </form>
    </div>
</div>
