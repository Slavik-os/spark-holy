function draw(data){
    let root = document.getElementById("root");
    let root_row = document.createElement("div");
    root_row.className +='row border-top border-bottom';
    
    let second_row = document.createElement("div");
    second_row.className +='row main align-items-center';
    let col_2 = document.createElement("div");
    col_2.className+="col-2";


    image_link = data.imageSrc.split(",")[0];
    image_link = 'http://localhost/nn/products/'+image_link;

    let prod_image = document.createElement("img");
    prod_image.src = image_link;
    col_2.appendChild(prod_image);

    let col = document.createElement("div");
    col.className += "col";

    let col_row = document.createElement("div");
    col_row.className += "row";
    col.appendChild(col_row);
    col.innerText = data.prodcut_name;
    second_row.appendChild(col_2);
    second_row.appendChild(col);
    


    // Increase items

    let col_plus = document.createElement("div");
    col_plus.className += 'col';
    col_plus.innerHTML = `
    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
    `;

    let col_hold_price = document.createElement("div");
    col_hold_price.className +='col';

    col_hold_price.innerHTML = `
    <div class="col" style="color: #A18A68;">&dollar;  699 <span class="close">&#10005;</span></div>
    `;
    second_row.appendChild(col_plus);
    second_row.appendChild(col_hold_price);
    // Increase items end

    root_row.appendChild(second_row);
    root.appendChild(root_row);
}


fetch('http://localhost/nn/inc/cart_ajax.php')
.then(response => response.json())
.then(data =>{
  for(let i =0 ; i < data.length ;i++){
  draw(data[i]);
    }
} );