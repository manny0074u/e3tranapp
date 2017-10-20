<?php

require_once('connect.php');

$sql ="DELETE FROM  solution WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../solution.php');


?>