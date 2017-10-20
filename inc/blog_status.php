<?php

require_once('connect.php');


$sql ="SELECT status FROM blog WHERE id='".$_GET['id']."'";
	$query = mysqli_query($con, $sql);
	$rw= mysqli_fetch_array($query);



if($rw['status'] == 0){
	$sql = "UPDATE blog SET status = 1 WHERE id=".$_GET['id'];
	$query = mysqli_query($con, $sql);

	header('Location: ../blog.php');


	}


else{
	$sql= "UPDATE blog SET status = 0 WHERE id=".$_GET['id'];
	$query= mysqli_query($con, $sql);

	header('Location: ../blog.php');
}


?>