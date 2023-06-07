<?php
    include "C:\Developing\TechFreelas\TechFreelas\app\db-php\db.php";

    session_start();

    if ($_SESSION["usuario"]) {
        if (isset($_POST["Salvar Serviço"])) {
            $nome = $_SESSION["usuario"];
            $categoria = $_POST["categoria"];
            $preco = $_POST["preco"];

            if (isset($_FILES["foto"]) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                $folder_alvo = "database/profile-images/";
                $nome_arquivo = uniqid() . '_' . $_FILES['foto']['name'];
                $caminho = $folder_alvo . $nome_arquivo;

                // Pegando o caminho da foto de perfil do banco de dados.
                $query = $db->prepare("SELECT foto FROM Usuario WHERE User_ID = :id");
                $query->bindValue(':id', $_SESSION["user_id"]);
                $query->execute();
                $previousImagePath = $query->fetchColumn();

                // Deletando a foto anterior se existir.
                if (!empty($previousImagePath)) {
                    unlink($previousImagePath);
                }
                
                $update = $db->prepare("UPDATE Usuario SET foto = :caminho_foto WHERE User_ID = :id");
                $update->bindValue(':caminho_foto', $caminho);
                $update->bindValue(':id', $_SESSION["user_id"]);
                $update->execute();
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho)) {
                    echo "Foto registrada!";
                    $_SESSION["foto"] = $caminho;
                } else {
                    echo "Algum erro aconteceu no upload da foto!";
                }
            } else {
                echo "Nenhum upload de foto detectado!";
            }
            // ----------- Categoria -----------
            $select_categoria = $db->prepare("SELECT * FROM Categoria WHERE Categoria_Name = $categoria");
            $select_categoria->execute();
            $categoria_id = $select_categoria->fetchColumn();
            // ---------------------------------
            $insert_service = $db->prepare("INSERT INTO Service (User_ID, Preco, Service_IMG, Categoria_ID)
                                            VALUES (:user_id, :preco, :service_img, :categoria_id)");
            $insert_service->bindValue(':user_id', $_SESSION["user_id"]);
            $insert_service->bindValue(':preco', $preco);
            $insert_service->bindValue(':service_img', $foto);
            $insert_service->bindValue(':categoria_id', $categoria_id);
            $insert_service->execute();
        }
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
            <a class="text-xl hidden lg:inline" href="../profile-page/profile-index.php">
                <i class="fa-solid fa-cart-shopping hover:text-slate-100"></i>
            </a>
        </div>
    </header>
    <main>
        <!--<section>
            <input type="file">
            <button class="button text-sm">Enviar</button>
        </section>-->
        <p>Nome: <?php echo $_SESSION["usuario"]; ?></p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <label for="arquivo_imagem">Envie uma foto:</label> <br>
            <input type="file" id="arquivo_imagem" name="foto"> <br>
            <select id="categorySelect" name="categoria">
                <option value=""></option>
                <option value="Desenvolvedor">Desenvolvedor</option>
                <option value="Artista">Artista</option>
                <option value="Coach">Coach</option>
                <option value="Professor">Professor</option>
                <option value="Audiovisual">Audiovisual</option>
            </select>
            <label for="preco">O preço do serviço:</label> <br>
            <input type="number" name="preco">
            <input class="button" type="submit" name="enviar" value="Salvar Serviço"> <br>
        </form>
        <!--<section class="text-black">
            <select id="categorySelect" name="categoria">
                <option value="Desenvolvedor">Desenvolvedor</option>
                <option value="Artista">Artista</option>
                <option value="Coach">Coach</option>
                <option value="Professor">Professor</option>
                <option value="Audiovisual">Audiovisual</option>
            </select>
        </section>-->
    </main>
</body>
</html>
<?php
    } else {
        header("Location: ../main-page/index.php");
    }
?>