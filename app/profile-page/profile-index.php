<?php
    session_start();

    if($_SESSION["usuario"]) {
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
            <!--<div class="text-base flex justify-between">
                <a class="border-r hidden lg:inline border-slate-400/10 hover:text-slate-100 px-2" href="../sign-page/login.php">Entrar</a>
                <a class="px-2 hidden lg:inline hover:text-slate-100" href="../sign-page/cadastro.php">Cadastrar</a>
            </div>-->
            <!--<a class="text-xl hidden lg:inline" href="#">
                <i class="fa-solid fa-cart-shopping hover:text-slate-100"></i>
            </a>-->
            <div class="text-base flex justify-between">
                <a class="border-r hidden lg:inline border-slate-400/10 hover:text-slate-100 px-2" href="../sign-page/logout.php">Logout</a>
            </div>
        </div>
    </header>
    <main class="p-3">
        <section class="p-3 flex flex-col justify-center items-center sm:justify-between sm:flex-row">
            <div class="flex flex-row items-start">
                <figure class="flex flex-row items-center justify-end">
                    <img class="rounded-full w-[80px] h-[80px] shadow-md" src="../../src/imgs/bannerservice.png" alt="anon">
                    <figcaption class="text-2xl text-center w-full ml-4"><?php echo $_SESSION["usuario"] ?></figcaption>
                </figure>
            </div>
            <div class="flex flex-col justify-center items-center mt-5 md:flex-row sm:mt-0">
                <div>
                    <p class="text-lg">Saldo: R$00.00</p>
                </div> 
            </div>
        </section>
        <section class="flex justify-center sm:justify-start mt-5">
            <div>
                <button class="button"><a href="../service-page/create-service.php">Anunciar serviço</a></button>
            </div>
        </section>
        <hr class="border-white/10 my-5">
        <section class="flex justify-center p-3">
            <ul class="w-full">
                <li class="profileItems">
                    <div class="flex justify-between w-full">
                        <div class="flex items-center">
                            <i class="fa-solid fa-user mr-3"></i>
                            <p>Dados</p>
                        </div>
                        <button><i class="fa-solid fa-chevron-down"></i></button>
                    </div> 
                    <div class="hidden mt-4 dados w-full">
                        <div class="w-full flex items-center">
                            <div class="w-full md:w-3/5">
                                <!--<label for="email">E-Mail</label>
                                <input id="email" class="inputStyle w-full" type="email" value="gabrielmulinari2002@gmail.com">-->
                                <label for="email">E-mail (<?php echo $_SESSION["email"] ?>)</label>
                                <input id="email" class="inputStyle w-full" type="email" placeholder="Modifique seu e-mail">
                            </div>
                        </div>
                        <div class="w-full flex items-center">
                            <div class="w-full md:w-2/6">
                                <!--<label for="username">Username</label>
                                <input id="usernameInput" class="inputStyle w-full" type="text">-->
                                <label for="nome">Seu nome (<?php echo $_SESSION["usuario"] ?>)</label>
                                <input id="nome" class="inputStyle w-full" type="text" placeholder="Edite seu nome">
                            </div>
                        </div>
                        <div class="w-full flex items-center">
                            <div class="w-full md:w-2/6">
                                <!--<label for="altSenha">Senha</label>
                                <input id="altSenha" class="inputStyle w-full" type="password">-->
                                <label for="senha">Modifique sua senha</label>
                                <input id="senha" class="inputStyle w-full" type="password" placeholder="Nova senha">
                            </div>
                        </div>
                        <div class="w-full flex items-center">
                            <div class="w-full md:w-2/6">
                                <!--<label for="altSenha">Senha</label>
                                <input id="altSenha" class="inputStyle w-full" type="password">-->
                                <label for="senha">Confirme a senha</label>
                                <input id="senha" class="inputStyle w-full" type="password" placeholder="Confirme">
                            </div>
                        </div>
                        <button class="button mt-3 text-base">Confirmar alterações</button>
                    </div>
                </li>
                <li class="profileItems">
                    <div class="flex justify-between w-full">
                        <div class="flex items-center">
                            <i class="fa-solid fa-cart-shopping mr-3"></i>
                            <p>Meus Pedidos</p>
                        </div>
                        <button><i class="fa-solid fa-chevron-down"></i></button>
                    </div>
                    <div class="hidden mt-4 dados">
                        <p>Alomomola</p>
                        <p>Girafarig</p>
                        <p>Farigiraf</p>
                    </div>
                </li>
                <li class="profileItems">
                    <div class="flex justify-between w-full">
                        <div class="flex items-center">
                            <i class="fa-solid fa-phone mr-3"></i>
                            <p>Atendimento</p>
                        </div>
                        <button><i class="fa-solid fa-chevron-down"></i></button>
                    </div>
                    <div class="hidden mt-4 dados">
                        <p>(11) 4002-8922</p>
                        <p>reply@accounts.nintendo.com</p>
                    </div>
                </li>
            </ul>
        </section>
                
        </main>
        <footer class="bg-black/60 text-center py-5">
            <ul class="h-32 flex flex-col justify-between text-slate-500 mb-5">
                <li>Gabriel de Paulo Mulinari</li>
                <li>João Matheus Galvão de Oliveira</li>
                <li>Breno Serra da Silva</li>
                <li>Thiago</li>
            </ul>
            <p>Todos os direitos não reservados &nbsp;</p>
        </footer>
        <script src="profile-js/profile.js" type="module"></script>
</body>
<?php
    } else {
        header("Location: ../main-page/index.php");
    }
?>