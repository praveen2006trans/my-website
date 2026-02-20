<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if(password_verify($password, $row['password'])){
        echo "success";
    } else {
        echo "invalid";
    }
}else{
    echo "invalid";
}
?>