<?php
include_once 'insertion.php';
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Crud Operation</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body style="background-color: black">
<div class="container">
	<div class="row" style="margin-top: 100px">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			
			<!-- Material form login -->
					<div class="card" style="background-color: white">
 <button class="btn btn-rounded" style="background-color: black;color: white"><a href="Record.php" style="color: white"> Click Here For  User_Record</a></button>
					  <h5 class="card-header info-color white-text text-center py-4">
					    <strong style="font-size: 30px;font-family: arial">Login</strong>
					  </h5>


					  <!--Card content-->
					  <div class="card-body px-lg-5 pt-0">

					    <!-- Form -->
					    <form class="text-center"  style="color: #757575;" action="Record.php" method="POST">
                          <!-- Name -->
					      <div class="md-form">
					        <input type="text" name="name" class="form-control" required>
					        <label style="color: black">Name</label>
					      </div>
					      <!-- Email -->
					      <div class="md-form">
					        <input type="email" name="email" class="form-control" required>
					        <label style="color: black" >E-mail</label>
					      </div>

					      <!-- Password -->
					      <div class="md-form">
					        <input type="password" name="password" class="form-control" required>
					        <label style="color: black">Password</label>
					      </div>
					      <!-- Sign in button -->
					     <button type="submit" name="done" class="btn btn-rounded" style="margin-right: -280px;background-color: black;color: white">Login</button>
					      <!-- Register -->
					      <p style="color: black">Not a member?
					        <a href="#" style="color: black"> Register</a>
					      </p>	
					        </div>
					      </div>

					    

					      				    
					    </form><!-- Form -->
					  </div>
            	</div><!-- Material form login -->
					
		</div> <!-- column close -->
		</div><!--  row closed -->
	</div>// <!-- container closed -->
</div>

</body>
</html>