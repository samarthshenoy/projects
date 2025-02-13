
<?php
?>





     <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    
    <title>accounts</title>

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
      
        <h1 class="h2">USERS CONTRIBUTION</h1>
       
      

     
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">sl no</th>
              <th scope="col">user name</th>
             
              <th scope="col">Phone No</th>
              <th scope="col">Email</th>
              <th scope="col">city</th>
              <th scope="col">Account</th>
              
            </tr>
          </thead>

          <?php

             include 'db_conn.php';
               $slno=0;
               $total1=0;
               
									$q="select * from signin";
									$r=mysqli_query($conn,$q);
                  echo "<tbody>";
                  while($row=mysqli_fetch_array($r))
									{
										
										$username=$row["user"];
										$phoneno=$row["Phone"];
										$city=$row["city"];
                    $account=$row["account"];
                    $email=$row["email"];
                                        
                 
										
                      $slno++;
                 
                      echo "<tr>";
                      echo "<td>".$slno."</td>";
                      echo "<td>".$username."</td>";
                      
                      echo "<td>".$phoneno."</td>";
                      echo "<td>".$email."</td>";
                      echo "<td>".$city."</td>";
                      echo "<td>".$account."</td>";
                                      
                      
                      echo "</tr>";	
                     
                      $total1=$total1+$account;
									}
                  echo "<tr>";
                  echo "<td colspan='6' align='center'><big><b>Total Amount=".$total1."</b></big></td>";

                  echo "</tbody>";
                
                   
       ?>

         
    </table>
    </div>



    <br><br>
    <h1 class="h2">INVESTMENT</h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">sl no</th>
              <th scope="col">Reason of expense</th>
             
              <th scope="col">Expense Amount</th>
              
              
            </tr>
          </thead>

          <?php

             include 'db_conn.php';
              
               $total2=0;
               
									$q="select * from admin";
									$r=mysqli_query($conn,$q);
                  echo "<tbody>";
                  while($row=mysqli_fetch_array($r))
									{
										
										$eid=$row["eid"];
										$service=$row["service"];
										$expence=$row["expence"];
                   
                                        
                 
										
                     
                 
                      echo "<tr>";
                      echo "<td>".$eid."</td>";
                      echo "<td>".$service."</td>";
                      
                      echo "<td>".$expence."</td>";
                     
                      echo "</tr>";	
                     
                      $total2=$total2+$expence;
									}
                  echo "<tr>";
                  echo "<td colspan='6' align='center'><big><b>Total Expense Amount=".$total2."</b></big></td>";

                  echo "</tbody>";
                
                   
       ?>

         
    </table>
    </div>
<br><br>
<h1 class="h2">CONTRIBUTION AVAILABLE</h1>
<hr>

    <div class="table-responsive">
      <br>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Total Collected Amount</th>
              <th scope="col">Total amount Expensed</th>             
              <th scope="col">Balance</th>             
              
            </tr>
          </thead>
          <tbody>
            <td><?php echo $total1;?></td>
            <td><?php echo $total2;?></td>
            <td><?php echo ($total1-$total2);?></td>
          </tbody>

   </table>
    </div>
    <br><br><br><br><br><br><br><br><br>
    </main>
    
    </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  
     
    </body>
    </html>

    

    

