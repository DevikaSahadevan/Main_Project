<?php
session_start();
include 'dbconnect.php';
$outgoing_id = $_SESSION['username'];
// $sql = "SELECT * FROM tbl_users as a, messages WHERE NOT login_id = {$outgoing_id} ORDER BY user_id DESC";
$sql = "SELECT distinct * FROM tbl_login";
$query = mysql_query($sql);
$output = "";
if (mysql_num_rows($query) == 0) {
    $output .= "No users are available to chat";
} elseif (mysql_num_rows($query) > 0) {
    include_once "data.php";
}
echo $output;
?>

<!-- session_start();
    include_once "../../db_con.php";
    $outgoing_id = $_SESSION['login_id'];
    $sql = "SELECT * FROM tbl_users WHERE NOT login_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output; -->