<?php

include "./database.php";


$users = mysqli_query($conn, "SELECT * FROM users");

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

      <form action="./stor.php" method="POST">

          <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
          </div>

          <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>

    <table class="table mt-5">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody>

            <?php
            while($user = mysqli_fetch_assoc($users)) {
            ?>
            <tr>
            <td><?= $user ['id'] ?></td>
            <td><?= $user ['name'] ?></td>
            <td><?= $user ['email'] ?></td>
            <td><?= $user ['password'] ?></td>
            <td>
            <a href="./delete.php?id=<?=$user['id']?>"class="btn btn-primary">Delete</a>
            <a href="./edit.php?id=<?=$user['id']?>" class="btn btn-danger">Edit</a>
          
          </td>
            </tr>
            <?php
            }
            ?>

        </tbody>
      </table>

    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>