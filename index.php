<!DOCTYPE html>
<html>
	<head>
		<title>Envoie un mail</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
	<?php
        require('send.php');
        sendMail($_POST);
    ?>
	
		<h1>Mail send</h1>
		<form method="post" action="">
			<label for="lastName">Nom : </label>
			<input type="text" id="lastName" name="nom" required /><br/>
			<label for="firstName">Votre message : </label>
			<input type="textarea" id="message" name="message" required /><br/>
			<button type="submit">Valider</button>
	
		</form>
	</body>
</html>