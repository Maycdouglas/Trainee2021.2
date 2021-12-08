<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{
    public function view()
    {
        $usuarios = App::get('database')->selectAll('usuarios');

        return viewAdm('usuarios', compact('usuarios'));
    }
    
    public function create()
    {
        $parameters = [

            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ];
        app::get('database')->insert('usuarios', $parameters);

        header('Location: /usuarios');
    }

    public function update()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ];

        app::get('database')->update('usuarios', $parameters, $_POST['id']);
        header('Location: /usuarios'); 
    }

    public function delete()
    {

        app::get('database')->delete('usuarios', $_POST['id']);
        header('location: /usuarios');
 
    }
}