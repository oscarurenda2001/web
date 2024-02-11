<?php

    function buscarUsuari($usuari,$connexio){
        $consultaSQL = ("SELECT * FROM usuaris WHERE nom_usuari = $1");
        $consulta = pg_query_params($connexio,$consultaSQL,array($usuari));
        if(!$consulta)
        {
            return false;
        }
        $consulta = pg_fetch_all($consulta);
         return $consulta;
    }
    function comprovaContrasenya($usuari,$contrasenya,$connexio)
    {
        $resultat = buscarUsuari($usuari,$connexio);
        if(!$resultat){
            return False;
        }
        $contrasenyaBD = $resultat[0]['contrasenya'];
        $correcte =  password_verify($contrasenya,$contrasenyaBD);
        if(!$correcte)
        {
            return False;
        }
        else
        {
            return $resultat;
        }
    }
    
?>