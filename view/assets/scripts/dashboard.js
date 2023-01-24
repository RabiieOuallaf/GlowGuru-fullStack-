const popUpForm = document.getElementById("product-form");

const addForm = document.getElementById("addForm");

addForm.addEventListener("click" , _ => {
    

    container.classList.add("flex");
    container.classList.add("justify-center");
    container.classList.add("items-center");

    const div = document.createElement("div");
    
    div.classList.add("flex");
    div.classList.add("flex-col");
    div.classList.add("items-center");

    div.innerHTML = `

    <input type="text" name="productName[]" placeholder="product name : " class="my-3 bg-transparent border-b-2 text-black">
    <input type="number" name="productPrice[]" placeholder="product price :" class="my-3 bg-transparent border-b-2 text-black">
    <input type="text" name="productDescription[]" placeholder="product description : " class="my-3 bg-transparent border-b-2 text-black">
    <input type="text" name="productImage[]" placeholder="product image : " class="my-3 bg-transparent border-b-2 text-black">



`;

popUpForm.appendChild(div);
    

})
