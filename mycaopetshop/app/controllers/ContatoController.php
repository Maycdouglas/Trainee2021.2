<?php

namespace App\Controllers;

use App\Core\App;
use Exception;


class ContatoController
{
    public function viewContato()
    {
        return view('contato'); 
    }

    public function Contato()
    {
        $parametros = [

            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'assunto' => $_POST['assunto'],
            'mensagem' => $_POST['mensagem']
        ];

        app::get('database')->enviaEmail($parametros);
    }
}