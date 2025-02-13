<?php

$supervisorid=$_REQUEST["id"];
include 'db_conn.php';
$q="delete from supervisor where supervisor_id='$supervisorid'";
$r=mysqli_query($conn,$q);
if($r)
{
	
	echo "<script> alert('Deleted Successfully');
	window.location.href='dashboard.php';
	</script>";
	
}
else
{
	echo "<script> alert(' Operation Failed');
	window.location.href='dashboard.php';
	</script>";	
		
}
?>