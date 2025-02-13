
<?php
?>





     <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <meta name="generator" content="Hugo 0.88.1">
    <title>MEMBER</title>

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

</head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SUPPORT SERVICE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav me-auto mb-2 mb-sm-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="userhome.php">Home</a>
            </li>
            
            
            
  
            
  
  
          </ul>
       
  
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LogOut</a>
          </li>
  
         
        </div>
      </div>
    </nav>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
        <h1 class="h2">Our member</h1>
       
      

      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">sl no</th>
              <th scope="col">user name</th>
              <th scope="col">city</th>
              <th scope="col">Phone No</th>
              <th scope="col">Email</th>
              
            </tr>
          </thead>

          <?php

             include 'db_conn.php';
               $slno=0;

									$q="select * from signin";
									$r=mysqli_query($conn,$q);

                  while($row=mysqli_fetch_array($r))
									{
										
										$username=$row["user"];
										$phoneno=$row["Phone"];
										$city=$row["city"];
                   $email=$row["email"];
										
									$slno++;
                  echo "<tbody>";
									echo "<tr>";
									echo "<td>".$slno."</td>";
									echo "<td>".$username."</td>";
                  echo "<td>". $city."</td>";
									echo "<td>".$phoneno."</td>";
									echo "<td>". $email."</td>";
									
									echo "</tr>";	
                  echo "</tbody>";
									
									}
       ?>

         
    </table>
    </div>
    </main>
    
    </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  
      <div class="container">
					<footer class="row row-cols-5 py-5 my-5 border-top">
					  <div class="col">
						<a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
						  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
						</a>
						<p class="text-muted">&copy; 2024</p>
					  </div>
				  
					  <div class="col">
				  
					  </div>
				  
					  <div class="col">
						<h5>Section</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="userhome.php" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="feeture2.html" class="nav-link p-0 text-muted">Features</a></li>
							
							<li class="nav-item mb-2"><a href="contact2.html" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="aboutus1.html" class="nav-link p-0 text-muted">About</a></li>
						</ul>
					  </div>
				  
					  <div class="col">
						<h5>Section</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="userhome.php" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="feeture2.html" class="nav-link p-0 text-muted">Features</a></li>
							
							<li class="nav-item mb-2"><a href="contact2.html" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="aboutus1.html" class="nav-link p-0 text-muted">About</a></li>
						</ul>
					  </div>
				  
					  <div class="col">
						<h5>Section</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="userhome.php" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="feeture2.html" class="nav-link p-0 text-muted">Features</a></li>
							
							<li class="nav-item mb-2"><a href="contact2.html" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="aboutus1.html" class="nav-link p-0 text-muted">About</a></li>
						</ul>
					  </div>
					</footer>
				  </div>
    </body>
    </html>

    

    

