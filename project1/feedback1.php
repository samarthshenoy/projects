<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>FEEDBACK</title>

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
            <a class="nav-link active" aria-current="page" href="supervisor.html">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="addaccount1.php">
              <span data-feather="shopping-cart"></span>
              EDIT AC
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="target1.php">
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
            <a class="nav-link" href="feedback1.php">
              <span data-feather="file-text"></span>
              feedback
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="request1.php">
              <span data-feather="file-text"></span>
              Requests
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      <h1 class="h2">Feedback</h1>
     
    

    
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">sl no</th>
            <th scope="col">user name</th>
            
            <th scope="col">Email</th>
            <th scope="col">Message</th>
           
          </tr>
        </thead>

        <?php

           include 'db_conn.php';
             $slno=0;

                $q="select * from feedback";
                $r=mysqli_query($conn,$q);

                while($row=mysqli_fetch_array($r))
                {
                  
                  $username=$row["name"];
                  $message=$row["message"];
                 
                 $email=$row["email"];
                  
                $slno++;
                echo "<tbody>";
                echo "<tr>";
                echo "<td>".$slno."</td>";
                echo "<td>".$username."</td>";
                
                echo "<td>".$email."</td>";
                echo "<td>". $message."</td>";
                
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

    
  </body>
</html>
