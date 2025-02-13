<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "project";

$conn= mysqli_connect($sname, $uname, $password);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}
$db=mysqli_select_db($conn,$db_name);
if (!$db) {
	echo "Database Connection Failed!";
	exit();
}
?>