<?php

	session_start();
    include 'dbconnect.php';

	$sitter_res= mysql_query("SELECT * from tbl_sitterreg");
	if($sitter_res && mysql_num_rows($sitter_res) > 0){
	   $sitter_check=true;
	}
	else{
		$sitter_check= false;
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #dddddd;
		}
	</style>

</head>
<body>

				<table>
				<tr>
					<th>Baby Sitter Name</th>
					<th>Contact Number</th>
					<th>Mail ID</th>
					<th>Actions</th>
				</tr>
			<?php
			

			while($row= mysql_fetch_array($sitter_res))
			{
				?> 
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['phno']; ?></td>
						<td><?php echo $row['mailid']; ?></td>
						<td>
						<?php 
						// echo $row['attendance'];
						if($row['attendance']=="deactive")
						{?>
						<a href="activate.php?sid=<?php echo $row['sitter_id'];?>"><button type="submit" class='btn btn-primary' name="activate">Check In</button></a>&nbsp
						<?php } 
						else { ?>
						<a href="deactivate.php?sid=<?php echo $row['sitter_id'];?>"><button type="submit" class='btn btn-primary' name="deactivate">Check Out</button></a>
						<?php
						}
						?>
						</td>
						<!-- <form action="activate.php" method="POST">
						<td><input type='hidden' name='sid' value='<?php echo $row['sitter_id'];?>'>
						<button type="submit" class='btn btn-primary' name="activate">Check In</button></td>
						</from>
					
						<form action="deactivate.php" method="POST">
						<td><input type="hidden" name="id" value="<?php echo $row['sitter_id'];?>">
						<button type='submit' class='btn btn-primary' name='deactivate'>Check Out</button></td>
						</form> -->
						
					</tr>
			<?php
			}
	?>
	</table>
</body>
</html>
	

 <!-- date_default_timezone_set('Asia/Kathmandu');
 //$current_date = date('Y-m-d h:i:s');
    $curr_date = date('Y-m-d h:i A');
   $exp_date_time = explode(' ', $curr_date);
    $curr_date =  $exp_date_time['0'];
    $curr_time =  $exp_date_time['1']. ' ' .$exp_date_time['2'];
 extract($_POST);

 
 $mql="SELECT * FROM `tbl_sitterreg`";
 $mo=mysql_query($con,$mql);
 $ti=mysql_fetch_array($mo);
 echo $user_id = $ti['sitter_id'];
$user_id = $_GET['id'];
   $sql = "INSERT INTO attendance (user_id, curr_date,curr_time,present)
   VALUES ('$user_id','$curr_date','$curr_time',1)";


 if ($con->query($sql) === TRUE) {
   $attend_count = 0;
  $attend = "select * from users where id = '$user_id'";
  $result_attend = $con->query($attend);
  $row_attend = mysql_fetch_array($result_attend);
   $cnt = $row_attend['attendance_count'];
    $attend_count = $attend_count + 1;
     $sql1 = "UPDATE users SET attendance_count = attendance_count + '$attend_count' where id='$user_id'";
     $con->query($sql1) ; -->

<!-- <script type="text/javascript">
window.location="attendance.php";
</script>
<script type="text/javascript">
window.location="../attendance.php";
</script> -->