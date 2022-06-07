<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "db1";

$conn = mysqli_connect($host, $user, $pass, $database);
if(!$conn){
    echo "connection failed!";
} 