<!DOCTYPE html>
<html>
	<head>
		<title>Envoie un mail</title>
		<meta charset="UTF-8">
		<!-- <link rel="stylesheet" href="style.css"> -->
	</head>
	<body>
	<?php
		require ('send.php');
		sendMail($_POST);
	?>
	
		<h1>Mail send</h1>
		<form method="post" action="">
			<label for="lastName">Nom : </label>
			<input type="text" id="lastName" name="nom" required /><br/>
			<label for="firstName">Prénom : </label>
			<input type="text" id="firstName" name="prenom" required /><br/>
			<label for="tel">Numéro de téléphone : </label>
			<input type="text" id="tel" name="tel" required /><br/>
			<button type="submit">Valider</button>
	
		</form>
	</body>
</html>