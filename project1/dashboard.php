<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>ADMIN DASHBOARD</title>

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
	
  
    function put_uname()
    {
        
        stffid=document.getElementById("i2").value;
        document.getElementById("i3").value=stffid;
    }
     
     
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

<!-- Grid system-->
<div class="container">

			<div class="row">
			<div class="col-sm-3">
            </div>
<div class="col-sm-3">
			<br>
		
					  <h4><font color="gray">Add Supervisor</font></h4>
					 <form role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
										<div class="form-group">
										<label  for="a">Supervisor Name</label>
										<input type="text" name="T1" autocomplete="off" id="i1" required="" class="form-control form-control-sm">
										</div>
										
										<div class="form-group">
										<label  for="b">Supervisor ID</label>
										<input type="text" name="T2" autocomplete="off" id="i2" required="" class="form-control form-control-sm" onblur="put_uname()";>
										</div>
										
										


										<div class="form-group">
										<label  for="c">City</label>
										<input type="text" name="D1"  id="d1" required="" class="form-control form-control-sm" value="">
							
										</div>
										
										<div class="form-group">
										<label  for="d">User Name</label>
										<input type="text" name="T3" autocomplete="off" id="i3" required="" class="form-control form-control-sm" readonly>
										</div>
										
										<div class="form-group">
										<label  for="e">Password</label>
										<input type="password" name="T4" autocomplete="off" id="t4" required="" class="form-control form-control-sm">
										</div>
										
										<button type="submit" name="submit" class="btn btn-success">Add</button>
					 </form>
			</div>
			<div class="col-sm-6">
							<div class="table-responsive">
							  <table class="table">
								<tr>
								<th>Sl NO</th>
								<th>supervisor Id</th>
								<th>Supervisor Name</th>
								<th>City</th>
								<th>Password</th>
								<th>action</th>
								</tr>
							 
						<?php
						
							include 'db_conn.php';
							$slno=0;
									$q="select * from supervisor";
									$r=mysqli_query($conn,$q);
									while($row=mysqli_fetch_array($r))
									{
										
										$supervisorid=$row["supervisor_id"];
										$supervisorname=$row["supervisor_name"];
										$city=$row["city"];
										$password=$row["password"];
									$slno++;
									echo "<tr>";
									echo "<td>".$slno."</td>";
									echo "<td>".$supervisorid."</td>";
									echo "<td>".$supervisorname."</td>";
									echo "<td>".$city."</td>";
									echo "<td>".$password."</td>";
									echo "<td><a href='deletecnfig.php?id=".$supervisorid."'><img src='deleteicon.png' height='30' width='20'></a></td>";
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
									$supervisorname=$_POST["T1"];
									$supervisorid=$_POST["T2"];//103
									$uname=$_POST["T3"];
									$password=$_POST["T4"];
									$city=$_POST["D1"];
									
									
									$flag=0;
									
									$q="select supervisor_id from supervisor";
									$r=mysqli_query($conn,$q);
									while($row=mysqli_fetch_array($r))
									{
										$supervisoridfromdb=$row["supervisor_id"];
										if($supervisoridfromdb==$supervisorid)
										{
											$flag=1;
										}
										
									}
									if($flag==1)
									{
										echo "<div class='alert alert-danger'>
										<strong>Error!!</strong> Given Data Already Exist.
										</div>";
										
									}
									else
									{
										$q="insert into supervisor values('$supervisorid','$supervisorname','$city','$uname','$password')";
										$r=mysqli_query($conn,$q);
										if($r)
										{
											echo "<script> alert('Supervisor Details Sucessfully Added');
											window.location.href='dashboard.php';
											</script>";
											
										}
										else
										{
											echo "<div class='alert alert-danger'>
											<strong>Error!!</strong> Operation Failed
											</div>";
										}
									}
								}
			
			?>
</div>





    
     <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="dashboard.js"></script>
  </body>
</html>
