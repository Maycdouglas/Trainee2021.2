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
        $produtos = App::get('database')->selectAllWithfk("produtos", "categorias");

        $categoriaUsuario = array();
        foreach ($produtos["categorias"] as $categoria)
        {
            $categoriaUsuario += [
                "{$categoria->id}" => $categoria->nome
            ];
        }

        $tabela = [
            "produtos" => $produtos["produtos"],
            "categorias" => $produtos["categorias"],
            "catProdutos" => $categoriaUsuario
        ];

        return viewAdm("produtos", $tabela);
    }

    public function pesquisaProdutos()
    {
        $pesquisa = $_GET["pesquisa"];

        $result = App::get('database')->selectPesquisa("produtos", $pesquisa);

        $tabela = [
            "produtos" => $result
        ];

        return viewAdm("produtos", $tabela);
    }


    public function postProdutos()
    {
        $params = [
            "nome" => $_POST["nome"],
            "preco" => $_POST['preco'],
            "categoria" => $_POST["categoria"],
            "descricao" => $_POST["descricao"],
            "informacoes_uteis" => $_POST["informacoes-uteis"],
            "imagem_1" => $_POST["imagem-1"],
            "imagem_2" => $_POST["imagem-2"],
            "imagem_3" => $_POST["imagem-3"]
        ];

        App::get('database')->insertProdutos("produtos", $params);

        header("Location: /admin/produtos");
    }

    public function updateProdutos()
    {
        $params = [
            "nome" => $_POST["nome"],
            "preco" => $_POST['preco'],
            "categoria" => $_POST["categoria"],
            "descricao" => $_POST["descricao"],
            "informacoes_uteis" => $_POST["informacoes-uteis"],
            "imagem_1" => $_POST["imagem-1"],
            "imagem_2" => $_POST["imagem-2"],
            "imagem_3" => $_POST["imagem-3"]
        ];

        $id = $_POST["id"];

        App::get('database')->updateProdutos("produtos", $id, $params);

        header("Location: /admin/produtos");
    }

    public function deleteProdutos()
    {
        $id = $_POST["id"];

        App::get('database')->delete("produtos", $id);

        header("Location: /admin/produtos");
    }

}