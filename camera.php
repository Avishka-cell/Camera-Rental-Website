
<?php include_once "head.php"; 
error_reporting(0);?>

<script>


window.addEventListener('DOMContentLoaded', function() {
    // Get all the images in the slideshow
    var images = document.querySelectorAll('.slideshow img');
    
    var currentImageIndex = 0;
    
    // Display the first image
    images[currentImageIndex].style.display = 'block';
    
    // Function to switch to the next image
    function nextImage() {
        // Hide the current image
        images[currentImageIndex].style.display = 'none';
        
        // Increment the index
        currentImageIndex = (currentImageIndex + 1) % images.length;
        
        // Display the next image
        images[currentImageIndex].style.display = 'block';
    }
    
    // Call the nextImage function every 3 seconds
    setInterval(nextImage, 6000);
});
  </script>
<style>
.image{
  width:200px;
  height:200px;
  /* box-shadow:5px 0px 5px lightskyblue; */
  margin-top: 15px;
}
.cover {
  width: 90%;
  height: 640px;
  margin-left: 90px;
  box-shadow: 5px 0px 5px lightskyblue;
  overflow: hidden;
}
.cover-video{
  width:100%;

}


.cover1{
  /* margin-top: 10px; */
  width:100%;
  height:600px;
  /* background-color: green; */
  margin-left: 0px;
 
}
table{
  margin-left: 500px;
  margin-top: -320px;
}
.td{
  text-align: center;
  width:200px;
  font-size: large;

}
.td1{
  text-align:center;
  margin-left: 20px;
  width:200px;
  font-weight: bold;
}

input[type='submit']{
  margin-left: 10px;
  margin-top: 15px;
  background-color: lightsalmon;
  width:90px;
  height:30px;
  border-radius: 10px;
  border-color: red;
  border-style: solid;
  border-width: 2px;
  background:transparent;
  color:blue
}
input[type='hidden']{
  margin-left:70px ;
}
h1{
  margin-left: 280px;
  margin-top: 30px;
}

button{
  width:90px;
  height:35px;
 background-color:lightslategrey;
  border-radius: 10px;
border: none;
box-shadow: lightblue 5px 3px 2px 2px;
  
}
a{
  text-decoration: none;
  font-size: 17px;
  color: black;

}
a:hover{
  color: white;
}

.footer{
  margin-top: 40px;
}
.booked{
color: blue;
font-weight: bold;
}
.slideshow {
  width:100%;
 height:800px;
 background-color: black;   
 /* margin-left: 150px; */
 margin-top: -25px;
                
 }
  .slideshow img {
  width: 100%;
  height: 800px;
 display: none;
 }
 .pos{
  margin-top: 30px;
 }
 .cam{
  width:200px;
  height:300px;
  background-color: transparent;
 position:static;
 margin-top:100px;
 margin-left:100px;
 box-shadow:lightblue 2px 2px 3px 3px;
 /* border-style: solid;
 border-width:2px;
 border-color:lightseagreen ; */
 text-align: center;
 border-radius: 15px;
 }
 .cam1 li{
margin-left: -35px;
list-style: none;
font-size: 19px;
margin-top: 10px;
 }

  </style>

  <body>

  <div class="slideshow">
  <h1>WelCome to ObL</h1>
        <img src="./images/brent-ninaber-DiMBNoB4iWU-unsplash.jpg" alt="Image 1">
        <img src="./images/def.jpeg" alt="Image 2">
        
    </div>
    <script src="script.js"></script>
    <div class="cam">
<h2>Our Brands</h2>
<div class="cam1">
<ul>
  <li>Cannon</li>
  <li>Fujifilm</li>
  <li>Canon</li>
  <li>Panasonic</li>
  <li>Sony</li>

</ul>
</div>
</div>
<?php
include_once "connect.php";


$query = "SELECT itemCode, picture, itemName, price FROM camera";
$result = mysqli_query($connection, $query);


echo '<table>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td><img src="' . $row['picture'] . '" alt="Camera" class="image"></td>';
    echo '<td class="td">' . $row['itemName'] . '    </td>';
    echo '<td class="td1" >Rs:' . $row['price'] . 'per day</td>';

    // Check if item code is already booked
    $itemCode = $row['itemCode'];
    $bookingQuery = "SELECT COUNT(*) FROM booking WHERE itemCode = '$itemCode'";
    $bookingResult = mysqli_query($connection, $bookingQuery);
    $bookingCount = mysqli_fetch_array($bookingResult)[0];

    if ($bookingCount > 0) {
        echo '<td class="booked">Out of stoke</td>';
    } else {
        echo '<td><button><a href="rent.php?code=' . $row['itemCode'] . '">Rent</a></button></td>';
    }

    echo '</tr>';
}

echo '</table>';


mysqli_free_result($result);
mysqli_close($connection);
?>
<div class="pos">
  <?php include_once "contact.php";?>
</div>


  </body>
 
