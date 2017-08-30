<!-- PHP -->

<?php



if (isset($_POST['btn_submit_marks'])) 
	{
		echo $marks = $_POST['marks'];
		$main_grade = calc_grade($marks)
	}

?>

<!-- END OF PHP -->


<!-- HTML -->

<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>

	<!-- CSS -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>



<!-- FORM -->

<div class="container">
	
	<form method="POST" action="form.php">
		
		<label> Enter Marks </label><br>
			<input type="number" name="marks" class="form_control"/><br>
				<input type="submit" name="btn_submit_marks" class="btn btn-default"/>

	</form>

	<?php

	if (isset($_POST['btn_submit_marks'])) 
	 	# code...
	    echo "$main_grade";
	?>
</div>










	<!-- SCRIPTS -->
	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>