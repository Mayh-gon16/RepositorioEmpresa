<?php
// Chamando os arquivos necessários para as operações
require "conexao.php";
require "Empresa.php";
require "RepositorioEmpresa.php";

//Instanciar o objeto
$pessoa1 = new Pessoa("0002","Anderson Claudiney","100");

//Instancio o repositório para cadastrar
$repositorioPessoa = new RepositorioPessoa();

$repositorioPessoa->cadastrar($pessoa1,$banco);

