<?php

// Include MySQL class
require_once('connect.php');
// Include database connection



if (isset($_POST['email1'])){

	
		
		$email = trim($_POST['email1']);
	
		
		if($email==""){
			$msg = "Field is empty!";
		}
		else if($email==""){
			$msg = "A Field is empty!";
		}
		else{
								
			$sql = "SELECT * FROM admin WHERE email='".$email."'";
				$query 	= mysqli_query($con, $sql);
			    $rw = mysqli_fetch_array($query);

			
						
			if($rw['email']!=$email ){
				$msg = "No account attached to this email, Contact the site developer for more info";
			}
			else{
				SendEmail($rw['email'], $rw['password']);

				

				 echo "<script>alert('An email has been sent with your login details !');  window.location='index.php'</script>";
			}

		
			
			
		
}
}

function SendEmail($email, $pass){
	// to
	$to  = $email;
							
	// subject
	$subject = 'Password Retrieval';

	// message
	$message = '
	<html>
	<head>
	  <title></title>
	</head>
	<body>
	  <p>Email : '.$email.'.</p>
	  <p>Password : '.$pass.'.</p>
	</body>
	</html>
	';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: '.strtolower(trim($to)). "\r\n";
	$headers .= 'From: '.strtolower(trim("info@4tensolutions.com"))."\r\n";
	//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

	// Mail it
	mail($to, $subject, $message, $headers);
}


?>



