<?php

include 'dbconnect.php';

if(isset($_GET['bid'])){

   echo $id =$_GET['bid'];
   
  

  $act = "UPDATE `tbl_registration` SET attendance='absent' WHERE baby_id='$id'";

  $act_run = mysql_query($act);

  if($act_run){

    echo '<script>alert("Absent");</script>';

    echo '<script>window.location.href="check-attendance.php"</script>';

  }

}

?>
