<?php

$id = $_GET["id"];

$dept = $_GET["dept"];

$name = $_GET["name"];

$nid = $_GET["nid"];

$birth = $_GET["birth"];

$address = $_GET["address"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE teacher SET dept='$dept', name='$name', nid='$nid', birth='$birth', address='$address',  WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:";



	echo "<p><a href=read_teacher.php>READ all records</a>";

?>