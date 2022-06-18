<?php
session_start();

if(isset($_SESSION['cart'])) {
	header("Location:http://localhost/nn/cart");
	
}else {
	header("HTTP/1.1 200 Ok");
	header("Location:http://localhost/nn/emptycart/");
}


?>