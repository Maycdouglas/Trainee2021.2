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
 
    }

    public function update()
    {
        
    }

    public function delete()
    {
 
    }
}