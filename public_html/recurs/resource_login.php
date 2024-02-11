<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Vapor Store - Inici de sessió </title>
		<link rel="stylesheet" type="text/css" href="css/store.css">
		<script src="js/jquery-3.7.1.min.js"></script>
		<script src="js/funcions.js"></script>
		<link rel="icon" href="/../img/genre_rol.png">
	</head>

	<body>

		<header>
			<a href="https://tdiw-m6.deic-docencia.uab.cat/index.php">
				<img src="/img/vaporstore_logo_hor_white_transparent.png" alt="Logo Vapor horitzontal, fons transparent" width="200px">
			</a>
		</header>
		<div class = "formulari" id ="dades_inici_sessio">
			<form method="post" action="">
			<br>Usuari: <input type="text" name="nom" /><br />
			<br>Password: <input type="password" name="clau" /><br />
			<input type="submit" value="Iniciar Sessió" name="Iniciar_sessió"/>
			<br> No tens un compte? <a href="https://tdiw-m6.deic-docencia.uab.cat/index.php?action=registre">Enregistra't aquí</a>.</br>

			<?php
				include("./controlador/login.php");
			?>
		</div>


	</body>
</html>