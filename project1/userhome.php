<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>USER HOME</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">

    

    <!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
	.container
	{
	height:600px;
	width:100%;
	border:1px solid grey;
	font-family:'GestaRegular',Arial,HeLvetica,sans-serif;
	overflow:auto;
	white-space:nowrap;
	}
      .card{
        height: 100px;
        width: 100%;
        background-color: rgb(191, 209, 140);
        border-radius: 5%;
      }
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
    <link href="navbar.css" rel="stylesheet">
  </head>
  <body>
  <p style="background-image: url("user.jpg);">
    
<main>

 
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
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">ABOUT US</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="contact2.html">CONTACT US</a></li>
              <li><a class="dropdown-item" href="aboutus1.html">OUR MISSION</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="member.php">Team Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="help1.html">Request for help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="account.php">Account</a>
          </li>

          <!--<li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>-->


        </ul>
      <!-- <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form> -->

        <li class="nav-item">
          <a class="nav-link" href="logout.php">LogOut</a>
        </li>

       
      </div>
    </div>
  </nav>

  </div>
</main>




<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-9 text-left">
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
      
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="homeeimg4.jpg" alt="Los Angeles" class="d-block w-100">
            <div class="carousel-caption">
              <h3>HELP FOR POOR PEOPLE</h3>
              <p>We had such a great time in LA!</p>
            </div>
      
          </div>
          <div class="carousel-item">
            <img src="homeeimg2.jpg" alt="Chicago" class="d-block w-100">
            <div class="carousel-caption">
              <h3>HELP  POOR PEOPLE </h3>
              <p>IN NEED</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="homeeimg3.jpg" alt="New York" class="d-block w-100">
            <div class="carousel-caption">
              <h3>TOGETHER WE CAN STOP THE </h3>
              <h2>POVERTY</h2>
            </div>
          </div>
        </div>
      
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      <!--<h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p> -->
    </div>
    <div class="col-sm-3 sidenav"><br>
      <?php
        include 'db_conn.php';
        $q="select * from target";
        $r=mysqli_query($conn,$q);
				while($row=mysqli_fetch_array($r))
				{
												
					$content=$row["content"];
					$target_date=$row["target_date"];

          
        }
        echo "<marquee><font color='red'><b>".$content." within this date ".$target_date."</b></font></marquee>";

      ?>
	
      <div class="well" >
       
<p style="text-align:center;"><strong><u> NGO List</u></strong></p>
<div class="container" >
	
	  <div class="card" >
		 <a href="https://www.smilefoundationindia.org/" target="_blank"><p>Get Do Help</a></p>
      </div>
      <div class="well">
	  <div class="card" >
        <a href="https://www.careindia.org/" target="_blank"><p>EDUFUN FOUNDATION TRUST</a></p>
      </div></div>
	  <div class="well">
	  <div class="card" >
	  <a href="https://www.cry.org/" target="_blank"><p>Nayi Kiran help foundation</a></p>
	  </div></div>
	  <div clss="well">
	  <div class="card">
	  <a href="https://www.getdohelp.com/ngo/adeenafaq-150/shiza-foundatiom" target="_blank"><p>Shiza foundatiom</a></p>
	  </div></div>
	  <div class="well">
	  <div class="card" >
	  <a href="https://www.getdohelp.com/ngo/talapada-babubhai-punjabhai-155/pachhat-varg-vikas-mandal-" target="_blank"><p>Pachhat Varg Vikas Mandal</a></p>
	  </div></div>
	  <div class="well">
	  <div class="card">
	  <a href="https://www.getdohelp.com/ngo/pramodsingh-158/lok-seva-kendra" target="_blank"><p> Seva Kendra</a></p>
    </div></div>
    <div class="well">
      <div class="card">
    <a href="https://www.getdohelp.com/ngo/abdul-kadirkhan-164/ahmad-sewa-sansthan"target="_blank"><p> ahmad-sewa-sansthan</a></p>
	</div></div>
	 <div class="well">
      <div class="card">
    <a href="https://www.getdohelp.com/ngo/aditibadam-167/posh-foundation-"target="_blank"><p>posh-foundation</a></p>
	 </div></div>
	 <div class="well">
      <div class="card">
	 <a href="https://www.getdohelp.com/ngo/surendrareddysoma-168/snehitha-foundation"target="_blank"><p>Snehitha-foundadation</a></p>
	 </div></div>
	 <div class="well">
      <div class="card">
	 <a href="https://www.getdohelp.com/ngo/tarun-kantiroy-170/bless-foundation"target="_blank"><p>Snehitha-foundadation</a></p>
	 </div></div>
	 <div class="well">
      <div class="card">
	 <a href="https://www.getdohelp.com/ngo/joyce-eugeniakorsah-174/reta-foundation"target="_blank"><p>reta-foundation</a></p>
	 </div></div>
	 <div class="well">
      <div class="card">
	 <a href="https://www.getdohelp.com/ngo/prabirbhowmik-182/manav-kalyan"target="_blank"><p>manav-kalyan</a></p>
	 </div></div>
	 
	 
    </div>
  </div>
</div>
</div>


 <!-- <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Custom jumbotron</h1>
      <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
      <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
  </div> -->

  <!--<div class="row align-items-md-stretch">
    <div class="col-md-4">
     DFDFDFD 
    </div>
    <div class="col-md-4">
      <div class="h-100 p-5 bg-light border rounded-3">
        <h2>Add borders</h2>
        <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
        <button class="btn btn-outline-secondary" type="button">Example button</button>
      </div>
    </div>

    <div class="col-md-4">
      <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
        <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
          <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-5 fw-semibold">List group</span>
        </a>
        <div class="list-group list-group-flush border-bottom scrollarea">
          
          <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
            <div class="d-flex w-100 align-items-center justify-content-between">
              <strong class="mb-1">List group item heading</strong>
              <small class="text-muted">Mon</small>
            </div>
            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
          </a>
    
          
          
          <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
            <div class="d-flex w-100 align-items-center justify-content-between">
              <strong class="mb-1">List group item heading</strong>
              <small class="text-muted">Tues</small>
            </div>
            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
            <div class="d-flex w-100 align-items-center justify-content-between">
              <strong class="mb-1">List group item heading</strong>
              <small class="text-muted">Mon</small>
            </div>
            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
              <strong class="mb-1">List group item heading</strong>
              <small class="text-muted">Wed</small>
            </div>
            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
          </a>
          
        </div>
      </div>
     </div>


  </div>




  
  
  </div>-->


 <!-- <footer class="pt-3 mt-4 text-muted border-top">
    &copy; 2022
  </footer>-->
</div>


    <script src="dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
