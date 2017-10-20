<?php

require_once('connect.php');

$sql ="DELETE FROM  sent_message WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../sent_messages.php');


?>