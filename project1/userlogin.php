<?php



	include 'db_conn.php';



	$pw=$_POST["password"];
	$un=$_POST["username"];
	$type=$_POST["usertype"];
	

	if($type=="admin"){
		$flag=0;
	
if( $un=="admin" && $pw=="sahyadri")
			{
				$flag=1;
			}					 if($flag==1)	{ 
										header("location:adminpanel.html");
									}

									else
									{
										echo "<script> alert('Please Enter Valid Username and Password___!!!!');
										window.location.href='index.php';
										</script>";
									}
								}
	 
if($type=="supervisor")
{
        $flag=0;
        $q="select * from supervisor";
        $r=mysqli_query($conn,$q);
        while($row=mysqli_fetch_array($r))
        {
            
            $staffuname=$row["supervisor_name"];
            $staffpwd=$row["password"];
            if(strcmp($un,$staffuname)==0 && strcmp($pw,$staffpwd)==0)
            {
                $flag=1;
            }
        }
        if($flag==1)
        {
            $_SESSION["logname"]=$un;
            header('location:supervisor.html');
        }
        else
        {
            echo "<script> alert('Please Enter Valid Username and Password___!!!!');
										window.location.href='index.php';
										</script>";
        }
}



if($type=="user")
									{
											$flag=0;
											$q="select * from signin";
											$r=mysqli_query($conn,$q);
											while($row=mysqli_fetch_array($r))
											{
												
												$staffuname=$row["user"];
												$staffpwd=$row["password"];
												if(strcmp($un,$staffuname)==0 && strcmp($pw,$staffpwd)==0)
												{
													$flag=1;
												}
											}
											if($flag==1)
											{
												$_SESSION["logname"]=$un;
												header("location:userhome.php");
											}
											else
											{
												echo "<script> alert('Please Enter Valid Username and Password___!!!!');
										window.location.href='index.php';
										</script>";
											}
									}
								
    ?>
