<?php


if (isset($_POST['name']) and isset($_POST['price'])){

  $name = trim($_POST['name']);
    
    $price = trim($_POST['price']);
    
    if($name=="" && $price==""){
      echo "<script>alert('Fields are empty');  </script>";
      //$msg = "Fields are empty!";
    }
    else if($name=="" || $price==""){
      echo "<script>alert('A Field is empty!');  </script>";
      //$msg = "A Field is empty!";
    }
    else{
                
      $upload_date = date('l jS \of F Y ');
                    
                      
      $sql = "INSERT INTO services VALUES('','".$name."','".$price."','1','1','".$upload_date."')";
           $query = mysqli_query($con, $sql);

            echo "<script>alert('service successfully added!'); </script>";

 
      }
     
    
}




?>