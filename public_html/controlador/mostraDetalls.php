<?php
    $prod = 1;

    $prod = $_GET['producte'] ?? NULL;

    include_once __DIR__ . "/../model/connectaBD.php";
    include_once __DIR__ . "/../model/consultaProds.php";

    $connexio = connectaBD();
    $resultat_productes = consultaDetalls($connexio, $prod);

    include __DIR__ . "/../vista/mostra_detalls.php"
?>