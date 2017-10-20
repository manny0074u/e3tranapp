<?php


if (isset($_POST['cat_name']) ){

  $cat_name = trim($_POST['cat_name']);
    

    
    if($cat_name=="" ){
      echo "<script>alert('Fields are empty');  </script>";
      //$msg = "Fields are empty!";
    }
    else if($cat_name==""){
      echo "<script>alert('A Field is empty!');  </script>";
      //$msg = "A Field is empty!";
    }
    else{
                
      $upload_date = date('l jS \of F Y ');
                    
                      
      $sql = "INSERT INTO cat VALUES('','".$cat_name."','1','1','".$upload_date."')";
           $query = mysqli_query($con, $sql);

            echo "<script>alert('Category successfully added!'); window.location='add_cat.php' </script>";

 
      }
     
    
}




?>