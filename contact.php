<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>RollercoasterPro</title>
</head>
<body>
	<header>
		<?php
		require_once "header.php";
		?>
		<h1>Contact</h1>
	</header>
	<main>
		<form action="backend/contactController.php">
			<div class="form">
				<div class="form-group">
					<p>Naam:</p>
					<input type="text" name="naam">
				</div>
				<div class="form-group">
					<p>Onderwerp:</p>
					<select name="onderwerp" id="onderwerp">
						<option value="">- Kies een onderwerp -</option>
						<option value="1">Achtbaan</option>
						<option value="2">Karretjes</option>
						<option value="3">Metaal</option>
					</select>
				</div>
				<div class="form-group">
					<p>Bericht:</p>
					<textarea name="bericht" id="bericht" cols="30" rows="5"></textarea>
				</div>
				<div class="form-group">
					<p>Emailadres:</p>
					<input type="email" name="email">
				</div>
			</div>
		</form>
		
	</main>
</body>
</html>