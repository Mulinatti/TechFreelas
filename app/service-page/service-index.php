<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tailwindCSS/tailwind.css">
    <script src="https://kit.fontawesome.com/8ad2738107.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Urbanist:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../src/scroll.css">
    <title>Página do Serviço</title>
</head>

<body class="bg-oxford-blue text-slate-200 font-inter overflow-x-hidden">
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

    <main class="p-2 lg:p-5">
        <section class="p-4 lg:p-8">
            <div class="flex flex-col lg:flex-row justify-center lg:justify-evenly items-start">
                <div class="w-full lg:w-[45%] flex justify-center items-center">
                    <figure>
                        <img class="rounded-2xl shadow-md" src="https://cdn.wallpapersafari.com/38/77/Roxpk7.jpg" 
                        alt="Pessoa jogando minecraft">
                    </figure>
                </div>
                <div class="w-full lg:w-[45%] flex flex-col rounded-2xl flex-shrink">
                    <div>
                        <div class="flex flex-col lg:flex-row justify-between items-center mt-3 lg:mt-0">
                            <p class="text-3xl font-bold w-full lg:w-3/4">Tommy Lipica</p>
                            <p class="text-blue-600 text-lg font-semibold w-full lg:w-1/3 lg:text-end">Desenvolvedor</p>
                        </div>
                        <p class="mt-4 text-slate-400 overflow-scroll overflow-x-hidden h-[156px] overscroll-y-none">
                            Waodsosams skam skdalskmk odksaml lskml sdl cae skm oam oo wondsklnskdnlaskn aodiqowiksndknk saoojw.
                            slkjdaosjdoiwjo ijsmadl maskldmsldkm oqdjpomdlasmdlm lowopkdposakdposkapdk klsmdlksm qok opkdpasd
                            dsoadjoi jcabdsdskj padksopk cabeçada no teclado.
                            Waodsosams skam skdalskmk odksaml lskml sdl cae skm oam oo wondsklnskdnlaskn aodiqowiksndknk saoojw.
                            slkjdaosjdoiwjo ijsmadl maskldmsldkm oqdjpomdlasmdlm lowopkdposakdposkapdk klsmdlksm qok opkdpasd
                            dsoadjoi jcabdsdskj padksopk cabeçada no teclado.
                            Waodsosams skam skdalskmk odksaml lskml sdl cae skm oam oo wondsklnskdnlaskn aodiqowiksndknk saoojw.
                            slkjdaosjdoiwjo ijsmadl maskldmsldkm oqdjpomdlasmdlm lowopkdposakdposkapdk klsmdlksm qok opkdpasd
                            dsoadjoi jcabdsdskj padksopk cabeçada no teclado.
                            Waodsosams skam skdalskmk odksaml lskml sdl cae skm oam oo wondsklnskdnlaskn aodiqowiksndknk saoojw.
                            slkjdaosjdoiwjo ijsmadl maskldmsldkm oqdjpomdlasmdlm lowopkdposakdposkapdk klsmdlksm qok opkdpasd
                            dsoadjoi jcabdsdskj padksopk cabeçada no teclado.
                        </p>
                    </div>
                    <hr class="border-white/10 my-5">

                    <div class="flex flex-col lg:flex-row justify-between items-center">
                        <div class="flex flex-col items-center lg:flex-row w-full lg:w-auto text-center">
                            <a class="button mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto max-w-sm">Adicionar à lista</a>
                            <a class="button w-full lg:w-auto max-w-sm" href="../payment/payment.html">Contratar</a>
                        </div>
                        <p class="text-2xl font-semibold mt-4 lg:mt-0">R$ 23,57/h</p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="border-white/10 my-5">
        <section class="p-0 lg:p-8">
            <ul class="flex flex-col justify-between h-[255px] lg:h-[295px] text-sm md:text-lg">
                <li class="lg:bg-slate-400/10 p-3 rounded-lg bg-none"><strong>Nome</strong>: Tommy Lipica</li>
                <li class="lg:bg-slate-400/10 p-3 rounded-lg bg-none"><strong>País</strong>: Brasil</li>
                <li class="lg:bg-slate-400/10 p-3 rounded-lg bg-none"><strong>Tempo na plataforma</strong>: 5 anos</li>
                <li class="lg:bg-slate-400/10 p-3 rounded-lg bg-none"><strong>Idade</strong>: 20 anos</li>
                <li class="lg:bg-slate-400/10 p-3 rounded-lg bg-none"><strong>Contato</strong>: tommypica@gmail.com</li>
            </ul>
        </section>
        <!-- Dividindo tudo em div... -->
        <!-- POSSIBILIDADES: -->
        <!-- Cada avaliação é um bloco, as principais estão um ao lado da outra -->
        <!-- Futuro: Adicionar um sistema de avaliação por estrelas (a considerar) -->
        <!-- Futuro: Adicionar um <aside> à esquerda para o quantidade média de estrelas dada pelos clientes (a considerar) -->
        <!-- Necessita ser refatorado -->
        <hr class="border-white/10 my-5">
        <section class="p-3 lg:p-8">
            <h2 class="text-xl lg:text-3xl text-center font-bold p-0 lg:p-8 mb-4 lg:mb-0">Avaliações de clientes</h2>
            <article class="comentario">
                <div class="flex flex-col w-full items-start bg-slate-400/10 rounded-xl p-3 max-h-[152px]">
                    <div class="flex flex-row justify-around items-center">
                        <figure>
                            <img class="rounded-2xl shadow-md w-10 h-10" src="https://images.pexels.com/photos/2607544/pexels-photo-2607544.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                            alt="Cachorrinho">
                        </figure>
                        <p class="text-lg font-semibold pl-2">Cachorrinho</p>
                    </div>
                    <p class="mt-4 text-slate-400 overflow-scroll overflow-x-hidden">Gostei muito, ele é muito educado e prestativo. Foi uma gameplay agradável!</p>
                </div>
            </article>
            <article class="comentario">
                <div class="flex flex-col w-full items-start bg-slate-400/10 rounded-xl p-3 max-h-[152px]">
                    <div class="flex flex-row justify-around items-center">
                        <figure>
                            <img class="rounded-2xl shadow-md w-10 h-10" src="https://img.freepik.com/fotos-premium/gato-fofo-de-olhos-grandes-gatinho-gato-fofo-fofo_303714-151.jpg" 
                            alt="Cachorrinho">
                        </figure>
                        <p class="text-lg font-semibold pl-2">Gatinho</p>
                    </div>
                    <p class="mt-4 text-slate-400 overflow-scroll overflow-x-hidden">Muito educado!</p>
                </div>
            </article>
            <article class="comentario">
                <div class="flex flex-col w-full items-start bg-slate-400/10 rounded-xl p-3 max-h-[152px]">
                    <div class="flex flex-row justify-around items-center">
                        <figure>
                            <img class="rounded-2xl shadow-md w-10 h-10" src="https://www.veracel.com.br/wp-content/uploads/2022/01/Veracel-Temporada-reprodutividade-de-tartaruga-Home.jpg" 
                            alt="Cachorrinho">
                        </figure>
                        <p class="text-lg font-semibold pl-2">Tartaruguinha</p>
                    </div>
                    <p class="mt-4 text-slate-400 overflow-scroll overflow-x-hidden">Só jogadas boas!</p>
                </div>
            </article>
        </section>
        <hr class="border-white/10 my-5">
        <!-- A considerar o futuro dessa seção: ficará na página ou escondida atrás de um botão. -->
        <!-- RODE npm run dev ANTES DE COMEÇAR!!! -->
        <section class="p-3 lg:p-8">
            <form action="" id="send-review-form">
                <div class="flex flex-col w-full h-72 justify-around items-start">
                    <label class="text-xl lg:text-3xl font-bold" for="review">Dê sua opinião:</label>
                    <textarea class="outline-none p-2 h-36 text-slate-400 bg-rich w-full rounded-2xl border border-slate-400/20" name="review" id="review" cols="70" rows="7"></textarea>
                    <input class="button text-lg px-16 w-full md:max-w-sm" type="submit" value="Enviar">
                </div>
            </form>
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
</body>
</html>