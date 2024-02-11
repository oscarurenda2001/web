<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Vapor Store - Registre </title>
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
	<div id="dades_registre_usuari">
		
		<form method="post">
				<br>Usuari: <input type="text" name="nom_usuari" placeholder="nom_usuari" maxlength="100" ></br>
				<br>Password: <input type="text" name="contrasenya" placeholder="contrasenya" maxlength="100" ></br>
				<br>Correu electrònic: <input type="email" name="correu" placeholder="correu" maxlength="100"></br>
				<br>Codi Postal: <input type= "tel" name="codi_postal" placeholder="codi_postal" pattern=".{5}" maxlength="5"></br>
				<br>Poblacio: <input type= "text" name= "poblacio"placeholder="poblacio" maxlength="30"></br>
				<br>Adreça: <input type="text" name="adreca"placeholder="adreca" maxlength="30"></br>
			<input type="submit" name="register" />
			
			<?php
				include("./controlador/registre.php");
			?>
			
	</div> 

	</body>
</html>