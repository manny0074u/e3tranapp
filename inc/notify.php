<?php

require_once('connect.php');


$rw6id = $_GET['id'];


$sql ="SELECT notify FROM message WHERE id='".$_GET['id']."'";
	$query = mysqli_query($con, $sql);
	$rw= mysqli_fetch_array($query);



if($rw['notify'] == 1){
	$sql = "UPDATE message SET notify = 1 WHERE id='".$_GET['id']."'";
	$query = mysqli_query($con, $sql);

	//header('Location: ../messages.php?id='.$rw['id'].'');

	 //header("Location: confirm_booking.php?rt=".$rwid);


	}






?>