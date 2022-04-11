<?php

	$student_id = $_GET["student_id"];

	$amount = $_GET["amount"];

    $date = $_GET["date"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO payment VALUES ( '', '$student_id', '$amount', '$date' )" )

		or die("Can not execute query");



	echo "Record inserted";



	echo "<p><a href=read_payment.php>READ all records</a>";

?>