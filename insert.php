<?php
include ("conn.php");
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    // var_dump($_POST);
    $login = $_POST['login'];


    $sql = "INSERT INTO `fb_user` (`email`,`password`)
     VALUES ('$email','$password')";
     $check = mysqli_query($conn,$sql);
     if ($check) {
         echo "data inserted";
         header('location:tes.php');
     }else {
         echo "error";
     }
}