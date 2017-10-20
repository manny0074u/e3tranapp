<?php

require_once('connect.php');


$sql ="SELECT status FROM videos WHERE id='".$_GET['id']."'";
	$query = mysqli_query($con, $sql);
	$rw= mysqli_fetch_array($query);



if($rw['status'] == 0){
	$sql = "UPDATE videos SET status = 1 WHERE id=".$_GET['id'];
	$query = mysqli_query($con, $sql);

	echo "<script language='javascript' type='text/javascript'>
						window.location.href='../videos.php';
						</script>";


	}


else{
	$sql= "UPDATE videos SET status = 0 WHERE id=".$_GET['id'];
	$query= mysqli_query($con, $sql);

	echo "<script language='javascript' type='text/javascript'>
						window.location.href='../videos.php';
						</script>";
}


?>