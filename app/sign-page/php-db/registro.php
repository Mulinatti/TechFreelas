<?php
    $db = new PDO("sqlite:../../../database/database.db");
    if (ISSET($_POST['cadastrar'])) {
        $nome = $_POST['nome_completo'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $numero_rua = $_POST['numero_rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];

        $data_atual = date("d-m-Y");
        $idade = date_diff(date_create($data_nascimento), date_create($data_atual));

        $stmt = $db->prepare("INSERT INTO Usuario (Nome, Idade, Cpf, Senha, Cep, Rua, Bairro, Numero, Cidade, Uf)
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $idade);
        $stmt->bindParam(3, $cpf);
        $stmt->bindParam(4, $senha);
        $stmt->bindParam(5, $cep);
        $stmt->bindParam(6, $rua);
        $stmt->bindParam(7, $bairro);
        $stmt->bindParam(8, $numero_rua);
        $stmt->bindParam(9, $cidade);
        $stmt->bindParam(10, $uf);
    }
?>