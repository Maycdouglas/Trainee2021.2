<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{
  protected $pdo;


  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }


  public function selectAll($table)
  {
    $sql = "select * from {$table}";

    try {
      $stmt = $this->pdo->prepare($sql);

      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_CLASS);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function insertUsuarios($table, $parametros)
  {
    $sql = "INSERT INTO `{$table}` (nome, email, senha) VALUES ('{$parametros['nome']}', '{$parametros['email']}', '{$parametros['senha']}')";

    try {
      $stmt = $this->pdo->prepare($sql);

      $stmt->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function delete($table, $id)
  {
    $sql = "DELETE FROM `{$table}` WHERE id = {$id}";

    try {
      $stmt = $this->pdo->prepare($sql);

      $stmt->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function updateUsuarios($table, $parametros, $idusuario)
  {
    $sql = "UPDATE `usuarios` SET `nome`='{$parametros['nome']}', `email`='{$parametros['email']}', `senha`='{$parametros['senha']}' WHERE `id` = '{$idusuario}'";

    try {
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
    } catch (Exception $e) {

      die($e->getMessage());
    }
  }
}
