<?php

	$id = $_GET["id"];

	$dept = $_GET["dept"];

	$title = $_GET["title"];

    $credit = $_GET["credit"];

    $syllabus = $_GET["syllabus"];


?>



<h1>Update Record</h1>



<form method=get action=update_course_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	dept: <input type=text name=dept value='<?php echo $dept; ?>'>

	<p>

	title: <input type=text name=title value='<?php echo $title; ?>'>

	<p>

    credit: <input type=text name=credit value='<?php echo $credit; ?>'>

	<p>

    syllabus: <input type=text name=syllabus value='<?php echo $syllabus; ?>'>


	<p>

    

	<input type=submit value=Update>

</form>