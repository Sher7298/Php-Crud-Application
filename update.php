<?php

include_once 'connection.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $username = $_POST['username'];
 $useremail = $_POST['useremail'];
 $password = $_POST['password'];
 $q = " UPDATE `login` SET `Name`='$username',`Email`='$useremail',`Password`='$password' WHERE id=$id ";

 $query = mysqli_query($con,$q);

 header('location:Record.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black">

 <div class="col-lg-6 m-auto">
 
 <form method="post" >
 
 <br><br><div class="card">
 
 <div class="card-header">
 <h1 class="text-black text-center">  Update_Record </h1>
 </div><br>

 <label class="text-center"> User_Name </label>
 <input type="text" name="username" class="form-control" > <br>

 <label class="text-center"> User_Password </label>
 <input type="text" name="password" class="form-control"> <br>
  <label class="text-center"> User_Email </label>
 <input type="email" name="useremail" class="form-control"> <br>

 <button  type="submit" name="done" style="height: 40px;width: 120px;margin-left: 500px;color: white;background-color: black"> Update </button><br>

 </div>
 </form>
 </div>
</body>
</html>