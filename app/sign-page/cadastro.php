<?php
include "app/db-php/db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST["submit"])) {
        // Certificando, com certeza, se os inputs foram dados...
        $nome_completo = isset($_POST["nome_completo"]) ? $_POST["nome_completo"] : '';
        $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : '';
        $data_nascimento = isset($_POST["data_nascimento"]) ? $_POST["data_nascimento"] : '';
        $email = isset($_POST["email"]) ? $_POST["email"] : '';
        $senha = isset($_POST["senha"]) ? $_POST["senha"] : '';
        $cep = isset($_POST["cep"]) ? $_POST["cep"] : '';
        $rua = isset($_POST["rua"]) ? $_POST["rua"] : '';
        $numero_rua = isset($_POST["numero_rua"]) ? $_POST["numero_rua"] : '';
        $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : '';
        $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : '';
        $uf = isset($_POST["uf"]) ? $_POST["uf"] : '';
        $mensagem = "";

        if (empty($nome_completo) || empty($cpf) || empty($data_nascimento) || empty($email) || empty($senha) ||
         empty($cep) || empty($rua) || empty($numero_rua) || empty($bairro) || empty($cidade) || empty($uf)) {
            $mensagem = "Todos os campos precisam ser preenchidos!";
        } else {
            // Checando se há registro
            $achou = false;
            $select = $db->prepare("SELECT * FROM Usuario WHERE email = :email");
            $select->bindParam(':email', $email);
            $select->execute();
            while($linha = $select->fetch(PDO::FETCH_ASSOC)) {
                if ($linha["Senha"] == $senha) {
                    $achou = true;
                    break;
                }
            }
            if($achou) {
                $mensagem = "O usuário já está cadastrado!";
            } else {
                // Calculando a idade do novo usuário
                $data_atual = date('Y-m-d');
                $nascimento = new DateTime($data_nascimento);
                $agora = new DateTime($data_atual);
                $idade = $nascimento->diff($agora)->y;

                $insert = $db->prepare("INSERT INTO Usuario (Nome, Email, Idade, Cpf,
                                                            Senha, Cep, Rua, Bairro,
                                                            Numero, Cidade, Uf)
                                            VALUES (:nome, :email, :idade, :cpf,
                                                    :senha, :cep, :rua, :bairro,
                                                    :numero, :cidade, :uf)");
                $parametros = [
                    ':nome' => $nome_completo,
                    ':email' => $email,
                    ':idade' => $idade,
                    ':cpf' => $cpf,
                    ':senha' => $senha,
                    ':cep' => $cep,
                    ':rua' => $rua,
                    ':bairro' => $bairro,
                    ':numero' => $numero_rua,
                    ':cidade' => $cidade,
                    ':uf' => $uf
                ];
                foreach($parametros as $param => $val) {
                    $insert->bindValue($param, $val);
                }
                if($insert->execute()) {
                    $mensagem = "Novo usuário cadastrado com sucesso!";
                } else {
                    $mensagem = "Algum erro ocorreu no registro do novo usuário!";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechFreelas | Login</title>
    <script src="https://kit.fontawesome.com/8ad2738107.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../tailwindCSS/tailwind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Urbanist:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../src/scroll.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
</head>
<body class="bodyPattern">
    <main class="p-5">
        <h1 class="text-center font-bold text-3xl mb-4">Cadastro</h1>
        <?php
            echo '<p>'.$mensagem.'</p>';
        ?>
        <section>
            <form class="flexCol md:max-w-xl" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <section class="md:grid md:grid-cols-2 mb-5">
                    <h2 class="text-2xl font-bold mb-4">Dados Pessoais</h2>
                    <div class="flexCol col-span-2">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" class="inputStyle" type="text" name="nome_completo">
                    </div>
                    <div class="flexCol md:max-w-[90%]">
                        <label for="cpf">CPF</label>
                        <input id="cpf" class="inputStyle" type="text" name="cpf">
                    </div>
                    <div class="flexCol md:max-w-[100%]">
                        <label for="nascimento">Data de nascimento</label>
                        <input id="nascimento" class="inputStyle" type="date" name="data_nascimento">
                        <span class="text-red-500 invisible" id="erroData">O usuário deve ser maior de idade</span>
                    </div>
                    <div class="flexCol col-span-2 md:max-w-[60%]">
                        <label for="email">E-Mail</label>
                        <input id="email" class="inputStyle" type="email" name="email">
                    </div>
                    <div class="flexCol col-span-2 md:max-w-[60%]">
                        <label for="senha">Senha</label>
                        <input id="senha" class="inputStyle" type="password">
                    </div>
                    <div class="flexCol col-span-2 md:max-w-[60%]">
                        <label for="confsenha">Confirme a Senha</label>
                        <input id="confsenha" class="inputStyle" type="password" name="senha">
                    </div>
                    <div>
                        <span class="invisible text-red-500" id="senhaVal">Senhas não coincidem</span>
                    </div>
                </section>
                <section class="mt-5">
                    <h2 class="text-2xl font-bold mb-4">Endereço</h2>
                    <div class="flexCol md:w-2/5">
                        <label for="cep">CEP</label>
                        <input id="cep" class="inputStyle" type="text" name="cep">
                    </div>
                    <div class="flexCol">
                        <label for="rua">Rua</label>
                        <input id="rua" class="inputStyle" type="text" name="rua">
                    </div>
                    <div class="flexCol md:w-1/5">
                        <label for="numero">Número</label>
                        <input id="numero" class="inputStyle" type="text" name="numero_rua">
                    </div>
                    <div class="flexCol md:w-3/5">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" class="inputStyle" type="text" name="bairro">
                    </div>
                    <div class="flexCol md:w-2/5">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" class="inputStyle" type="text" name="cidade">
                    </div>
                    <div class="flexCol md:w-1/12">
                        <label for="uf">UF</label>
                        <input id="uf" class="inputStyle" type="text" name="uf">
                    </div>
                </section>
                <div class="md:flex justify-between items-center mt-5 md:w-4/5">
                    <!-- Por algum motivo esse botão não funciona!
                        Motivo = javascript! Basta tirar o id="cadastrar" -->
                    <!--<input id="cadastrar" class="button w-full md:w-1/2 mb-2 md:mb-0" name="cadastrar" value="Cadastrar" type="submit">-->
                    <input class="button btnCadastro w-full md:w-1/2 mb-2 md:mb-0" type="submit" name="submit" value="Cadastrar">
                    <span id="aviso" class="invisible text-red-500 text-center">Preencha todos os campos!</span>
                    <a class="block text-center mt-2 underline text-blue-400 hover:text-blue-800" href="login.php">Já possui uma conta?</a>
                </div>
            </form>
        </section>
    </main>
    <style>
            input[type="date"]::-webkit-inner-spin-button,
    input[type="date"]::-webkit-calendar-picker-indicator {
        display: none;
        -webkit-appearance: none;
    }
    </style>
</body>
<script type="module" src="sign-js/validacao.js"></script>
<script type="module" src="sign-js/password.js"></script>
<script type="module" src="sign-js/cep.js"></script>
<script type="module" src="sign-js/date.js"></script>
</html>