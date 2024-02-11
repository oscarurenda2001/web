<?php
    $cat = 1;

    $cat = $_GET['categoria'] ?? NULL;

    include_once __DIR__ . "/../model/connectaBD.php";
    include_once __DIR__ . "/../model/consultaProds.php";

    $connexio = connectaBD();
    $resultat_productes = consultaProductes($connexio, $cat);

    include __DIR__ . "/../vista/llista_prods.php"
?>