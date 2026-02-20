<?php
include "db.php";

$member_id = $_POST['member_id'];
$amount = $_POST['amount'];

$conn->query("UPDATE members SET status='Paid' WHERE id=$member_id");

$conn->query("INSERT INTO payments (member_id, amount)
              VALUES ($member_id, $amount)");

echo "success";
?>