<?php
include "db.php";

$member = $_POST['member'];
$trainer = $_POST['trainer'];

$sql = "INSERT INTO assignments (member_name, trainer_name)
        VALUES ('$member','$trainer')";

if($conn->query($sql)){
    echo "success";
}else{
    echo "error";
}
?>