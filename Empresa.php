<?php

class Empresa{
    // Primeiro defina as variáveis.
    private $nome;
    private $fundador;
    private $endereco;
    private $quantidadedeclientes;
    private $datadefundacao;
//Função que vai executar ao ser instanciado o objeto
    public function __construct(string $nome, string $fundador, string $endereco, string $quantidadedeclientes, string $datadefuncao){
        $this->definirNome($nome);
        $this->definirfundador($fundador);
        $this->definirEndereco($endereco);
        $this->definirQuantidadeDeClientes($quantidadedeclientes);
        $this->definirDataDeFundacao($datadefundacao);
    }
    //Funções de operações dos objetos
    public function definirNome(string $nome){
        $this->nome = $nome;
    }

    public function definirFundador(string $fundador){
        $this->fundador = $fundador;
    }

    public function definirEndereço(string $endereco){
        $this->endereco = $endereco;
    }
    public function definirQuantidadedeClientes(string $quantidadedeclientes){
        $this->quantidadedeclientes = $quantidadedeclientes;
    }
    public function definirDataDeFundação(string $datadefundacao){
        $this->datadefundacao = $datadefundacao;
    }

    public function exibirNome(){
        return $this->nome;
    }

    public function exibirFundador(){
        return $this->fundador;
    }                                                                     

    public function exibirEndereço(){
        return $this->endereco;
    }
    public function exibirQuantidadeDeClientes(){
        return $this->quantidadedeclientes;
    }
    public function exibirDataDeFundação(){
        return $this->datadefundacao;
    }
}