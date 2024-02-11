<?php
    session_start();

    require_once __DIR__.'/../../model/connectaBD.php';
    include_once __DIR__ . "/../../model/consultaProds.php";

    $productes = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    $connexio = connectaBD();


    if(isset($_SESSION['usuari']['id']))
    {
        if(count($productes) > 0)
        {
            $id_usuari = $_SESSION['usuari']['id'];
            $hora = date("Y-m-d H:i:s");
            $mida_cabas = 0;
            $preu_total = 0;

            foreach ($_SESSION['cart'] as $productId => $quantity)
            {
                $resultat_productes = consultaDetalls($connexio, $productId);
                foreach($resultat_productes as $current_producte)
                {
                    $preu_total = $preu_total + ($current_producte["preu_unitari"] * $quantity);
                    $mida_cabas = $mida_cabas + $quantity;
                }
            }
            
            $sql_insertar_comanda = "INSERT INTO comanda (id_usuari, hora, preu_total, mida) VALUES ($id_usuari, '$hora', $preu_total, $mida_cabas) RETURNING id";
            $nou_insert_com = pg_query($connexio, $sql_insertar_comanda);

            $row = pg_fetch_assoc($nou_insert_com);
            $id_comanda = $row['id'];
            
            foreach ($_SESSION['cart'] as $productId => $quantity)
            {
                $resultat_productes = consultaDetalls($connexio, $productId);

                foreach($resultat_productes as $current_producte)
                {
                    $nom = $current_producte['nom'];
                    $preu = $nom = $current_producte['preu_unitari'];
    
                    $sql_insertar_fila = "INSERT INTO fila(quantitat, id_producte, id_comanda, nom, preu) VALUES($quantity, $productId, $id_comanda, '$nom', $preu)";
                    $nou_insert = pg_query($connexio, $sql_insertar_fila);
                }
            }

            echo "be";
        }
        else{
            echo "buit";
        }
    }
    else{
        echo "sessio";
    }

   
?>