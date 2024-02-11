<html lang="ca">
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Vapor Store - Compra </title>
		<link rel="stylesheet" type="text/css" href="css/store.css">
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
            	<b> Intent de compra </b>
            </div>
		</div>
		
		<?php

		$res = $_GET['sale'] ?? NULL;

		if($res == "nologin")
		{
			echo "<b> Sembla que no has <a href=''>iniciat sessió</a>.</b>"; 
		    echo "<b> No tens compte? <a href=''>Enregistra't </a>.</b>";
		}			
		if($res == "buit")
			echo "<b>No hi ha cap producte al cabas. Afegeix-ne desde la <a href='https://tdiw-m6.deic-docencia.uab.cat/index.php'> botiga! </a></b>";
		if($res == "success")
			echo "<b> Compra exitosa! </b>"
		?>

		
	</body>
</html>
