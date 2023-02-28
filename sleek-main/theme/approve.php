<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="UPDATE `tbl_login` SET sts = '1' WHERE username = '$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Approved!');location.href='index.php';</script>";
     else
     	{"<script>alert('error!');location.href='index.php';</script>";
		}

?>