<!DOCTYPE html>
<html>
<head>
	<title>Record</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body style="background-color: black">
<div class="container" style="margin-top: 100px;background-color: white">
	<div class="row">
		<div class="col-md-1"></div>
	    <div class="col-md-10">
	    	<table class="table">
	    		<h1 class="text-center">Login Data</h1>
	    		<button  class="btn" style="color: white;background-color: black;margin-left:900px"> <a href="login.php" style="color: white"> Login </a> </button>
				  <thead class="black white-text">
				    <tr>
				       <th scope="col">User_ID</th>
				      <th scope="col">User_Name</th>
				      <th scope="col">User_Email</th>
				      <th scope="col">User_Password</th>
				      <th scope="col" colspan="3" class="text-center">Action </th>
				    </tr>
				  </thead>
				  <tbody>

                  
<?php

include_once 'connection.php';
 $q = "select * from login ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
?>
       

				    <tr>
				      <td><?php echo $res['id'];  ?></td>
				      <td><?php echo $res['Name'];  ?></td>
				      <td><?php echo $res['Email'];  ?></td>
				      <td><?php echo $res['Password'];  ?></td>
				      <td> <button class="btn-danger btn"> <a href="delete.php?id=
				      <?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
                      <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>
				    </tr>
<?php 
  }
?>
 	   
				  </tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>