<?php

$hostname = "localhost";
$username = "root";
$password = "anjanshrestha8";
$dbname = "Login";

$conn = mysqli_connect("$hostname", $username, $password, $dbname);

if (!$conn) {
    echo "connection vayena";
} else {
    echo "connection ta vyo ";
}
