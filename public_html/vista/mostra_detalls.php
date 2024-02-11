<?php
	foreach($resultat_productes as $current_producte)
	{
		echo '<div class="grid-item" id="detalls">';
		echo '<h3 style="grid-area: nom">' . $current_producte["nom"] . '</h3>';
	    echo '<img src="/..' . $current_producte["imatge"] . '" width=200px height=200px style="grid-area: img">';
		echo '<p style="grid-area: desc">' . $current_producte["descripcio"] . '</p>';
		echo '<p style="grid-area: preu" class="preu">' . $current_producte["preu_unitari"] . '€</p>';
		echo '<img src="/../img/reviews/review_' . $current_producte["valoracio"] . '.png" height=25px style="grid-area: val">';

		echo '<div>';
		echo '<input type="number" id="quant' . $current_producte["id"] .'" placeholder="Quantitat">';
        echo '<button class="compra" onclick="afegeix_cabas(' . $current_producte["id"] . '); cart();"> Compra </button>';
		echo '</div>';

		echo '</div>';
	}
?>