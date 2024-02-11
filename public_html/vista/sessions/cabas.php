<?php

$compt = count($productes);

if(count($productes) > 0){
  foreach ($_SESSION['cart'] as $productId => $quantity)
    echo "<p class='prod'> Product ID: $productId, Quantity: $quantity </p>";
}
else
{
  echo "The cart is empty";
}
?>