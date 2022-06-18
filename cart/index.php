<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Sparkle</title>
</head>
<body>

<?php
    error_reporting(0);
    include '../header.php';
?>

<?php
    session_start();
    print_r($_SESSION['cart']);
?>
<div class="container-fluid" style="margin-top: 200px;width: 100%;">
<div class="card">
<div class="row">
<div class="col-md-8 cart">
<div class="title">
<div class="row">
<div class="col"><h4><b>Shopping Cart</b></h4></div>
<div class="col align-self-center text-right text-muted">3 items</div>
</div>
</div>    
<div class="container-fluid" id="root">
    <div class="cart">
      
    </div>
</div>
<!--
 <div class="row border-top border-bottom">
<div class="row main align-items-center">
<div class="col-2"><img class="img-fluid" src="../necklace5.jpg"></div>
<div class="col">
<div class="row">Engravable Tag Necklace</div>
</div>
<div class="col">
<a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
</div>
<div class="col" style="color: #A18A68;">&dollar;  699 <span class="close">&#10005;</span></div>
</div>
</div>

<div class="row">
    <div class="row main align-items-center">
        <div class="col-2"><img class="img-fluid" src="../earrings3.jpg"></div>
        <div class="col">
            <div class="row">Bold Small Hoops</div>
        </div>
        <div class="col">
            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
        </div>
        <div class="col" style="color: #A18A68;">&dollar;  101 <span class="close">&#10005;</span></div>
    </div>
</div>

<div class="row border-top border-bottom">
<div class="row main align-items-center">
<div class="col-2"><img class="img-fluid" src="../bracelet7.jpg"></div>
<div class="col">
<div class="row">Bold Pearl Double Wrap Bracelet
</div>
</div>
<div class="col">
<a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
</div>
<div class="col" style="color: #A18A68;">&dollar;  125 <span class="close">&#10005;</span></div>
</div>
</div> -->

<div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
</div>

<div class="col-md-4 summary">
<div><h5><b>Summary</b></h5></div>
<hr>
<div class="row">
<div class="col" style="padding-left:0;">ITEMS 3</div>
<div class="col text-right">&euro; 925.00</div>
</div>

<form>
<p>SHIPPING</p>
<h8 style='color: #707070;'>Personal informations:</h8>
<input type=text style="border:none" placeholder="Address">
<input type="tel"style="border:none" placeholder="Phone number" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
</form>

<div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
<div class="col">TOTAL PRICE</div>
<div class="col text-right">&euro; 925.00</div>
</div>
<button class="btn">CHECKOUT</button>
</div>
</div>
</div>
</div>
<script src="draw_cart.js"></script>
</body>
</html>