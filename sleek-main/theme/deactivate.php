<?php

include 'dbconnect.php';

if(isset($_GET['sid'])){

   echo $id =$_GET['sid'];
   
  

  $act = "UPDATE `tbl_sitterreg` SET attendance='deactive' WHERE sitter_id='$id'";

  $act_run = mysql_query($act);

  if($act_run){

    echo '<script>alert("Deactivated");</script>';

    echo '<script>window.location.href="check-attendance.php"</script>';

  }

}

?>
