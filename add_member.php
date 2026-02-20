<?php
include "db.php";

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$package = $_POST['package'];
$amount = $_POST['amount'];

$sql = "INSERT INTO members (name, age, phone, email, package, amount)
        VALUES ('$name','$age','$phone','$email','$package','$amount')";

if($conn->query($sql)){
    echo "success";
}else{
    echo "error";
}
?>