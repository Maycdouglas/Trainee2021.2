<?php

session_start();
$con = mysqli_connect("127.0.0.1", "root", "", "mycaopetshop") or die ("Sem conexão com o servidor");

if (empty($_POST['email']) || empty($_POST['senha'])) 
{
    header('Location: /login');
    exit();
}

$email = mysqli_real_escape_string($con, $_POST['email']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$result = mysqli_query($con, "SELECT * FROM `usuarios` WHERE email = '{$email}' AND senha = '{$senha}'");

$row = mysqli_num_rows($result);

if($row == 1)
{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $usuario = $result->fetch_object();
    $nome = $usuario->nome;
    $_SESSION['nome'] = $nome;
    header('Location: /dashboard');
}
else
{
    $_SESSION['nao_autenticado'] = true;
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    header('Location: /login');
}

?>