<?php

	$id = $_GET["id"];

	$dept = $_GET["dept"];

	$name = $_GET["name"];

    $nid = $_GET["nid"];

    $birth = $_GET["birth"];

    $address = $_GET["address"];

?>



<h1>Update Record</h1>



<form method=get action=update_teacher_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	dept: <input type=text name=dept value='<?php echo $dept; ?>'>

	<p>

	name: <input type=text name=name value='<?php echo $name; ?>'>

	<p>

    nid: <input type=text name=nid value='<?php echo $nid; ?>'>

	<p>

    birth: <input type=text name=birth value='<?php echo $birth; ?>'>

	<p>

    address: <input type=text name=address value='<?php echo $address; ?>'>

	<p>

    

	<input type=submit value=Update>

</form>