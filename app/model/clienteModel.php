<?php

namespace app\model;

use app\config\database;

class clienteModel {

    private $conn;

    public function __construct() {
        $this->conn = new database();
    }

    public function listar($id = null) {
        $query = "select * from cliente";
        if (isset($id)) {
            $query .= "where id=" . $id;
        }
        return $this->conn->query($query)->fetchAll();
    }

    public function busca($id) {
        $query = "select * from cliente";
        $query .= " where id=" . $id;
        return $this->conn->query($query)->fetch();
    }

    public function inserir($cliente) {

        $query = "insert into cliente ("
                . "nome_fantasia,"
                . "cnpj,"
                . "razao_social,"
                . "email,"
                . ") values("
                . ":nome_fantasia,"
                . ":cnpj,"
                . ":razao_social,"
                . ":email,"
                . ")";

        $prepare = $this->conn->prepare($query);

        $prepare->bindValue(':nome_fantasia', $cliente['nome_fantasia']);
        $prepare->bindValue(':cnpj', str_replace(array('.', '-'), '', $cliente['cnpj']));

        $prepare->bindValue(':razao_social', $cliente['razao_social']);
        $prepare->bindValue(':email', $cliente['email']);

        return $prepare->execute();
    }

    public function alterar($cliente,$id) {

        $query = "update cliente  "
                . "set "
                . "nome_fantasia=:nome_fantasia, "
                . "cnpj=:cnpj, "
                . "razao_social=:razao_social, "
                . "email=:email, "
                . "where id=:id ";

        $prepare = $this->conn->prepare($query);

        $prepare->bindValue(':nome_fantasia', $cliente['nome_fantasia']);
        $prepare->bindValue(':cnpj', str_replace(array('.', '-'), '', $cliente['cnpj']));

        $prepare->bindValue(':razao_social', $cliente['razao_social']);
        $prepare->bindValue(':email', $cliente['email']);
        $prepare->bindValue(':id', $id);
        
        return $prepare->execute();
    }

    public function deletar($id) {
        $query = "delete from cliente where id = :id";

        $prepare = $this->conn->prepare($query);
        $prepare->bindValue(':id', $id);

        return $prepare->execute();
    }

}
