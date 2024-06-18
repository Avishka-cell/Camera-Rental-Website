<?php 

session_start(); 

include "connect.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['email']);

    $pass = validate($_POST['pass']);

    if (empty($uname)) {

        header("Location: login.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE email='$uname' AND password='$pass'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['id'] = $row['id'];

                header("Location:camera.php");

                exit();

            }else{

                header("Location: camera.php?error=Incorect User name or password please register");

                exit();

            }

        }else{

            header("Location: camera.php?error=Incorect User name or password please register");

            exit();

        }

    }

}else{

    header("Location: camera.php");

    exit();

}