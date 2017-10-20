<?php

require_once('connect.php');

$sql ="DELETE FROM  cat WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../add_cat.php');


?>