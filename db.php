<?php
$host = "localhost8080";
$user = "root";
$pass = "";
$db   = "gym_mangement";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>