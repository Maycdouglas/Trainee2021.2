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

    public function viewAdmin()
    {
        $produtos = App::get('database')->selectAll("produtos");

        $tabela = [
            "produtos" => $produtos
        ];

        return viewAdm("view-adm-produtos", $tabela);
    }

    public function postProdutos()
    {
        $params = [
            "nome" => $_POST["nome"],
            "preco" => $_POST["preco"],
            "categoria" => $_POST["categoria"],
            "descricao" => $_POST["descricao"],
            "foto" => $_POST["foto"]
        ];

        App::get('database')->insertProdutos("produtos", $params);

        header("Location: /admin/produtos");
    }

}