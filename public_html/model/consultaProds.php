<?php
function consultaProductes($connexio, $categoria)
{
    $sql_prod = "SELECT nom, descripcio, imatge, valoracio, preu_unitari, id FROM producte WHERE id_categoria=" . $categoria;

    $consulta_productes = pg_query($connexio, $sql_prod)
            or die("Error sql llistaproductes");

    $resultat_productes = pg_fetch_all($consulta_productes);
    return($resultat_productes);
}

function consultaDetalls($connexio, $producte)
{
    $sql_prod = "SELECT nom, descripcio, imatge, valoracio, preu_unitari, id FROM producte WHERE id=" . $producte;

    $consulta_productes = pg_query($connexio, $sql_prod)
            or die("Error sql llistaproductes");

    $resultat_productes = pg_fetch_all($consulta_productes);
    return($resultat_productes);
}

function cercaProductes($connexio, $terme)
{
    $terme = pg_escape_string($terme);

    $sql_prod = "SELECT * FROM producte WHERE nom LIKE '%$terme%' OR descripcio LIKE '%$terme%'";

    $consulta_productes = pg_query($connexio, $sql_prod)
            or die("Error sql llistaproductes");
    
    $resultat_productes = pg_fetch_all($consulta_productes);
    
    return($resultat_productes);
}   

?>