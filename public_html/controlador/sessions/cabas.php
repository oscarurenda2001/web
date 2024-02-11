<?php

    session_start();

    include_once __DIR__ . "/../../model/connectaBD.php";
    include_once __DIR__ . "/../../model/consultaProds.php";

    $productes = isset($_SESSION['cart']) ? $_SESSION['cart'] : array(); 

    $compt = count($productes);
    $total = 0;

    if(count($productes) > 0)
    {        

        $connexio = connectaBD();

        foreach ($_SESSION['cart'] as $productId => $quantity)
        {
            $resultat_productes = consultaDetalls($connexio, $productId);
            foreach($resultat_productes as $current_producte)
                {
                    echo '<div class="grid-item" id="detalls">';
                    echo '<h3 style="grid-area: nom">' . $current_producte["nom"] . '</h3>';
                    echo "<button id='plus' onclick='modifica(2, ". $current_producte["id"] ."); cart_large();'>x</button>";
                    echo '<img src="/..' . $current_producte["imatge"] . '" width=200px height=200px style="grid-area: img">';
                    echo '<p style="grid-area: preu" class="preu_cabas">' . $current_producte["preu_unitari"] . '€';

                    echo "<div class='opcions'>";
                    echo "<button id='minus' onclick='modifica(0, ". $current_producte["id"] ."); cart_large();'>-</button>";
                    echo "<span id='textElement'>  " . $quantity . "  </span>";
                    echo "<button id='plus' onclick='modifica(1, ". $current_producte["id"] ."); cart_large();'>+</button>";
                    echo "</div>";

                    echo '</div>';

                    $total = $total + ($current_producte["preu_unitari"] * $quantity);
                }
            
        }
        echo '<button class="budia" onclick="buida_cabas(); cart_large();"> Buida el cabas </button>';  // buida_cabas()
        echo "<div class='preu_total'> Preu total: " . $total . "€ </div>";
        echo '<div class="boto_compra" id="acabar_compra">';
	    echo "<button id='compra' onclick='compra_cabas()'> Comprar ara </button>";
		echo "</div>";
    }
    else
    {
        echo "No hi ha cap producte al cabas. Afegeix-ne desde la <a href='https://tdiw-m6.deic-docencia.uab.cat/index.php'> botiga! </a>";
    }
    

    //include_once __DIR__."/../../vista/sessions/cabas.php";
    
?>