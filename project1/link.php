<?php

							include 'db_conn.php';	
								$last=$_POST["t3"];
								$first=$_POST["t2"];
								$email=$_POST["t4"];
								$city=$_POST["t5"];
								$password=$_POST["t6"];
								$cpwd=$_POST["t7"];
								$user=$_POST["t1"];
								$Phone=$_POST["t8"];


								if($password != $cpwd)
									
							
									{
										echo "<script> alert('Please Enter valid password');
										window.location.href='signin1.html';
										</script>";   
									}
									
							
										
	                 $query="INSERT INTO signin VALUES ('$user','$first','$last','$Phone','$email','$city','$password','$cpwd','','')";
					 $r=mysqli_query($conn,$query);
	   
	   

					 if($r)

					 {
     
						echo "<script> alert('Successfully Registered');
											window.location.href='index.php';
											</script>";
	                 }
                        
					 else
					 {
	
						echo "<script> alert('failed to register!!!');
											window.location.href='signin1.html';
											</script>";
                     }
			
									

				?>