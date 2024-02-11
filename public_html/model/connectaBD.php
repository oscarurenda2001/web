<?php

function connectaBD()
{
    $host = "127.0.0.1";
    $dbname = "tdiw-m6";
    $user = "tdiw-m6";
    $password = "1RfQLXe_";

    $conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

    if(!$conn)
    {
        die("Error al connectar-se a la base de dades: " . pg_last_error());
    }
    

    return ($conn);
}
?>