<?php

namespace App\Core\Database;

use Exception;
use PDO;

class QueryBuilder
{
    protected $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $query = "SELECT * FROM {$table}";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select($table, $id)
    {
        $query = "SELECT FROM {$table} WHERE id = {$id}";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertProdutos($table, $parameters)
    {
        $query = "INSERT INTO {$table} (nome, descricao, categoria, preco, foto) VALUES ('{$parameters['nome']}', '{$parameters['descricao']}', '{$parameters['categorias']}', '{$parameters['preco']}', '{$parameters['foto']}')";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit()
    {
         
    }

    public function updateProdutos($table, $id, $params)
    {
        $query = "UPDATE {$table} SET nome='{$params['nome']}', descricao='{$params['descricao']}', preco='{$params['preco']}', categoria='{$params['categoria']}', foto='{$params['foto']}' WHERE id= {$id}";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $query = "DELETE FROM {$table} WHERE id={$id}";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function read()
    {
      
    }
}
