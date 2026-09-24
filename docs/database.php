<?php

function conectarBancoDeDados() {
    $conn = new mysqli("localhost","root","","portfolio");   //cria uma nova instância para usar as funções do sql, o 'localhost' se refere a máquina onde está rodando o banco, 'root' é o nome do usuário que tem acesso a tudo do Banco de Dados, '' é a senha vazia, 'gamebits' é o nome do banco de dados
    if ($conn->connect_error) {     //se der falha ao se conectar com o banco de dados
        die("Um erro ocorreu! O erro foi: " . $conn->connect_error);    //mata a conexão e exibe uma mensagem com o motivo do erro
    }

    return $conn;   //retorna a variável para acessar as funções do sql no banco de dados 'crud'
}

function buscarDadosDeProjetos($conn) {
    $sql = "SELECT * FROM projetos";       //a variável $sql armazena uma função que armazena tudo da tabela 'visitante'
    $result = $conn->query($sql);       //realiza uma busca de uma função no banco de dados, onde armazenamos tudo da tabela 'visitante' na variável $result

    return $result;     //retorna todos os dados da tabela 'visitante'
}