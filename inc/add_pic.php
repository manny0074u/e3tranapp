<?php

if (isset($_POST['title']) ){
		$title = trim($_POST['title']);

      //if they DID upload a file...   && $_FILES['message']['name'] 
        if($_FILES['picture']['name'])
        {
            //if no errors...   && !$_FILES['message']['error']
            if(!$_FILES['picture']['error'])
            {
            
                $valid_file = true;
                            
                //now is the time to modify the future file name and validate the file
                
                if($_FILES['picture']['size'] > 5120000) //can't be larger than 5 MB 5120000 10MB 11200000   && $_FILES['message']['size'] > 3072000
                {
                    
                    $valid_file = false;
                      echo "<script>alert('Oops!  Your file\'s size is too larger than 5 MB !'); </script>";
                   
                }
                
                //if the file has passed the test
                if($valid_file)
                {
                
                    $fileName = $_FILES['picture']['name']; 
                    //$fileNameMessage = $_FILES['message']['name']; 
                      
                      if(!get_magic_quotes_gpc())
                      {
                        $fileName = addslashes($fileName);
                        //$fileNameMessage = addslashes($fileNameMessage);
                      }
                      

                     if($_POST['title']==""  && ($_POST['price']=="" && ($_POST['details']=="" ))){
                 echo "<script>alert('Fields are empty !'); </script>";


                      }







                      else{
                         //$new_file_name = strtolower($fileName); //rename file
                        //move it to where we want it to be
                        move_uploaded_file($_FILES['picture']['tmp_name'], 'images/'.$fileName);
                         
                       
                      //$usercode = uniqid().uniqid();
				
					 $upload_date = date('l jS \of F Y ');
                    
											
					$sql = "INSERT INTO pictures VALUES('','".$title."','".$fileName."','1','1','".$upload_date."')";
					 $query = mysqli_query($con, $sql);

					 echo "<script>alert('Picture successfully added!'); </script>";
                    
                     }
                                         
                }
            }
            //if there is an error...
            else
            {
                //set that to be the returned message

                $msg .= "Ooops!  Your upload triggered the following error:  ".$_FILES['picture']['error'];
                //$msg .= "Ooops!  Your upload triggered the following error:  ".$_FILES['message']['error'];
            }
        }
        else
        {
            //set that to be the returned message
            $msg = "No file was uploaded:  ".$_FILES['picture']['error'];
            //$msg .= "No file was uploaded:  ".$_FILES['message']['error'];
        }

        
       
        

    
}  
?>