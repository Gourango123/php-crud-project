<?php

include "./database.php";


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn,"INSERT INTO  users (name, email,password) VALUES ('$name','$email','$password')");

if($result){
    echo "is success !" ;
    header("Location: ./index.php");
  }