<?php
    session_start();

    $producteEscollit = $_REQUEST['prod'];
    $opcio = $_REQUEST['opt'];              // 0 = resta, 1 = suma, 2 = elimina

    if($opcio == 0)
    {
        $_SESSION['cart'][$producteEscollit] -= 1;
    }

    if($opcio == 1)
    {
        $_SESSION['cart'][$producteEscollit] += 1;
    }

    if($opcio == 2 OR $_SESSION['cart'][$producteEscollit] <= 0)
    {
        unset($_SESSION['cart'][$producteEscollit]);
    }

    //$_SESSION['cart'] = array();
?>