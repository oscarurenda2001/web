<?php
    session_start();

    $producteEscollit = $_REQUEST['prod'];
    $producteQuant = $_REQUEST['quant'];
    

    if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
    }

    if (isset($_SESSION['cart'][$producteEscollit])) {
        $_SESSION['cart'][$producteEscollit] += $producteQuant;
    } else {
        $_SESSION['cart'][$producteEscollit] = $producteQuant;
    }

    include_once __DIR__."/../../vista/sessions/afegeix_cabas.php";
?>