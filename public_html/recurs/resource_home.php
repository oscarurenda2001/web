<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Vapor Store - Inici </title>
		<link rel="stylesheet" type="text/css" href="css/store.css">
		<script src="js/jquery-3.7.1.min.js"></script>
		<script src="/../js/funcions.js"></script>
		<link rel="icon" href="/../img/genre_rol.png">
	</head>

	<body>
		<div id="trail" class="trail"></div>
		<header>
			<a href="https://tdiw-m6.deic-docencia.uab.cat/index.php">
				<img src="/img/vaporstore_logo_hor_white_transparent.png" alt="Logo Vapor horitzontal, fons transparent" width="200px">
			</a>
		</header>

		<div id=layout>
			<div class="topnav" id="topnav">

				<div class="left-nav">
            		<b> Benvigut/da a la Vapor Store! </b>
				</div>

				<div class="right-nav">
					<input type="text" id="searchInput" placeholder="Introedueix termes de cerca">
					<button class="boto" onclick="search()">Cerca</button>
				</div>


            </div>
		</div>

		

		<div id="formDiv" class="formDiv">
			<select name="categoria" class="opcionsCat" id="productes" onchange="carregaProductes()">
				<?php include __DIR__ . '/../controlador/opcionsProds.php'; ?>
			</select>
		</div>

		<div class="grid-container" id="productes_per_cat">
			
		</div>


		<div>
			<a href="https://tdiw-m6.deic-docencia.uab.cat/index.php?action=categories"> Categories </a>
		</div>

		<?php
			require __DIR__.'/../controlador/sessions/sessioUsuari.php';
			if(empty($_SESSION['usuari']['id']))
			{
				?>
				<div class='login'>
				<button class="button-24" onclick="window.location.href='https://tdiw-m6.deic-docencia.uab.cat/index.php?action=login'">
				Inicia sesión
				</button>
				</div>
				<?php
				
					
			}
			else{
				?>
				<div id="dropdown-div">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn">Perfil</button>
					<div id="myDropdown" class="dropdown-content">
							<a href="#" onclick="window.location.href='https://tdiw-m6.deic-docencia.uab.cat/index.php?action=perfil'">El meu compte</a>
							<a href="#">Les meves compres</a>
							<a href="#" onclick="tancar_sessio()">Tancar sessió.</a>
					</div>
					</div>
				</div>
			<?php
			 
			}
		?>
			
		
		<div>
			<a href="https://tdiw-m6.deic-docencia.uab.cat/index.php?action=cabas"> Cabas </a>
		</div>

		<div class="cabas" id="cabas">
			<p> Aqui nou div </p>
			<script> cart() </script>
		</div>
	</body>
</html>