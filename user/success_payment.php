<?php
include '../dbconnect.php';
$pay_id = $_POST['payment_id'];
$amount = $_POST['amt'];
$user = $_POST['user'];
$method = "Razor pay";
$pay_query = mysql_query("INSERT INTO `tbl_payment` VALUES('$pay_id', '$amount', '$user', '$method')");
?>