<?php
    session_start();
    if(!isset($_SESSION['usuari']))
    {
        $_SESSION['usuari'] = array();
    }

?>