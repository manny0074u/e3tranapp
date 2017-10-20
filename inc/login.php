<?php
	session_start();
	include("inc/connect.php"); //Establishing connection with our database
	
	$msg=""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["email"]) || empty($_POST["password"]))
		{
			echo "<script>alert('Fields are empty');  </script>";
		}else
		{
			// Define $email and $password
			$email=$_POST['email'];
			$password=$_POST['password'];

			// To protect from MySQL injection
			$email = stripslashes($email);
			$password = stripslashes($password);
			$email = mysqli_real_escape_string($con, $email);
			$password = mysqli_real_escape_string($con, $password);
			
			//Check email and password from database
			$sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
			$result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result);
			
			//If email and password exist in our database then create a session.
			//Otherwise echo error.
			
						
			if($row['email']!=$email && $row['password']!=$password){
				$msg = '<div class="alert alert-danger">
											<button data-dismiss="alert" class="close">
												&times;
											</button>
											<strong>Invalid Login,</strong> Check your email and password</a>
											
										</div>';
				
			}
			else{
				
				 $_SESSION['email'] =$row['email'];
				echo "<script language='javascript' type='text/javascript'>
						window.location.href='dashboard.php';
						</script>";
			}

		}
	}

?>
























