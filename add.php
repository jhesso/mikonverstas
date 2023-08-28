<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mikonverstas</title>
	</head>
	<body>
	<?php
		include_once("config.php");

		if(isset($_POST['Submit']))
		{
			$name = $_POST['name'];
			$machine_id = $_POST['machine_id'];
			$serial = $_POST['serial'];
			if(empty($name) || empty($machine_id))
			{

				if(empty($name))
				{
					echo "<font color='red'>name field is empty.</font><br/>";
				}

				if(empty($machine_id))
				{
					echo "<font color='red'>machine_id field is empty.</font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
			}
			else
			{
				$sql = "INSERT INTO laite(name, machine_id, serial) VALUES(:name, :machine_id, :serial)";
				$query = $dbConnection->prepare($sql);

				$query->bindparam(':name', $name);
				$query->bindparam(':machine_id', $machine_id);
				$query->bindparam(':serial', $serial);
				$query->execute();
				echo "<font color='green'>Data added successfully.";
				echo "<br/><a href='laitteet.php'>View Result</a>";
			}
		}
	?>
	</body>
</html>
