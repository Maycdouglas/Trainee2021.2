<?php

namespace App\Controllers;
use App\Core\App;
use Exception;

class ProdutosController
{
    public function index()
    {

    }

    public function show()
    {

    }

    public function view()
    {
        $produtos = App::get('database')->selectAll("produtos");

        $tabela = [
            "produtos" => $produtos
        ];

        return view("produtos", $tabela);
    }
}