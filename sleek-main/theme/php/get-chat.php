<?php
session_start();
if (isset($_SESSION['username'])) {
    include_once "../../../dbconnect.php";
    $outgoing_id = $_SESSION['username'];
    $incoming_id = mysql_real_escape_string($_POST['incoming_id']);
    $output = "";
    $sql = "SELECT * FROM tbl_message";
    $query = mysql_query($sql);
        while ($row = mysql_fetch_assoc($query)) {
            if ($row['outgoing_msg_id'] === $outgoing_id) {
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>' . $row['msg'] . '</p>
                                </div>
                                </div>';
            } else {
                $output .= '<div class="chat incoming">
                                
                                <div class="details">
                                    <p>' . $row['msg'] . '</p>
                                </div>
                                </div>';
            }
        }
    
    echo $output;
} else {
    // header("location: ../login.php");
}
// <img src="php/images/' . $row['img'] . '" alt="">