<?php
    // Conectando ao banco de dados SQLite
    $db = new PDO("sqlite:../../database/database.sqlite");
    
    // Configurando as tabelas
    $tabela_usuario = "CREATE TABLE IF NOT EXISTS Usuario (
                        User_ID INTEGER PRIMARY KEY AUTOINCREMENT,
                        Nome TEXT NOT NULL,
                        Email TEXT NOT NULL,
                        Idade INTEGER NOT NULL,
                        Cpf TEXT NOT NULL,
                        Senha TEXT NOT NULL,
                        Cep TEXT NOT NULL,
                        Rua TEXT NOT NULL,
                        Bairro TEXT NOT NULL,
                        Numero TEXT NOT NULL,
                        Cidade TEXT NOT NULL,
                        Uf TEXT NOT NULL,
                        foto TEXT
                        )";
    $tabela_service = "CREATE TABLE IF NOT EXISTS Service (
                        Service_ID INTEGER PRIMARY KEY AUTOINCREMENT,
                        User_ID INTEGER,
                        Preco REAL,
                        Service_IMG TEXT,
                        Categoria_ID INTEGER,
                        FOREIGN KEY (User_ID) REFERENCES Usuario(User_ID),
                        FOREIGN KEY (Categoria_ID) REFERENCES Categoria(Categoria_ID)
                        )";
    $tabela_categoria = "CREATE TABLE IF NOT EXISTS Categoria (
                          Categoria_ID INTEGER PRIMARY KEY AUTOINCREMENT,
                          Categoria_Name TEXT NOT NULL
                          )";
    
    $db->exec($tabela_usuario);
    $db->exec($tabela_service);
    $db->exec($tabela_categoria)
?>