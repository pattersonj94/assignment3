<?php
	include 'ParentClass.php';
	include 'ChildClass.php';
	$Resume = new ParentClass("", "", "", 0);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<?php
		if (!isset($_POST['Submit']))
		{
	?>
	<h1>Enter information about yourself: </h1>
	<div>
		<form method="Post">
      Name: <input type="text" name="name"><br>
      College: <input type="text" name="college"><br>
      Company: <input type="text" name="company"><br>
			Hourly: <input type="number" name="hourly"><br>
      <input type="submit" value="Submit" name="Submit">
		</form>
	</div>
	<div>
		<?php
			}
			else {
				echo "<h2>Resume: </h2>";
				$Resume->setName($_POST['name']);
				$Resume->setCollege($_POST['college']);
				$Resume->setCompany($_POST['company']);
				$Resume->setHourly($_POST['hourly']);
				echo $Resume;

				echo "<h2>Calculated Salary: </h2>";
				$newSalary = new ChildClass($_POST['name'], $_POST['college'], $_POST['company'], $_POST['hourly']);
				echo $newSalary;
			}
		?>
	</div>
</body>
</html>
