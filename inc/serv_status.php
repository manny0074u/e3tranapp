<?php

require_once('connect.php');


$sql ="SELECT status FROM services WHERE id='".$_GET['id']."'";
	$query = mysqli_query($con, $sql);
	$rw= mysqli_fetch_array($query);



if($rw['status'] == 0){
	$sql = "UPDATE services SET status = 1 WHERE id=".$_GET['id'];
	$query = mysqli_query($con, $sql);

	echo "<script language='javascript' type='text/javascript'>
						window.location.href='../service.php';
						</script>";


	}


else{
	$sql= "UPDATE services SET status = 0 WHERE id=".$_GET['id'];
	$query= mysqli_query($con, $sql);

	echo "<script language='javascript' type='text/javascript'>
						window.location.href='../service.php';
						</script>";
}


?>