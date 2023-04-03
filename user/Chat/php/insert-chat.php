<?php
session_start();
include_once "../../../dbconnect.php";

// echo '<script>alert("bbjb");</script>';
if (isset($_SESSION['username'])) {
    echo '<script>alert("bbjb");</script>';
    $outgoing_id = $_SESSION['username'];
    $incoming_id = mysql_real_escape_string($_POST['incoming_id']);
    $message = mysql_real_escape_string($_POST['message']);
    // if (!empty($message)) {
        $sql = mysql_query("INSERT INTO tbl_message (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ('$incoming_id', '$outgoing_id', '$message')") or die();
    // }
} else {
    // header("location: ../login.php");
}
