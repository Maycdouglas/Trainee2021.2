<?php

namespace App\Core\Database;

use Exception;
use PDO;
use PHPMailer\PHPMailer\PHPMailer;

class QueryBuilder
{
    protected $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $query = "select * from {$table}";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $error) {
            die($error->getMessage());
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
        $query = "INSERT INTO {$table} (nome, descricao, categoria, informacoes_uteis ,preco, imagem_1, imagem_2, imagem_3) VALUES ('{$parameters['nome']}', '{$parameters['descricao']}', '{$parameters['categoria']}', '{$parameters['informacoes_uteis']}' ,'{$parameters['preco']}', '{$parameters['imagem_1']}', '{$parameters['imagem_2']}', '{$parameters['imagem_3']}')";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectCategoria($table, $id)
    {
        $query = "select from {$table} where id={$id}";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $error) {
            die($error->getMessage());
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

    public function insertCategoria($table, $dados)
    {
        $query = "insert into {$table} (nome) values ('{$dados['nome']}')";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }

    public function updateCategoria($table, $id, $dados)
    {
        $query = "update {$table} set nome = '{$dados['nome']}' where id= {$id}";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }

    public function updateProdutos($table, $id, $params)
    {
        var_dump($params["categoria"]);
        $query = "UPDATE {$table} SET nome='{$params['nome']}', descricao='{$params['descricao']}', preco='{$params['preco']}', categoria='{$params['categoria']}', informacoes_uteis='{$params['informacoes_uteis']}', imagem_1='{$params['imagem_1']}', imagem_2='{$params['imagem_2']}', imagem_3='{$params['imagem_3']}' WHERE id= {$id}";

        try {
            $stmt = $this->pdo->prepare($query);
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

    public function enviaEmail($parametros)
    {
        require 'mailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = //'exemplo@gmail.com';
        $mail->Password = //'senha';
        $mail->Port = 587;

        $mail->setFrom('remetente@email.com.br'); //e-mail do remetente
        $mail->addReplyTo('no-reply@email.com.br'); //e-mail para o qual serão enviadas as respostas
        $mail->addAddress('email@email.com.br', 'Nome'); //Adicionamos um destinatário

        $mail->isHTML(true); //Indicamos o uso do HTML
        $mail->Subject = 'Assunto do email'; //título para a mensagem
        $mail->Body    = 'Este é o conteúdo da mensagem em <b>HTML!</b>'; //conteúdo do e-mail
        $mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail'; //texto opcional para clientes que não suportem HTML

        if(!$mail->send()) {
            echo 'Não foi possível enviar a mensagem.<br>';
            echo 'Erro: ' . $mail->ErrorInfo;
        } else {
            echo 'Mensagem enviada.';
        }
    }
}
