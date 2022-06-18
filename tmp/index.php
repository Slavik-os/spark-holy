<?php
session_start();

$_SESSION['cart'] = new  ArrayObject;
$_SESSION['info_command'] = new  ArrayObject;
$_SESSION['cart']->price = 3;
print_r($_SESSION['cart']);

?>