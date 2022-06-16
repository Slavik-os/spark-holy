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
 <div class="container">
  <div class="row mt-4">
   
  <div class="col">
    <img src="necklace5.jpg" alt="..." style="width:100%;object-fit: contain;" class="Responsive images">
    </div>
    <div class="col mt-5">
    <h1> Medium Tube Hoops </h1>
    <h3>$157<h3>
    <h5>You know them, you love them: they're your favorite hoops. 
        Those outfit-elevating, mood-boosting, can't-go-wrong hoops.
        Upgrade your eardrobe with this bold piece that’s handcrafted in recycled 14k solid gold.
    <br><br>- Diameter: 18 mm.
    <br> - Width: 3.2 mm.</h5>

<div class="col mt-5 quantity buttons_added">
<input type="button" value="-" class="minus" onclick="sub(1)">
<input type="number"step="1" min="1" max=""value="0" name="quantity" id="id_number" value="<?php echo $_SESSION["cart"][$key]->quantite ?>" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
<input type="button" value="+" class="plus" onclick="add(1)">

</div>
<button type="button" class="col 2 btn btn-outline-dark mt-5">ADD TO CART </button>


</div>
</div>
</div>

              <script>
                   let n = parseInt(document.getElementById("id_number").value);
                  function add(s){
                   k = n +=1;
                   console.log(k);
                   document.getElementById("id_number").value = k ;
                  }

                  function sub(s){
                      if(n == 0){
                          return;
                      }
                   k = n -=1;
                   console.log(k);
                   document.getElementById("id_number").value = k ;
                    }

             

              </script> 
</body>
</html>