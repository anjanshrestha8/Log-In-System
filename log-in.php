<?php
require_once "./config.php";

$username = $_POST['username'];
echo $username;
$password = $_POST['password'];

$query = "SELECT password FROM users WHERE (name = '$username')";
$query_run = mysqli_query($conn, $query);

if (isset($query_run)) {
    echo "please login";
}
