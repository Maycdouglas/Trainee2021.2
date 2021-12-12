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

    public function selectAllWithFk($table, $table2)
    {
        $queryProdutos = "SELECT * FROM {$table}";
        $queryCategorias = "SELECT * FROM {$table2}";

        try {
            $stmt = $this->pdo->prepare($queryProdutos);
            $stmt2 = $this->pdo->prepare($queryCategorias);

            $stmt->execute();
            $stmt2->execute();

            $produtos = $stmt->fetchAll(PDO::FETCH_CLASS);
            $categorias = $stmt2->fetchAll(PDO::FETCH_CLASS);


            $result = [
                "produtos" => $produtos,
                "categorias" => $categorias
            ];

            return $result;
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

    public function selectPesquisa($table, $pesquisa)
    {
        $query = "SELECT * FROM {$table} WHERE nome LIKE '%{$pesquisa}%'";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function insertProdutos($table, $parameters)
    {
        $query = "INSERT INTO {$table} (nome, descricao, categoria, informacoes_uteis ,preco, imagem_1, imagem_2, imagem_3) VALUES ('{$parameters['nome']}', '{$parameters['descricao']}', '{$parameters['categoria']}', '{$parameters['informacoes-uteis']}' ,'{$parameters['preco']}', '{$parameters['imagem-1']}', '{$parameters['imagem-2']}', '{$parameters['imagem-3']}')";
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
