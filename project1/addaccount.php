<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
   
    <title>add supervisor</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script type='text/javascript'>
	
  
   
     
     </script>
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SUPPORT SERVICE</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="adminpanel.html">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <span data-feather="file"></span>
              ADD SUPERVISOR
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addaccount.php">
              <span data-feather="shopping-cart"></span>
              EDIT AC
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="target.php">
              <span data-feather="shopping-cart"></span>
              Target
            </a>
          </li>
          
         
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">
              <span data-feather="file-text"></span>
              feedback
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="request.php">
              <span data-feather="file-text"></span>
              Requests
            </a>
          </li>
         
        </ul>
      </div>
    </nav>

	</div>
</div>
<!-- Grid system-->

			<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-3">
					<br>
		
					  <h4><font color="gray">Add Amount</font></h4>
					 <form role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
					 <div class="form-group">
										<label  for="d">User name</label>
										<select name='user' id="i3" required="" class="form-control form-control-sm">
										<option value="">---Select---</option>
										<?php
						
											include 'db_conn.php';
											$q="select user from signin";
											$r=mysqli_query($conn,$q);
											while($row=mysqli_fetch_array($r))
												{
										
													$user=$row["user"];
													echo "<option value='".$user."'>".$user."</option>";
												}
										?>
										</select>										
										</div>							
											
                           
                            
										<div class="form-group">
										<label  for="d">Enter Amount</label>
										<input type="text" name="amount" autocomplete="off" id="i3" required="" class="form-control form-control-sm" placeholder="Amount...">
										</div>								
										<br>
										<button type="submit" name="submit" class="btn btn-success">Add</button>

					 </form>
					</div>

					<div class="col-sm-6">
							<div class="table-responsive">
							  <table class="table">
								<tr>
								<th>Sl NO</th>
								<th>User name</th>
								<th>City</th>
								<th>Phone No</th>
								<th>Email</th>
								<th>Amount</th>
								



								</tr>
							 
						<?php
						
							include 'db_conn.php';
							$slno=0;
							

									$q="select * from signin";
									$r=mysqli_query($conn,$q);
									while($row=mysqli_fetch_array($r))
									{
										
										$user=$row["user"];
										$city=$row["city"];
										$phone=$row["Phone"];
										$email=$row["email"];
										$db_Account=$row["account"];
								
							
									$slno++;
									echo "<tr>";
									echo "<td>".$slno."</td>";
									echo "<td>".$user."</td>";
									echo "<td>".$city."</td>";
									echo "<td>".$phone."</td>";
									echo "<td>".$email."</td>";
									echo "<td>".$db_Account."</td>";
									
									
									echo "<tr>";	
										
										
									}
									
									
									
						
						?>
						 </table>
							</div>
			
					</div>
			</div>
			<?php
								if(isset($_POST['submit'])) 
									
								{ 
									include 'db_conn.php';
										$amount=$_POST["amount"];
							           	$username=$_POST["user"];
									  
										$q="select account from signin where user='$username'";
										$r=mysqli_query($conn,$q);
										while($row=mysqli_fetch_array($r))
										{
										
											$account=$row["account"];
										
										}
										$amount_new=$account+$amount;
										$q="update signin set account='$amount_new' where user='$username'";
										$r=mysqli_query($conn,$q);
										if($r)

											{
							
												echo "<script> alert('Successfully Updated');
																	window.location.href='addaccount.php';
																	</script>";
											}
												
											else
											{
							
												echo "<script> alert('failed to Update!!!');
																	window.location.href='addaccount.html';
																	</script>";
											}


								}
								
			
			?>
			</div>

<hr color="red" height="2">
							<div class="row">
							<div class="col-sm-3">
							</div>
							<div class="col-sm-3">
							<br>
		
										<h4><font color="gray">Add Expenditure</font></h4>
									<form role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									<div class="form-group">
														<label  for="d">Service</label>
														<textarea id="form_message" name="message" class="form-control" placeholder="Write the reason for expense." rows="6" required="required" ></textarea>
																			
														</div>							
															
											
											
														<div class="form-group">
														<label  for="d">Enter Amount</label>
														<input type="text" name="amount" autocomplete="off" id="i3" required="" class="form-control form-control-sm" placeholder="Amount...">
														</div>								
														<br>
														<button type="submit" name="submit1" class="btn btn-success">Add</button>

									</form>
							</div>
							<div class="col-sm-6">
									<div class="table-responsive">
									<table class="table">
										<tr>
										<th>Sl NO</th>
										<th>Service</th>
										<th>amount</th>
										
										</tr>
									<?php
						
								include 'db_conn.php';
					
						

								$q="select * from admin";
								$r=mysqli_query($conn,$q);
								while($row=mysqli_fetch_array($r))
								{
									
									$eid=$row["eid"];
									$service=$row["service"];
									$expence=$row["expence"];
									
							
						
								
								echo "<tr>";
								echo "<td>".$eid."</td>";
								echo "<td>".$service."</td>";
								echo "<td>".$expence."</td>";
								
								
								echo "<tr>";	
									
									
								}
								
								
								
					
					?>
							</table>
							</div>
							</div>

							</div>
							<?php
								if(isset($_POST['submit1'])) 
									
								{ 
									include 'db_conn.php';
										$reason=$_POST["message"];
							           	$amt=$_POST["amount"];
									  
										   $q="select eid from admin";
										   $r=mysqli_query($conn,$q);
										   while($row=mysqli_fetch_array($r))
										   {
										   
											   $eid=$row["eid"];
										   
										   }
										   if($eid==null) { $eid=1;} else { $eid++; }


										$q="insert into admin values('$eid','$reason','$amt')";
										$r=mysqli_query($conn,$q);
										if($r)

											{
							
												echo "<script> alert('Successfully Updated');
																	window.location.href='addaccount.php';
																	</script>";
											}
												
											else
											{
							
												echo "<script> alert('failed to Update!!!');
																	window.location.href='addaccount.html';
																	</script>";
											}


								}
								
			
			?>



    
     <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="dashboard.js"></script>
  </body>
</html>
