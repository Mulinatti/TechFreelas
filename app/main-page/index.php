<?php
    session_start();
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
                <button class="lg:hidden mr-3" id="side-bar"><i class="fa-solid fa-bars text-xl"></i></button>
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
            <div class="relative flex lg:w-1/6 justify-end lg:justify-between text-slate-400">
                <button class="lg:hidden p-2" id="botao-usuario"><i class="fa-solid fa-user text-xl transition-all hover:text-slate-300"></i></button>
                <div id="dialog-usuario" class="transition-all scale-0 opacity-0 absolute top-12 bg-slate-800 text-slate-200 p-0 lg:hidden">
                    <ul>
                        <li class="mb-2 py-1 px-2 hover:bg-slate-900"><a href="#">Entrar</a></li>
                        <li class="mb-2 py-1 px-2 hover:bg-slate-900"><a href="#">Cadastrar</a></li>
                        <li class="mb-2 py-1 px-2 hover:bg-slate-900"><a href="#">Carrinho</a></li>
                        <li class="mb-2 py-1 px-2 hover:bg-slate-900"><a href="#">Perfil</a></li>
                    </ul>
                </div>
                <?php if (!isset($_SESSION["usuario"])): ?>
                    <div class="text-base flex justify-between">
                        <a class="border-r hidden lg:inline border-slate-400/10 hover:text-slate-100 px-2" href="../sign-page/login.php">Entrar</a>
                        <a class="px-2 hidden lg:inline hover:text-slate-100" href="../sign-page/cadastro.php">Cadastrar</a>
                    </div>
                <?php else: ?>
                    <div class="text-base flex justify-between">
                        <a class="border-r hidden lg:inline border-slate-400/10 hover:text-slate-100 px-2" href="../sign-page/logout.php">Logout</a>
                    </div>
                <?php endif; ?>
                <?php if (isset($_SESSION["usuario"])): ?>
                    <a class="text-xl hidden lg:inline" href="../profile-page/profile-index.php">
                        <i class="fa-solid fa-cart-shopping hover:text-slate-100"></i>
                    </a>
                <?php endif; ?>
            </div>
        </header>
        <main class="main">
            <section class="h-full z-10 absolute left-[-100vw] lg:static bg-rich w-4/6 sm:w-2/5 lg:w-full" id="categorias">
                <nav class="flex flex-col items-center">
                    <h3 class="py-4 text-lg text-blue-600">Categorias</h3>
                    <ul class="w-4/5 text-sm">
                        <li class="categoryItem cursor-pointer w-full"><button id="btnTodos" class="categoryButton" value="todos">Todos<i class="fa-solid fa-grip text-slate-300"></i></button></li>
                        <li class="categoryItem cursor-pointer w-full"><button id="btnDev" class="categoryButton" value="desenvolvedor">Desenvolvedores<i class="fa-solid fa-code text-emerald-500"></i></button></li>
                        <li class="categoryItem cursor-pointer w-full"><button id="btnArt" class="categoryButton" value="artista">Artistas<i class="fa-solid fa-palette text-red-500"></i></button></li>
                        <li class="categoryItem cursor-pointer w-full"><button id="btnCoach" class="categoryButton" value="coaching">Coaching<i class="fa-solid fa-gamepad text-blue-500"></i></button></li>
                        <li class="categoryItem cursor-pointer w-full"><button id="btnAdv" class="categoryButton" value="audiovisual">Audiovisual<i class="fa-solid fa-camera text-purple-500"></i></button></li>
                        <li class="categoryItem cursor-pointer w-full"><button id="btnProf" class="categoryButton" value="professor">Professores<i class="fa-solid fa-graduation-cap text-yellow-500"></i></button></li>
                    </ul>
                </nav>
            </section>
            <section id="servicos-principais" class="p-5 flex flex-col md:flex-row flex-wrap justify-evenly items-center">
                <!--<div class="box">
                    <figure class="w-full">
                        <a class="cursor-pointer" href="../service-page/service-index.html">
                            <img class="w-full rounded-lg rounded-b-none" src="../../src/imgs/bannerservice.png" alt="">
                        </a>
                    </figure>
                    <div class="w-full px-3 pb-3">
                        <div class="mb-7">
                            <p class="text-blue-600 font-bold text-lg elipsis">Desenvolvedor Web</p>
                            <p class="text-sm text-slate-300 elipsis">Tommy Lipica</p>
                        </div>
                        <div class="flex justify-between items-end">s
                            <button class="button">Contratar</button>
                            <p>23,57/h</p>
                        </div>
                    </div>
                </div> -->
            </section>
        </main>
        <footer class="bg-black/60 text-center py-5">
            <ul class="h-32 flex flex-col justify-between text-slate-500 mb-5">
                <li>Gabriel de Paulo Mulinari</li>
                <li>João Matheus Galvão de Oliveira</li>
                <li>Breno Serra da Silva</li>
                <li>Thiago da Silva Lourenco</li>
            </ul>
            <p>Todos os direitos não reservados &nbsp;</p>
        </footer>
        <script type="module" src="main-js/navbar.js"></script>
        <script type="module" src="main-js/userNavBar.js"></script>
        <script type="module" src="main-js/content.js"></script>
        <script type="module" src="main-js/filter.js"></script>
    </body>
</html>