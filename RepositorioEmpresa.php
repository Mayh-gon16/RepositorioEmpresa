<?php

class RepositorioProdutoEletronico{
    
    public function cadastrar(Empresa $Empresa, PDO $pdo){
        //Preparando a instrução SQL para criar o registro na tabela
        $codigoSql = "INSERT INTO EMPRESA(nome,fundador,endereco,quantidadedeclientes,datadefundacao) VALUES (:c,:n,:i)";
    
        $nome = $pessoa->exibirnome();
        $fundador = $pessoa->exibirfundador();
        $endereco = $pessoa->exibirendereco();
        $quantidadedeclientes = $pessoa->exibirquantidadedeclientes();
        $datadefundacao = $pessoa->exibirdatadefundacao();

        //Vou preparar as instruções
        $inserir = $pdo->prepare($codigoSql);
        //Definindo o valor dos parâmetros
        $inserir->bindParam(":c",$nome);
        $inserir->bindParam(":n",$fundador);
        $inserir->bindParam(":i",$endereco);
        $inserir->bindParam(":i",$quantidadedeclientes);
        $inserir->bindParam(":i",$datadefundacao);
        //Executa o comando de inserir no banco
        $inserir->execute();
    }

    public function listar(PDO $banco) {
        $sql = "SELECT * FROM PESSOA";

        //Executa o sql do banco 
        $select = $banco->query($sql);

        //Estrutura os valores como obtidos pelo $select como um vetor indexado 
        return $select->fetchAll(PDO::FETCH_ASSOC); 
    }
}