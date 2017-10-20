<?php

require_once('connect.php');

$sql ="DELETE FROM  pictures WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

echo "<script language='javascript' type='text/javascript'>
						window.location.href='../pictures.php';
						</script>";


?>