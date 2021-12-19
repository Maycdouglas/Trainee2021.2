<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

session_start();

class LoginController
{
    public function viewLogin()
    {
        return view('login');
    }

    public function login()
    {
        if (empty($_POST['email']) || empty($_POST['senha'])) {
            header('Location: /login');
            exit();
        }

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuarios = App::get('database')->selectAll('usuarios');

        foreach ($usuarios as $usuario) :
            if ($email == $usuario->email && $senha == $usuario->senha) {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                $nome = $usuario->nome;
                $_SESSION['nome'] = $nome;
                header('Location: /dashboard');
                die(var_dump($usuario->email));
            }
            else {
            $_SESSION['nao_autenticado'] = true;
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: /login');
            }
        endforeach;
    }

    public function logout()
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: /login');
    }
}
