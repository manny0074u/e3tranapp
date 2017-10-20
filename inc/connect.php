
<?php
//$limit = 10;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ikadmin";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



?>


<?php
/*$conn = new mysqli('localhost', 'root', '', 'demo');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
*/
?>

