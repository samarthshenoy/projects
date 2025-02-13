<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id']))  
   ?>
   
   
<!DOCTYPE html>
<html>
<head>
	
	<title>Login Page</title>
    <link rel="stylesheet" href="indexe.css" />
</head>
<body>

      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"  action="userlogin.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
			  <div class="mb-1">
		    <label class="form-label" name="D1">Select User Type:</label>
		  </div>
			  <select class="form-select mb-3"
		          name="usertype" 
				  
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">Admin</option>
			  <option value="supervisor">Supervisor</option>
		  </select>
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">User name</label>
		    <input type="text" required
		           class="form-control" 
		           name="username" autocomplete="off"
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label" >Password</label>
		    <input type="password" required
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  
		 
		 
		  <button type="submit"  name="loginbutton" 
		          class="btn btn-primary">LOGIN</button>
		</form>
      </div>
</body>
</html>

		