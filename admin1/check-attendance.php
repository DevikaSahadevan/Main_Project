<?php

session_start();


include('../includes/connection.php');
 date_default_timezone_set('Asia/Kathmandu');
 //$current_date = date('Y-m-d h:i:s');
    $curr_date = date('Y-m-d h:i A');
   $exp_date_time = explode(' ', $curr_date);
    $curr_date =  $exp_date_time['0'];
    $curr_time =  $exp_date_time['1']. ' ' .$exp_date_time['2'];
 //extract($_POST);

$user_id = $_GET['id'];




   $sql = "INSERT INTO attendance (user_id, curr_date,curr_time,present)
   VALUES ('$user_id','$curr_date','$curr_time',1)";


 if ($connect->query($sql) === TRUE) {
   $attend_count = 0;
  $attend = "select * from users where id = '$user_id'";
  $result_attend = $connect->query($attend);
  $row_attend = mysqli_fetch_array($result_attend);
   $cnt = $row_attend['attendance_count'];
    $attend_count = $attend_count + 1;
     $sql1 = "UPDATE users SET attendance_count = attendance_count + '$attend_count' where id='$user_id'";
     $connect->query($sql1) ;

   
    
      
     ?>
<script type="text/javascript">
window.location="attendance.php";
</script>
<?php
} else {
   
      $_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="../attendance.php";
</script>
<?php
}


//}



 

//}

?>