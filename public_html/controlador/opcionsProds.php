<?php

require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/consultaCategories.php';

$conn = connectaBD();
$res_categories = getCategories($conn); // Aquesta crida és al model

include __DIR__ . "/../vista/opcions_categoria.php";

?>
