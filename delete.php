<?php
include "./database.php";

$id = $_GET['id'];

$delete =mysqli_query($conn," DELETE FROM users WHERE id = $id");

if ($delete) {
    echo "User deleted successfully.";
    header("Location: ./index.php");
}

?>
