<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowguru dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="min-h-screen grid grid-cols-[auto_1fr] antialiased bg-white dark:bg-gray-700 text-black dark:text-white w-[100%]">

        <!-- Header -->
        <div class="fixed w-full flex items-center justify-between h-14 text-white z-20 bg-gray-800">
            <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 border-none">
                <img class="hidden sm:block w-7 h-7 md:w-2/6 md:h-full mr-2 rounded-md overflow-hidden" src="" />
                <img class="hidden max-sm:block w-7 h-7 md:w-2/6 md:h-full mr-2 rounded-md overflow-hidden" src="" />
            </div>
            <div class="flex justify-between items-center h-full header-right">
                <ul class="flex items-center">
                    <li class="rounded-full border-2 border-blue-500 w-7 h-7 overflow-hidden">
                        
                        <img src="<?= URLROOT . '/view/assets/images/admin.jpg' ?>" alt="admin picture">

                    </li>
                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                    </li>
                    <li>
                        <a href="<?= URLROOT .'/controller/LogoutHandler.php"';?> class="flex items-center mr-4 hover:text-blue-100">
                            <span class="inline-flex mr-1">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./Header -->

        <!-- Sidebar -->
        <div class="mt-12 flex flex-col top-14 left-0 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                    </div>
                    </li>
                    <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-gauge"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Statistiques</span>
                    </a>
                    </li>
                    <li>
                        <div id="pop-up" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class="fa-sharp fa-solid fa-boxes-stacked"></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Products</span>
                        </div>
                    </li>
                    
                </ul>
                <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2023 By Rabie Ouallaf</p>
            </div>
        </div>
        <!-- ./Sidebar -->

        <!-- body -->
        <div class="mt-24 h-full flex flex-wrap justify-around max-sm:flex-col max-sm:items-center col-start-2 col-span-2">

            <div class="w-52 h-32 bg-gradient-to-r from-red-400 to-red-700 rounded-lg p-2">
                <span>Products -</span>
                <div></div>
            </div>

            <div class="product-form flex justify-center items-center" style="display: none;" id="product-form">

                <form action="<?= URLROOT ?>/controller/ProductsHandler.php"  method="POST" class="flex flex-col justify-cente bg-white w-96 h-64 px-10">

                    <input type="text" name="productName" placeholder="product name : " class="my-3 bg-transparent border-b-2">
                    <input type="text" name="productPrice" placeholder="product price :" class="my-3 bg-transparent border-b-2">
                    <input type="text" name="productDescription" placeholder="product description : " class="my-3 bg-transparent border-b-2">
                    <input type="text" name="productImage" placeholder="product image : " class="my-3 bg-transparent border-b-2">
                    <input type="submit" class="text-center rounded-full bg-black text-white cursor-pointer">


                </form>

            </div>
            

        </div>

        <div class="product-form">
            <form action="">

            </form>
        </div>
    <!-- ./body -->
    </div>

    <script src="<?= URLROOT ?>/view/assets/scripts/dashboard.js"></script>
</body>
</html>