<?php
    require __DIR__.'/../controlador/sessions/sessioUsuari.php';
    include_once __DIR__ . "/../model/connectaBD.php";
    
    
    foreach ($_FILES as $campo => $archivo) {
        echo "Información para el campo: $campo <br>";
        echo '<pre>';
        echo '<script>alert("'.$campo.'");</script>';
        var_dump($archivo);
        echo '</pre>';
        echo '<hr>';
    }
    
?>