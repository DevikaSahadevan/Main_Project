<?php


$id=$_GET['id'];

include '../dbconnect.php';
$sql="UPDATE `table_login` SET sts = '2' WHERE username = '$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Rejected!');location.href='index.php';</script>";
     else
     	{"<script>alert('error!');location.href='index.php';</script>";
		}

?>