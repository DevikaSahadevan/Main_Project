<?php
include '../dbconnect.php';
$pay_id = $_POST['payment_id'];
$amount = $_POST['amt'];
$user = $_POST['user'];
$pay_query = mysql_query("INSERT INTO `tbl_payment`(`transaction_id`, `amount`, `user`) VALUES('$pay_id', '$amount', '$user')");
?>