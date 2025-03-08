<?php 
include "./database.php";

 $user = $_POST;
 $id = $_GET['id'];
//  var_dump($id);
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $result = mysqli_query($conn, " UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id= $id");

 if($result){
    echo "is success !" ;
    header("Location: ./index.php");
  }


?>
