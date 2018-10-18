<?php

if(!isset($_SESSION['cart'])) {
    $array = array();
    $_SESSION['cart'] = $array;
}

$array=$_SESSION['cart'];

//print_r($array);
echo "<pre>";
print_r($array);
echo "</pre>";