<!-- -->



<style>
  body{

   
    background-color: white;
  
    width:100%;
  height: 100px;
  
  }

    .div{
      position:relative;
      left:600px;
      top:150px;
      background-color: rgb(231, 201, 201);
      width:400px;
      border-radius: 20px;
      height: 250px;
    }
    input[type='text'],input[type='password']{
      width:300px;
      height:40px;
      border-radius: 10px;
      margin-top:20px;
      margin-left:40px;
      text-align: center;
      box-shadow: lightseagreen 3px 3px 3px 3px;
      border:none;
    }
    input[type='submit']{
      position: relative;
      top:10px;
      left:42px;
      width:300px;
      height:40px;
      background-color: white;
border-radius: 10px;
color:Black;
border:1px solid black;
font-size: 16px;
    }
    input[type=submit]:hover {
  background-color:orange;
}
input[type=text]:hover {
  background-color:lightblue;

}
input[type=password]:hover {
  background-color:lightblue;
}
      h4{
      position: relative;
        left:670px;
        top:70px;
    }
    .signup a{
      position: relative;
        left:860px;
        top:30px;
    }
    .loginmain{
  width:900px;
  height:500px;
  background-color:white;
  display:flex;
  position:relative;
  left:300px;
 top:170px;
}
.signpic{
  width: 450px;
  height:500px;
  background-color:black;
  border-radius: 15px;
}
.mmc {
  width:450px;
  height:100%;
  margin:auto;
  

}
Form{
  margin-left:5px;
  margin-top:130px;
}
.signup{
  position:relative;
  top:-100px;
  left:150px;
}
form p{
  margin-left:90px;
  margin-top:19px;
}
.img1{
  width:100%;
  height:100%;
  border-radius: 15px;
}
</style>
<?php include_once "head.php" ?>
<body>

<div class="loginmain">

<div class="signpic">
<img src="./images/zoltan-tasi-rki2tyGFJO4-unsplash.jpg" class="img1">
  </div>

  <div class="mmc">
   <form method="post" action="login.inc.php">
    <input type="text" name="email" placeholder="email"><br>
    <input type="password" name="pass" placeholder="password"><br>
    <input type="submit" Value="Login">
    <p>Don't you have an account?<a href="signup.php">Register</a></p>
  </form>
  </div>
</div>







</body>