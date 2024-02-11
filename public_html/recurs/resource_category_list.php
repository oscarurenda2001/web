<html lang="ca">
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Vapor Store - Categories </title>
		<link rel="stylesheet" type="text/css" href="css/prodlist.css">
		<script src="js/jquery-3.7.1.min.js"></script>
		<script src="js/funcions.js"></script>
		<link rel="icon" href="/../img/genre_rol.png">
	</head>
	<body>
	<body>
		<header>
			<a href="https://tdiw-m6.deic-docencia.uab.cat/index.php">
				<img src="/img/vaporstore_logo_hor_white_transparent.png" alt="Logo Vapor horitzontal fons transparent" width="200px">
			</a>
		</header>

		<div id=layout>
			<div class="topnav" id="topnav">
            	<b> Catergories de productes disponibles </b>
            </div>
		</div>
		
		<div class="grid-container" id="grid-container">
			<?php require __DIR__.'/../controlador/llistar_categories.php'; ?>
		</div>

		<div class="cabas" id="cabas">
			<script> cart() </script>
		</div>
	</body>
</html>
