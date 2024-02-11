<?php

if (!empty($resultat_productes)) {
    foreach ($resultat_productes as $current_producte) {
        echo '<div class="grid-item">';
        echo '<h3>' . $current_producte["nom"] . '</h3>';
        echo '<img src="/..' . $current_producte["imatge"] . '" width=200px height=200px onclick="carregaDetalls_img(' . $current_producte["id"] . ')">';
        echo '<p class="preu">' . $current_producte["preu_unitari"] . '€</p>';
        echo '<input type="number" id="quant' . $current_producte["id"] .'" placeholder="Quantitat">';
        echo '<button class="compra" onclick="afegeix_cabas(' . $current_producte["id"] . '); cart();"> Compra </button>';
        echo '</div>';
    }
} else {
    echo '<p>Cap producte coincideix amb els termes introduits.</p>';
}
?>