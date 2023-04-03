<?php

include 'dbconnect.php';

if(isset($_POST['present'])){

    echo $id ='1';
    $date=$_POST['date'];
   exit;
   $bil="INSERT INTO tbl_attendence(`baby`,`att_date`) VALUES('$id','$date')";
   
   $bil_run = mysql_query($bil);

  if($bil_run){

    echo '<script>alert("Present");</script>';

    echo '<script>window.location.href="check-attendance.php"</script>';

  }

}

?>
