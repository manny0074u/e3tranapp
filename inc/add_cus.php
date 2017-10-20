<?php


if (isset($_POST['name']) and isset($_POST['phone'])){



    $name = trim($_POST['name']);
     $phone = trim($_POST['phone']);
     $email = trim($_POST['email']);
    $sex = trim($_POST['sex']);
    $location = trim($_POST['location']);    
    
    if($name=="" && $phone==""){
      echo "<script>alert('Fields are empty');  </script>";
      //$msg = "Fields are empty!";
    }
    else if($name=="" || $phone==""){
      echo "<script>alert('A Field is empty!');  </script>";
      //$msg = "A Field is empty!";
    }
    else{
                
      $upload_date = date('l jS \of F Y ');
       $cus_code = uniqid();
                    
                      
      $sql = "INSERT INTO customers VALUES('','".$name."','".$phone."','".$email."','".$sex."','".$location."','".$cus_code."','1','1','".$upload_date."')";
           $query = mysqli_query($con, $sql);

            echo "<script>alert('Customer successfully added!'); </script>";

 
      }
     
    
}




?>