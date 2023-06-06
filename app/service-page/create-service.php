<?php
    session_start();

    if ($_SESSION["usuario"]) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TechFreelas | Home</title>
        <script src="https://kit.fontawesome.com/8ad2738107.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../tailwindCSS/tailwind.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Urbanist:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../src/scroll.css">
        <link rel="stylesheet" href="../../src/navbar.css">
</head>
<body class="bodyPattern">
    <header class="header z-20">
        <div class="flex items-center">
            <button class="hidden mr-3" id="side-bar"><i class="fa-solid fa-bars text-xl"></i></button>
            <a href="../main-page/index.php">
                <figure class="items-center text-2xl hidden sm:flex">
                    <img class="w-14" src="../../src/imgs/logo.svg" alt="Logo Techfreelas">
                    <figcaption class="font-semibold hidden md:inline">TechFreelas</figcaption>
                </figure>
            </a>
        </div>
        <form class="md:w-3/5 w-2/3 flex justify-center" action="submit" method="get">
            <input class="search" id="search" type="text" name="searchBar">
            <button class="bg-slate-600/30 text-white/40 px-3 rounded-r-xl border-r border-y border-white/10 shadow-lg"><i class="fa-solid fa-search"></i></button>
        </form>
        <div class="flex lg:w-1/6 justify-end lg:justify-between text-slate-400">
            <button class="lg:hidden p-2"><i class="fa-solid fa-ellipsis-vertical text-xl"></i></button>
            <!---<div class="text-base flex justify-between">
                <a class="border-r hidden lg:inline border-slate-400/10 hover:text-slate-100 px-2" href="../sign-page/login.php">Entrar</a>
                <a class="px-2 hidden lg:inline hover:text-slate-100" href="../sign-page/cadastro.php">Cadastrar</a>
            </div>-->
            <div class="text-base flex justify-between">
                <a class="border-r hidden lg:inline border-slate-400/10 hover:text-slate-100 px-2" href="../sign-page/logout.php">Logout</a>
            </div>
            <a class="text-xl hidden lg:inline" href="#">
                <i class="fa-solid fa-cart-shopping hover:text-slate-100"></i>
            </a>
        </div>
    </header>
    <main>
        <section>
            <input type="file">
            <button class="button text-sm">Enviar</button>
        </section>
        <section class="text-black">
            <select id="categorySelect" name="categoria">
                <option value="Desenvolvedor">Desenvolvedor</option>
                <option value="Artista">Artista</option>
                <option value="Coach">Coach</option>
                <option value="Professor">Professor</option>
                <option value="Audiovisual">Audiovisual</option>
            </select>
        </section>
    </main>
</body>
</html>
<?php
    } else {
        header("Location: ../main-page/index.php");
    }
?>