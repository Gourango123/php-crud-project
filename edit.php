<?php
include "./database.php";

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE id= $id");
$user = mysqli_fetch_assoc($query);
// echo "<pre>";
// var_dump($user);
// echo "</pre>";
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container m-auto">

        <div class=" m-auto w-50">

        <h2 class="text-center mb-4">User Registration Form</h2>

        <form action="./update.php?id=<?=$_GET['id']?>" method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required  value="<?= $user['name'] ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required  value="<?= $user['email'] ?>">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required  value="<?= $user['password'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

            <a href="./index.php"class="btn btn-danger">Back</a>

        </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>    