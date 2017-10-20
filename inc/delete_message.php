<?php

require_once('connect.php');

$sql ="DELETE FROM  message WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../messages.php');


?>