<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Vapor Store - El meu perfil </title>
		<link rel="stylesheet" type="text/css" href="css/perfil.css">
		<script src="js/jquery-3.7.1.min.js"></script>
		<script src="js/funcions.js"></script>
		<link rel="icon" href="/../img/genre_rol.png">
		<?php require __DIR__.'/../controlador/sessions/sessioUsuari.php';?>
	</head>
	<body>
		<header>
			<a href="https://tdiw-m6.deic-docencia.uab.cat/index.php">
				<img src="/img/vaporstore_logo_hor_white_transparent.png" alt="Logo Vapor horitzontal, fons transparent" width="200px">
			</a>
		</header>
		<div id="dades_usuari">
        <div class="info-section">
            <div class="info-container">
                <div class="info-text">
                    <b>Nom Usuari</b> <br>
                    <?php echo $_SESSION['usuari']['nom_usuari']?>
                </div>
                <button class="info-button" type="button" onclick="canviar(1)">Canviar Nom Usuari</button>
                <div id='canvi_usuari'>
                </div>
            </div>
        </div>
        <div class="info-section">
            <div class="info-container">
                <div class="info-text">
                    <b>Vols canviar la contrasenya?</b> <br>
                </div>
                <button class="info-button" type="button" onclick="canviar(2)">Canviar Password</button>
            </div>
        </div>

     
        <div class="info-section">
            <div class="info-container">
                <div class="info-text">
                    <b>Correu electronic</b> <br>
                    <?php echo $_SESSION['usuari']['correu']?>
                </div>
                <button class="info-button" type="button" onclick="canviar(3)">Canviar correu electronic</button>
            </div>
        </div>


        <div class="info-section">
            <div class="info-container">
                <div class="info-text">
                    <b>Codi Postal</b> <br>
                    <?php echo $_SESSION['usuari']['codi_postal']?>
                </div>
                <button class="info-button" type="button" onclick="canviar(4)">Canviar codi postal</button>
            </div>
        </div>


        <div class="info-section">
            <div class="info-container">
                <div class="info-text">
                    <b>Poblacio</b> <br>
                    <?php echo $_SESSION['usuari']['poblacio']?>
                </div>
                <button class="info-button" type="button" onclick="canviar(5)">Canviar Poblacio</button>
            </div>
        </div>

     
        <div class="info-section">
            <div class="info-container">
                <div class="info-text">
                    <b>Adreça</b> <br>
                    <?php echo $_SESSION['usuari']['adreca']?>
                </div>
                <button class="info-button" type="button" onclick="canviar(7)">Adreça</button>
            </div>
        </div>

        <div class="info-section">
            <div class="info-container">
                <div class="info-text">
                    <b>Foto de perfil</b> <br>
                    <div id = foto_perfil>
                       <?php echo '<img src="/img/profile/' . $_SESSION['usuari']['foto_perfil'] . '" width=100px height=100px><img>'; ?>
                    </div>
                </div>
                <form  method="post" enctype="multipart/form-data">
                    <input class="info-button" type="file" name="foto_perfil" accept=".png, .jpg, .jpeg" id="imagenInput">
                    <input type="submit" value="Enviar"onclick="">
                </form>
               
            </div>
        </div> 
    </div>

	</body>
</html>
