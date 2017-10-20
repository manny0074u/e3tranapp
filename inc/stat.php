<?php




$sql ="SELECT SUM(count) AS totalpro FROM product ";
	$query =mysqli_query($con, $sql);
	$rw =mysqli_fetch_array($query);

	$pro_total = $rw['totalpro'];



$sql1 ="SELECT SUM(count) AS totalser FROM services ";
	$query =mysqli_query($con, $sql1);
	$rw1 =mysqli_fetch_array($query);

	$ser_total = $rw1['totalser'];



	$sql2 ="SELECT SUM(count) AS soltotal FROM solution ";
	$query =mysqli_query($con, $sql2);
	$rw2 =mysqli_fetch_array($query);

	$soltotal = $rw2['soltotal'];


	$sql3 ="SELECT SUM(count) AS blogtotal FROM blog ";
	$query =mysqli_query($con, $sql3);
	$rw3 =mysqli_fetch_array($query);

	$blogtotal = $rw3['blogtotal'];



	$sql4 ="SELECT SUM(count) AS totalmessage FROM message ";
	$query =mysqli_query($con, $sql4);
	$rw4 =mysqli_fetch_array($query);

	$totalmessage = $rw4['totalmessage'];




	$sql5 ="SELECT SUM(notify) AS totalnot FROM message ";
	$query =mysqli_query($con, $sql5);
	$rw5 =mysqli_fetch_array($query);

	$totalnot = $rw5['totalnot'];


	$sql6 ="SELECT * FROM message WHERE notify=1";
	$query = mysqli_query($con, $sql6);
	

