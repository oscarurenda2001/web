<?php

    session_start();

    include_once __DIR__ . "/../../model/connectaBD.php";
    include_once __DIR__ . "/../../model/consultaProds.php";

    $productes = isset($_SESSION['cart']) ? $_SESSION['cart'] : array(); 

    $compt = count($productes);
    $total = 0;
    $mida_cabas = 0;
    
    if(count($productes) > 0)
    {        
        $connexio = connectaBD();

        foreach ($_SESSION['cart'] as $productId => $quantity)
        {
            $resultat_productes = consultaDetalls($connexio, $productId);
            foreach($resultat_productes as $current_producte)
                {
                    $total = $total + ($current_producte["preu_unitari"] * $quantity);
                    $mida_cabas = $mida_cabas + $quantity;
                }
            
        }
        echo "<div class='compra' id='compra'>";
        echo "<p> Últim producte afegit: </p>";
        echo '<img src="/..' . $current_producte["imatge"] . '" width=75px height=75 style="grid-area: img">';
        echo "<p> Quantitat de productes: " . $mida_cabas . " </p>";
        echo "<p> Preu total: " . $total . "€ </p>";
        echo "</div>";
        
    }
    else
    {
        echo "No hi ha cap producte al cabas. Afegeix-ne desde la <a href='https://tdiw-m6.deic-docencia.uab.cat/index.php'> botiga! </a>";
    }
    

    //include_once __DIR__."/../../vista/sessions/cabas.php";
    
?>