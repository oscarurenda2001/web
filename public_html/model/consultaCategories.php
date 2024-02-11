<?php
    function getCategories($connexio)
    {
            $sql_cat = "SELECT nom, id, descripcio FROM categoria";
            $consulta_cat = pg_query($connexio, $sql_cat) 
                or die("Error consulta SQL -> getCategories()");
            $resultat_cat = pg_fetch_all($consulta_cat);
            return($resultat_cat);
    }

?>