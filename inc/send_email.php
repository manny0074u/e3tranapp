<?php

	  if (isset($_POST['submit']) ){

     $name = trim($_POST['name']);
    
    $subject = trim($_POST['subject']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    if($name=="" && $subject==""){
      echo "<script>alert('Fields are empty');  </script>";
      //$msg = "Fields are empty!";
    }
	if($name=="" || $subject==""){
      echo "<script>alert('A Field is empty!');  </script>";
      //$msg = "A Field is empty!";
    }
    else{
                
      $date = date('l jS \of F Y ');
      $time = date("h:i:sa");
                    
                      
      $sql = "INSERT INTO sent_message VALUES('','".$name."','".$email."','".$subject."','".$message."','1','1','1','".$date."','".$time."')";
           $query = mysqli_query($con, $sql);

           
		
	

 		$to  = strtolower(trim($_POST['email']));
 	         
          // subject
          $subject = strtolower(trim($_POST['subject']));
          
          // message
          $message = strtolower(trim($_POST['message']));
          
          // To send HTML mail, the Content-type header must be set
          $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          
         $headers .= 'To: '.strtolower(trim($_POST['email'])). "\r\n";
          $headers .= 'From: e3solution.com.ng';
             
          // Mail it
          mail($to, $subject, $message, $headers);
          
          //==================================End Mail===================================================
          
          //header("Location: myaccount.php?uc=".$rw['UniqueCode']);        
            //$msg = "valid Login!";
            
           // echo "<script language='javascript' type='text/javascript'>
               // window.location.href='acc/profile_pic.php?uc=".$usercode."';
               // </script>";


           echo "<script>alert('Message Sent'); window.location ='messages.php' </script>";
}
           }





?>