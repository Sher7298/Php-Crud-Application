
<?php 
// name,emial ,password are form field name and username ,useremail and userpassword are any variable name
include_once 'connection.php';

if(isset($_POST['done']))
{
	 $username = $_POST['name']; 
	 $useremail = $_POST['email'];  
	 $userpassword = $_POST['password'];  

	 $query = " INSERT INTO `login`(`Name`, `Email`, `Password`) VALUES ('$username','$useremail',' $userpassword')";

	$query = mysqli_query($con,$query);


			 if ($query) 
				 	{
				 		?>
							<script type="text/javascript">
								alert("Data Inserted Successfully");
							</script>
						<?php
				 	}
				 else
				 	{
				 		?>
							<script type="text/javascript">
								alert("insertion Error");
							</script>
						<?php
				 	} 	 
}
?>