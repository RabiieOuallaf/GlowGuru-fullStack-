<?php 

    include_once './config/config.php';
    include_once "controller/Products.php";
        
    $init = new Products;

    $Products = $init->displayProducts();

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="<?= URLROOT ?>/view/assets/styles/style.css" rel="stylesheet" />
    <link href="<?= URLROOT ?>/view/assets/styles/main.css" rel="stylesheet" />
</head>
<body>

<section class="shop mb-20">
<section class="flex justify-around mt-3">

<div class="logo font-mono">
    <span class="text-neutral-900 text-lg">Make_</span><span class="text-neutral-600 text-base">up</span>
</div>

<div class="nav-list">

    <ul class="flex gap-5 text-neutral-700 font-serif text-sm">

        <li class="cursor-pointer text-neutral-900 ease-out duration-300"><a href="/">Home</a></li>
        <li class="cursor-pointer ease-out duration-300 hover:text-neutral-900"><a to="/shop">Shop</a> </li>
        <li class="cursor-pointer ease-out duration-300 hover:text-neutral-900">Contact us</li>

    </ul>

</div>

<div class="nav-options">

    <i class="fa-solid fa-cart-shopping" class="cursor-pointer hover:text-neutral-700 ease-out duration-300"></i>
    <a href="/login"><i class="fa-solid fa-user" class="cursor-pointer hover:text-neutral-700 ease-out duration-300"></i></a>

</div>

</section>

        

        <div class="hadings mt-32">
            <h2 class="header my-10 mx-7 font-semibold text-neutral-700 font-sans font-mono">All your makeup need in one place 💄</h2>
        </div>

        <div class="products grid lg:grid-cols-4 gap-10 m-auto mx-5">

            <!-- First product  -->
            <?php forEach($Products as $Product ){ ?>

            <div class="product">

                <div class="product bg-zinc-200 product w-64 h-64 rounded-xl my-24">

                    <div class="deals-image relative m-auto">
                        <i class="fa-regular fa-heart mx-5 mt-5" id="heart"></i> 
                        <img src="../assets/images/product2.png" alt="xbox control" class="m-auto w-32"> 
                    </div>
        
                    <div class="deals-description flex justify-between m-auto mt-20" style="width: 90%;" >
        
                        <div class="deals-descirption-content font-mono" style="width: 70%;">
    
                            <h3 class=""><?= $Product["product_name"] ?></h3>
    
                        </div>
    
                        <div class="deals-price" style="width: 20%;">
    
                            <h4 class="text-grey font-semibold"><?= $Product["product_price"] ?></h4>
                            
                        </div>
    
                    </div>
    
                    <div class="button my-6 mx-3">
                        <button class="border-2 border-stone-800 rounded-full px-3 py-1 hover:text-blue-700 hover:border-lime-800"><span class="font-mono text-sm">Add to cart</span></button>
                    </div>
                    
                </div>

            </div>

            <?php }
            ?>

    
</body>
</html>