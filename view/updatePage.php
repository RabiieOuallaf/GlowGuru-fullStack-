<?php include_once "./config/config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>update form</title>
</head>
<body>
    <div class="product-form flex justify-center items-center">

        <form action="<?= URLROOT ?>/controller/Products.php" method="POST" class="flex flex-col justify-cente bg-white w-96 h-64 px-10">
            <input type="hidden" name="type" value="update">
            <input type="number" name="ProductID" placeholder="Product ID :">
            <input type="text" name="ProductName" placeholder="product name : " class="my-3 bg-transparent border-b-2 text-black">
            <input type="number" name="ProductPrice" placeholder="product price :" class="my-3 bg-transparent border-b-2 text-black">
            <input type="text" name="ProductDescription" placeholder="product description : " class="my-3 bg-transparent border-b-2 text-black">
            <input type="number" name="product_quantity" placeholder="product quantity : " class="my-3 bg-transparent border-b-2 text-black">
            <input type="text" name="ProductImage" placeholder="product image : " class="my-3 bg-transparent border-b-2 text-black">
            <input type="submit" class="text-center rounded-full bg-black text-white cursor-pointer">
            

        </form>

    </div>
</body>
</html>