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
    <div id="cursor"></div>

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

        <div class="products w-full  gap-10 grid md:grid-cols-4" style="display: grid;  grid-template-columns:1fr 1fr 1fr 1fr">
            <?php forEach($Products as $Product ){ ?>

            
                <!-- First product  -->

            <div class="product">

                <div class="product  bg-zinc-200 product w-64 h-64 rounded-xl my-24">
                <div class="deals-image relative m-auto">
                        <div>
                            <i class="fa-regular fa-heart mx-5 mt-5" id="heart"></i> 
                            <img src="<?= $Product['product_image'] ?>" alt="xbox control" class="m-auto w-32"> 
                        </div>

                        <div class="deals-description flex justify-between m-auto mt-20" style="width: 90%;" >

                            <div class="deals-descirption-content font-mono" style="width: 70%;">

                                <h3 class=""><?= $Product["product_name"] ?></h3>

                            </div>

                            <div class="deals-price" style="width: 20%;">

                                <h4 class="text-grey font-semibold"><?= $Product["product_price"] ?></h4>
                                
                            </div>

                        </div>   
            </div> 
                </div>
            </div>
                    
                    
            <?php }?>
            
        </div>

            

        <script src="<?= URLROOT . '/view/assets/scripts/main.js'?>"></script>

    
</body>
</html>