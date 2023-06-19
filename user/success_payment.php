<?php
include '../dbconnect.php';
$id = $_POST['id'];
$pay_id = $_POST['payment_id'];
$amount = $_POST['amt'];
$user = $_POST['user'];
$pay_query = mysql_query("INSERT INTO `tbl_payment`(`transaction_id`, `amount`, `user`,`pay_date`, `pa_id`) VALUES('$pay_id', '$amount', '$user',NOW(), '$id')");
?>