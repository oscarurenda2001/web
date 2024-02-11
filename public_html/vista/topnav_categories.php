<?php

    foreach($res_categories as $current_categoria)
    {
        $navcat = $current_categoria['nom'];
		echo '<a href ="' . $navcat . '"> ' .$navcat. ' </a>';
    }

?>

