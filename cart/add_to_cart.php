<?php
// QUENITY , PROD ID 
include '../inc/config.php';
session_start();

if (isset($_SESSION['email'])) {
	$id = $_GET['prod_id'];
	$sql ="SELECT * FROM products WHERE product_id =$id";
	$result = mysqli_query($mysqli,$sql);
	$l;
	while($row = mysqli_fetch_array($result)){
		array_push($_SESSION['cart'],$row);
	}
	header("Location:http://localhost/nn/products/description.php?id=$id&add");
}else {
	header("Location:http://localhost/nn/login");
}
?>