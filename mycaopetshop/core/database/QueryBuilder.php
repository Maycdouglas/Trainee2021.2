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

  // public function selectByEmail($table, $email)
  // {
  //   $sql = "SELECT FROM $table WHERE email = '{$email}'";

  //   try {
  //     $stmt = $this->pdo->prepare($sql);

  //     $stmt->execute();

  //     return $stmt->fetchAll(PDO::FETCH_CLASS);
  //   } catch (Exception $e) {
  //     die($e->getMessage());
  //   }
  // }

  public function insertUsuarios($table, $parametros)
  {
    $sql = "INSERT INTO `usuarios` (nome, email, senha) VALUES ('{$parametros['nome']}', '{$parametros['email']}', '{$parametros['senha']}')";
    // die(var_dump($parametros));
    try {
      $stmt = $this->pdo->prepare($sql);

      $stmt->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function edit()
  {
  }

  public function delete($table, $idusuario)
  {

    $sql = "DELETE FROM $table WHERE id = {$idusuario}";

    try {
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
    } catch (Exception $e) {

      die($e->getMessage());
    }
  }

  public function read()
  {
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
