<?php

$id = $_GET["id"];

$dept = $_GET["dept"];

$title = $_GET["title"];

$credit = $_GET["credit"];

$syllabus = $_GET["syllabus"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE course SET dept='$dept', title='$title', credit='$credit', syllabus='$syllabus',  WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated";



	echo "<p><a href=read_course.php>READ all records</a>";

?>