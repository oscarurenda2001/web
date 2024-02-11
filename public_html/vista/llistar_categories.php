<?php

	foreach($res_categories as $current_categoria)
	{
		echo '<div class="grid-item">';
      	echo '<h3>' . $current_categoria["nom"] . '</h3>';
		echo '<img src="/../img/genre_' . $current_categoria["nom"] . '.png" width=100px height=100x onclick="carregaProductes()" value="' . $current_categoria['id'] . '">';
      	echo '<p>' . $current_categoria["descripcio"] . '</p>';
     	echo '</div>';
	}
?>