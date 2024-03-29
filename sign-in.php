<?php
require_once './config.php';

$username = $_POST['username'];
$password = $_POST['password'];




$query = "INSERT INTO users (name,password) VALUES('$username','$password')";

$query_run = mysqli_query($conn, $query);

if (!$query_run) {
    echo "<br>insert vayena";
} else {
    echo "<br>insert vayo ";
}
