<?php

class PessoaSql extends Conexao {

    public $con;

    public function __construct() {
        $this->con = Conexao::getConnection();
    }

    //funcao para fazer select na tabela
    public function Insert($Pessoa) {
        $query = "INSERT INTO pessoas (NomePessoa, Email, Numero, Cnpj, Cpf, Endereco, Telefone )
	                        VALUES (:nome, :email, :numero, :cnpj, :cpf, :endereco, :telefone)";
        try {
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':nome', $Cliente->getNome());
            $stmt->bindValue(':email', $Cliente->getEmail());
            $stmt->bindValue(':numero', $Cliente->getNumero());
            $stmt->bindValue(':cnpj', $Cliente->getCnpj());
            $stmt->bindValue(':cpf', $Cliente->getCpf());
            $stmt->bindValue(':endereco', $Cliente->getEndereco());
            $stmt->bindValue(':telefone', $Cliente->getTelefone());
            
            
            return $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function Update($cliente) {
        $query = "UPDATE clientes SET NomeCliente=:nome, email=:email,
	          telefone=:telefone where id_cliente=:id_cliente";
        try {
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':nome', $user->getNome());
            $stmt->bindValue(':email', $user->getEmail());
            $stmt->bindValue(':telefone', $user->getTelefone());
            $stmt->bindValue(':id_cliente', $user->getIdCliente());
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}