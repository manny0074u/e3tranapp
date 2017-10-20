<?php


if (isset($_POST['title']) and isset($_POST['link'])){

  $title = trim($_POST['title']);
    
    $link = trim($_POST['link']);
    
    if($title=="" && $link==""){
      echo "<script>alert('Fields are empty');  </script>";
      //$msg = "Fields are empty!";
    }
    else if($title=="" || $link==""){
      echo "<script>alert('A Field is empty!');  </script>";
      //$msg = "A Field is empty!";
    }
    else{
                
      $upload_date = date('l jS \of F Y ');
                    
                      
      $sql = "INSERT INTO videos VALUES('','".$title."','".$link."','1','1','".$upload_date."')";
           $query = mysqli_query($con, $sql);

            echo "<script>alert('videos successfully added!'); </script>";

 
      }
     
    
}




?>