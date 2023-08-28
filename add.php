<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mikon verstas</title>
		<link rel="stylesheet" href="./style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="page-container">
			<header class="otsikko">
				<div class="otsikko">
					Mikon verstas
				</div>
				<div class="navbuttons">
					<a href="laitteet.php" class="button">Laitteet</a>
					<a href="" class="button">Opiskelijat</a>
					<a href="" class="button">Lainaukset</a>
					<a href="" class="button">Ohjaajat</a>
					<a href="" class="button">Kirjaudu ulos</a>
				</div>
			</header>
			<div class="success">
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
							echo "Data added successfully.";
							echo "<br/><a href='laitteet.php'>View Result</a>";
						}
					}
				?>
			</div>
			<footer class="footer">
				<div id="content-wrap">
					<p>Handmade in Luksia by Ohjelmistkehittäjät</p>
				</div>
			</footer>
		</div>
	</body>
	</html>
