<?php  include_once "controller/Products.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="product-form flex justify-center justify-row items-center" >

        <form action="<?= URLROOT ?>/controller/Products.php"  method="POST" enctype="multipart/form-data" class="Product-form flex flex-col justify-cente bg-white w-96 h-[100%] px-10" id="product-form">

            <input type="hidden" name="type" value="add" >
            <input type="text" name="productName[]" placeholder="product name : " class="my-3 bg-transparent border-b-2 text-black">
            <input type="number" name="productPrice[]" placeholder="product price :" class="my-3 bg-transparent border-b-2 text-black">
            <input type="text" name="productDescription[]" placeholder="product description : " class="my-3 bg-transparent border-b-2 text-black">
            <input type="text" name="productImage[]" placeholder="product image : " class="my-3 bg-transparent border-b-2 text-black">
            <input type="number" name="product_quantity[]" placeholder="product quantity : " class="my-3 bg-transparent border-b-2 text-black">
            <input type="submit" class="text-center rounded-full bg-black text-white cursor-pointer my-3" value="add Product">



        </form>


    </div>
    
    <button class="text-center rounded-full bg-black text-white cursor-pointer" id="addForm">Add multiple product</button>


    <script src="<?= URLROOT ?>/view/assets/scripts/dashboard.js"></script>

    
</body>
</html>