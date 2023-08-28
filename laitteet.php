<?php
	include_once("config.php");

	$result = $dbConnection->query("SELECT * FROM laite ORDER BY id DESC");
?>

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
			<header>
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
			<div class="laitteet">
				<table width='80%' border=0>
					<tr>
						<td>nimi</td>
						<td>tunniste</td>
						<td>sarjanumero</td>
					</tr>
					<?php
						while($row = $result->fetch(PDO::FETCH_ASSOC))
						{
							echo "<tr>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['machine_id']."</td>";
							echo "<td>".$row['serial']."</td>";
						}
					?>
				</table>
				<input id="button" type="button" value="lisää" onclick="window.location.href='add.html';"></input>
			</div>
			<footer class="footer">
				<div id="content-wrap">
					<p>Handmade in Luksia by Ohjelmistkehittäjät</p>
				</div>
			</footer>
		</div>
	</body>
</html>
