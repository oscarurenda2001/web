<?php
    $terme = "";

    $terme = $_GET['terme'] ?? NULL;

    include_once __DIR__ . "/../model/connectaBD.php";
    include_once __DIR__ . "/../model/consultaProds.php";

    $connexio = connectaBD();
    $resultat_productes = cercaProductes($connexio, $terme);

    include __DIR__ . "/../vista/llista_prods.php"
?>