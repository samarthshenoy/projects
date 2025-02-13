<?php
include 'db_conn.php';



$first=$_POST["firstname"];
$last=$_POST["lastname"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$mobile=$_POST["phone"];
$role=$_POST["role"];
$country=$_POST["country"];
$state=$_POST["state"];
$city=$_POST["city"];
$address=$_POST["address"];
$pincode=$_POST["pin"];
$occupation=$_POST["occupation"];
$companyname=$_POST["company"];
$pwd=$_POST["pwd"];
$cpwd=$_POST["cpwd"];




										if($pwd != $cpwd)
									
							
										{
											echo "<script> alert('Please Enter valid password');
											window.location.href='help1.html';
											</script>";   
										}
		$q="insert into request values('$first','$last','$email','$dob','$mobile','$role','$country','$state','$city','$address','$pincode','$occupation','$companyname','$pwd','$cpwd')";
       $r=mysqli_query($conn,$q);
	   if($r)

					 {
     
						echo "<script> alert('Successfully Registered');
											window.location.href='help1.html';
											</script>";
	                 }
                        
					 else
					 {
	
						echo "<script> alert('failed to register!!!');
											window.location.href='help1.html';
											</script>";
                     }




?>