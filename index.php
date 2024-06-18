<?php
session_start();
error_reporting(0);
?>
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
    setInterval(nextImage, 6500);
});
  </script>
<style>
.div{
  position:relative;
  left:50px;
  top:100px;
  margin:auto;
  background-color:aquamarine;

}
body{
  background-color:white;
}


.slideshow {
  width:100%;
 height:800px;
 background-color: black;   
 /* margin-left: 0px; */
 /* border-radius: 10px; */
                
 }
  .slideshow img {
  width: 100%;
  height: 800px;
 display: none;
 /* border-radius: 10px; */
 }
 .about_Text{
  margin-left:150px;
  width:80%;
  height:400px;
  background-color: transparent;
  margin-top: 30px;
  display: flex;
 }
 .about_Text12{
  margin-left:150px;
  width:80%;
  height:400px;
  background-color: transparent;
  margin-top: 0px;
  display: flex;
 }
 .about_text_main{
  margin-left:10px; 
  margin-top: 78px;
  text-align: center;
  font-size: 30px;
 }
 .about-pic{
  width: 50%;
  height:400px;
  
 }
 .about-pic1{
  width: 50%;
  height:440px;
  
 }
 .description{
  background-color: white;
  width:50%;
  height:400px;
  /* border-width: 2px;
  border-style:solid; */
  /* border-color: red; */
  text-align: left;
  margin-left: 5px;

 }
 .brand-text{
  margin-left:10px; 
  margin-top: 60px;
  text-align: center;
 }
 .brand-pics{
  margin-left:150px;
  width:80%;
  height:100px;
  background-color: transparent;
  margin-top: 40px;
  display: flex;
 }
 .img1{
margin-left: 0px;
width:150px;
height:85px;
 }
 .img2{
  margin-left: 100px;
width:150px;
  height:85px;
 
 }
 .img3{
  margin-left:100px;
width:150px;
height:85px;
 
 }
 .img4{
  margin-left: 100px;
width:150px;
height:70px;
 
 }
 .idcontact{
  margin-top: 160px;
 }
 .why{
  margin-left:150px;
  width:80%;
  height:370px;
  background-color: lightblue;
  margin-top: 110px;
  display: flex;
 }
 .why-pic{
  width: 50%;
  height:470px;
 
 }
 .description-why{
  background-color: white;
  width:70%;
  height:370px;
  text-align: center;
 
 }
 .texts{
 margin-top:100px;
 margin-left:100px;
 }
 .texts1{
  margin-top:100px;
  margin-left:-300px;
 }
 .texts1 p{
  text-align: left;
  margin-left:397px;
  font-size: 15px;
  font-weight: bolder;
  color:black;
 }
 .texts p{
  color:black;
  font-size: 15px;
  font-weight: bolder;
 }
 .h2{
  margin-left: -90px;
  text-decoration: underline;
 }
 .hr1{
width:80%;
margin-top: 70px;
 }
 h2{
  text-decoration: underline;
 }
.linkCam{
  width:150px;
  height:40px;
  background-color: lightslategrey;
  border-radius: 10px;
 border:none;
 box-shadow: lightblue 5px 3px 3px 2px;
 
}
button:hover {
  background-color:orange;

}

button a{
  font-family: 'Times New Roman', Times, serif;
  font-weight: bolder;
  font-size: medium;
  text-decoration: none;
  color:white;
}
 
  </style>
  <body >
<?php include_once "head.php";?>

<div class="slideshow">
  <h1>WelCome to ObL</h1>
        <img src="./images/laura-chouette-86FaqV5MCdw-unsplash.jpg" alt="Image 1">
        <img src="./images/saxon-white-RrtiBcKP5_c-unsplash.jpg" alt="Image 2">
        <!-- <img src="./images/m.jpg" alt="Image 3"> -->
    </div>
    <script src="script.js"></script>
    <div id="about">
    <h2 class="about_text_main">About Us</h2>
  
   
   
    </div>
  <div class="about_Text" id="about">
   
<img src="./images/brent-ninaber-DiMBNoB4iWU-unsplash.jpg" class="about-pic">
<div class="description">
  <div class="texts">
<!-- <h2>About OBL</h2> -->
<p>We are photographers and videographers just like you.Weather you</p>
<p>know exactly what you want,need advice putting together your ring or just </p>
<p>want to talk trade, our Gearheads are helps for you.</p>
<button class="linkCam"><a href="camera.php">Explore...</a></button>
  </div>
</div>
  </div>

  <div class="about_Text12" id="about">
   
  <div class="description">
     <div class="texts">
   <!-- <h2>About OBL</h2> -->
   <p>We are photographers and videographers just like you.Weather you</p>
   <p>know exactly what you want,need advice putting together your ring or just </p>
   <p>want to talk trade, our Gearheads are helps for you.</p>
   <button class="linkCam"><a href="lencer.php">Explore...</a></button>
     </div>
   </div>
   <img src="./images/abdul-wasay-_wT68JdrZp0-unsplash.jpg" class="about-pic1">
   
   
     </div>

     
  <HR class="hr1"></HR>
<div class="brand-text">
  <h2>Our Brands</h2>
  
</div>

<div class="brand-pics">
<img src="./images/f.jpg" class="img1">
<img src="./images/p.png" class="img2">
<img src="./images/s.png" class="img3">
<img src="./images/c.jpg" class="img4">
<img src="./images/cc.jpg" class="img4">


</div>
<HR class="hr1"></HR>

<div class="why">
<img src="./images/gift-habeshaw-oRTHITVlS7I-unsplash.jpg" class="why-pic">
<div class="description-why">
<div class="texts1">
<h2 class="h2">Why OBL?</h2>
<p>We are photographers and videographers just like you.Weather you</p>
<p>know exactly what you want,need advice putting together your ring or just </p>
<p>want to talk trade, our Gearheads are helps for you.</p>
  </div>
</div>
</div>
<div id="contact" class="idcontact">
  <?php include_once "contact.php" ?>
</div>
 </body>
