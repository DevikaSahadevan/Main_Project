<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="delete from tbl_nutrition where n_id='$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Deleted!');location.href='nutrition.php';</script>";
     else
     	{"<script>alert('error!');location.href='index.php';</script>";
		}

?>