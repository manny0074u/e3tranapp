<?php

require_once('connect.php');

$sql ="DELETE FROM  slides WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

echo "<script language='javascript' type='text/javascript'>
						window.location.href='../slides.php';
						</script>";


?>