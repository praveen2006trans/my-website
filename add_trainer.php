<?php
include "db.php";

$name = $_POST['name'];

$sql = "INSERT INTO trainers (name) VALUES ('$name')";

if($conn->query($sql)){
    echo "success";
}else{
    echo "error";
}
?>