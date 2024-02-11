<?php

require __DIR__.'/../controlador/sessions/sessioUsuari.php';
include_once __DIR__ . "/../model/connectaBD.php";
$connexio = connectaBD();

$dada = $_REQUEST['dada'];
$text = $_REQUEST['text'];
$id = $_SESSION['usuari']['id'];
if(strlen($text) >= 1){
    switch ($dada) {
        case 1://nom_usuari
            
            $sql_insertar = "UPDATE usuaris SET nom_usuari = $1 WHERE id = $2";
            $parametre = array($text,$id);
            $result_insertar = pg_query_params($connexio,$sql_insertar,$parametre);
            if(!$result_insertar)
                {
                    return false;
                }
            $_SESSION['usuari']['nom_usuari'] = $text;
            break;
        case 2://contrasenya
         
            $sql_insertar = "UPDATE usuaris SET contrasenya = $1 WHERE id = $2";
            $parametre = array($text,$id);
            $result_insertar = pg_query_params($connexio,$sql_insertar,$parametre);
            if(!$result_insertar)
                {
                    return false;
                }
            $_SESSION['usuari']['contrasenya'] = $text;
            break;
        case 3://correu
            
            $sql_insertar = "UPDATE usuaris SET correu = $1 WHERE id = $2";
            
            if(filter_var($text,FILTER_VALIDATE_EMAIL)){
                //és un correu electronic
                $parametre = array($text,$id);
                $result_insertar = pg_query_params($connexio,$sql_insertar,$parametre);
                if(!$result_insertar)
                {
                    return false;
                } 
                $_SESSION['usuari']['correu'] = $text;
            }
           
            break;
        case 4://codi postal 
            
            $sql_insertar = "UPDATE usuaris SET codi_postal = $1 WHERE id = $2";
            
            if(strlen($text) == 5)
            {
                $codi_postal = (int)$text;
                $parametre = array($text,$id);;
                $result_insertar = pg_query_params($connexio,$sql_insertar,$parametre);
                if(!$result_insertar)
                {
                    return false;
                }
                $_SESSION['usuari']['codi_postal'] = $text;
            }
            else{
                return false;
            }
            
            break;
        case 5://poblacio
           
            $sql_insertar = "UPDATE usuaris SET poblacio = $1 WHERE id = $2";
            $parametre = array($text,$id);
            $result_insertar = pg_query_params($connexio,$sql_insertar,$parametre);
            if(!$result_insertar)
                {
                    return false;
                }
                $_SESSION['usuari']['poblacio'] = $text;
            break;
        default: //adreca
            
            $sql_insertar = "UPDATE usuaris SET adreca = $1 WHERE id = $2";
            $parametre = array($text,$id);
            $result_insertar = pg_query_params($connexio,$sql_insertar,$parametre);

            if(!$result_insertar)
                {
                    return false;
                }
                $_SESSION['usuari']['adreca'] = $text;
    }
   return true;
}
?>