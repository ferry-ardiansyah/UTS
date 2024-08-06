<?php
$host = "127.0.0.1:4306";
$username = "root";
$password = "";
$database = "manufaktur_feri";
$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>