<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="UPDATE `tbl_sitterreg` SET s_sts ='2' WHERE mailid ='$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Blocked!');location.href='index.php';</script>";
     else
     	{"<script>alert('error!');location.href='index.php';</script>";
		}

?>