<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dbsite2022";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn -> connect_error) {
    die("Database tidak terkoneksi" .$conn -> connect_error);
}


?>