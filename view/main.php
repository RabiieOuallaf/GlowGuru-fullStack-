<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowGuru</title>
    <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    <link href="<?= URLROOT ?>/view/assets/style.css" rel="stylesheet">
    <link href="<?= URLROOT ?>/view/assets/main.css" rel="stylesheet" />

</head>

<body>    
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

        </div>

    </section>

    <section class="flex justify-around">

        <div class="flex justify-center">

            <div class="left-to-content mt-52" style="margin-left:-22rem; margin-right:5rem">
                <img src="<?= URLROOT .'/view/assets/images/rednails-noBg.png"'?> alt="red nails with a caption" style="width:70%">
            </div>
            
            <div class="content mt-16 flex flex-col">

                <span class="text-5xl font-serif">Explore some</span>
                <span class="text-5xl font-serif text-center">elegant</span>
                <span class="text-5xl font-serif text-center">nails</span>
                <div class="content-image flex justify-center animate-spin">
                    <img src="<?= URLROOT .'/view/assets/images/manyNails-noBg.png' ?>" alt="many coloful nails" style="width:75%">
                </div>

            </div>
            
            
        </div>

    

    </section>

    <section class=" flex justify-around flex-col" id="newProducts">

        <div class="header flex flex-col items-center gap-2">
           <span class="font-bold text-3xl font-mono my-5">News</span><img src="<?= URLROOT . '/view/assets/images/makeup.jpg' ?>" alt="makeup" class="rounded-full w-16 h-16"/><span class="font-bold text-3xl font-mono">of makeup world and trends</span> 
           <h3 class="font-semi font-serif">Premeuim makeup🌟</h3>
        </div>

        <div class="products flex justify-around items-center mb-10">


            <!-- Product  -->

            <div class="product flex justify-center flex-col w-[30%]">

                <img src="<?= URLROOT .'/view/assets/images/product1.png' ?>" alt="makeup image" class="my-2"/>
                <button class="my-3 hover:bg-gray-100 text-gray-800 font-semibold py-2 mx-32 border border-gray-400 rounded shadow w-[30%]">49.99$</button>
                
            </div>
            <!-- Product  -->

            <div class="product flex justify-center flex-col w-[30%]">
    
                <img src="<?= URLROOT .'/view/assets/images/product2.png' ?>" class="my-2"/>
                <button class="my-3 hover:bg-gray-100 text-gray-800 font-semibold py-2 mx-32 border border-gray-400 rounded shadow w-[30%]">119.99$</button>

    
            </div>

            <!-- Product  -->

            <div class="product flex justify-center flex-col w-[30%] ">
    
                <img src="<?= URLROOT .'/view/assets/images/product3.png' ?>" class="my-2"/>
                <button class="my-3 hover:bg-gray-100 text-gray-800 font-semibold py-2 mx-32 border border-gray-400 rounded shadow w-[30%]">449.99$</button>

    
            </div>

            
           

        </div>


        
    

    </section>

</body>
</html>