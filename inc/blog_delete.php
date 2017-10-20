<?php

require_once('connect.php');

$sql ="DELETE FROM  blog WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../blog.php');


?>