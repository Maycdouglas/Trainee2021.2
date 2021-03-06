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

    public function paginacao()
    {
        $qtdProdutos = 8;
        $pagina = $_GET['pg'] ?? 1;
        $inicio = $pagina - 1;
        $inicio *= $qtdProdutos;
        $qtdProdutosAtualizada = $pagina * $qtdProdutos;
        
        $limite = $inicio . "," . $qtdProdutos;

        $produtos = App::get('database')->selectAllWithFk('produtos', 'categorias');
        $quantidadeTotal = count($produtos["produtos"]);

        $totalPaginas = $quantidadeTotal / $qtdProdutos;


        $produtosPaginacao = App::get('database')->paginacao($limite);

        $categoriaUsuario = array();
        foreach ($produtos["categorias"] as $categoria)
        {
            $categoriaUsuario += [
                "{$categoria->id}" => $categoria->nome
            ];
        }

        $arr = [
            "pagina" => $pagina,
            "totalPaginas" => $totalPaginas,
            "totalProdutos" => $quantidadeTotal,
            "qtdProdutos" => $qtdProdutos,
            "inicio" => $inicio,
            "produtos" => $produtos["produtos"],
            "categoriaProduto" => $categoriaUsuario,
            "produtosPaginacao" => $produtosPaginacao
        ];


        return view("produtos", $arr);

    }

    public function pesquisa()
    {
        $pesquisa = $_GET["pesquisa"];

        $qtdProdutos = 8;
        $pagina = $_GET['pg'] ?? 1;
        $inicio = $pagina - 1;
        $inicio *= $qtdProdutos;
        $qtdProdutosAtualizada = $pagina * $qtdProdutos;
        
        $limite = $inicio . "," . $qtdProdutos;


        $produtos = App::get('database')->selectPesquisaWithFk("produtos", "categorias", $pesquisa, $limite);

        $quantidadeTotal = count($produtos["produtos"]);

        $totalPaginas = $quantidadeTotal / $qtdProdutos;


        $categoriaUsuario = array();
        foreach ($produtos["categorias"] as $categoria)
        {
            $categoriaUsuario += [
                "{$categoria->id}" => $categoria->nome
            ];
        }

        $arr = [
            "pagina" => $pagina,
            "totalPaginas" => $totalPaginas,
            "totalProdutos" => $quantidadeTotal,
            "qtdProdutos" => $qtdProdutos,
            "inicio" => $inicio,
            "produtos" => $produtos["produtos"],
            "categoriaProduto" => $categoriaUsuario,
            "produtosPaginacao" => $produtos["produtos"]
        ];

        return view("produtos", $arr);
    }

    public function view()  //paginacao
        {
            $produtos = App::get('database')->selectAll("produtos");

            $tabela = [
                "produtos" => $produtos
            ];
        
            return view("produtos", $tabela);
        }


    public function produto()
    {
        $id = intval($_GET['id']);
        
        $result = App::get('database')->selectProduto("produtos", "categorias" ,$id);


        $categoriaProduto = array();
        foreach ($result["categorias"] as $categoria)
        {
            $categoriaProduto += [
                "{$categoria->id}" => $categoria->nome
            ];
        }

        $tabela = [
            "produto" => $result["produtos"][0],
            "categorias" => $categoriaProduto
        ];


        return view('produto', $tabela);
        
    }

}