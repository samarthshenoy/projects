<?php
include 'db_conn.php';



$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

$q="insert into feedback values('$name','$email','$message')";
	  

       $r=mysqli_query($conn,$q);

{
      echo '<script>alert("Message Successfully Sent")</script>';
      echo("<script>window.location.href='contact1.html'</script>");
}
									

														



?>