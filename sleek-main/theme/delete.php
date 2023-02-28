<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="UPDATE `tbl_services` SET s_sts ='2' WHERE service_id='$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Deleted!');location.href='eservices.php';</script>";
     else
     	{"<script>alert('error!');location.href='eservices.php';</script>";
		}

?>