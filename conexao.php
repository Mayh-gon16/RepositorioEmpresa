<?php
//Comando que vai conectar o banco de dados
try{
    $banco = new PDO("sqlite:dado.sqlite");
}catch(PDOException $e){
    echo "Erro no momento de acionar o banco!";
}
// Vai criar a tabela PESSOA caso ela não exista
$criarTabela = "CREATE TABLE IF NOT EXISTS PESSOA(
    nome TEXT,
    fundador TEXT,
    endereço TEXT,
    quantidade de clientes TEXT,
    data de fundação TEXT,
    primary key (codigo))";

//Executará o comando de criação de tabela
$banco->query($criarTabela);