<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student info</title>
</head>
<body>

	//$_Get_form
	<div style="text-align: center;">
	<h1>Student form</h1>
	<form action="$_GET_variable.php" method="get">
		<mark>Name : </mark>
		<input type="text" name="Student_name"><br>
		<mark>Age : </mark>
		<input type="text" name="enter_age"><br>
		<mark>Gender : </mark>
		<input type="text" name="Gender"><br>
		<input type="submit" name="Done">
	</form>
	</div>


</body>
</html>