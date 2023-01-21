<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= URLROOT ?>/view/assets/styles/login.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<section class="login flex justify-center items-center">

    <div class="container bg-white flex justify-center items-center rounded-3xl">

        <div class="login-form">

            <h2 class="text-2.8xl font-bold text-center font-mono my-10">Welcome back, Admin 👋🏻</h2>
            <p class="text-xs">Login to access the dahsboard</p>
            <form action="<?= URLROOT ?>/controller/Authhundler.php" method="POST" class="flex flex-col px-8">

                <input type="hidden" name="type" value="login">
                <input type="text" name="Email" placeholder="Email" class="bg-transparent border-b-2"  required>
                <input type="password"  name="Password" placeholder="Password" class="bg-transparent border-b-2" required>
                <input type="submit" class="text-center rounded-full bg-black text-white cursor-pointer" value="login">

            </form>

        </div>

        <div class="next-to-form flex items-center text-center">

            <img src="<?= URLROOT?>/view/assets/images/waves.jpg" alt="modern buildings" class="rounded-3xl">
            <h2 class="text-white text-3xl font-mono  z-10 absolute w-3/6">Glow Guru</h2>

        </div>

    </div>

</section>
    
</body>
</html>