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
 
    $produtos = App::get('database')->selectAll("produtos");
    $conexao = mysqli_connect("127.0.0.1", "root", "", "mycaopetshop") or die("Sem conexão com o servidor");
     
    $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;


    $resultado_produtos = mysqli_query($conexao, $produtos['produtos']);

    $total_produtos = mysqli_num_rows($resultado_produtos);

    $quantidadeProd_pg = 6;

    $num_pg = ceil($total_produtos / $quantidadeProd_pg);

    //Calcula a pagina de qual valor será exibido
    $inicio = ($quantidadeProd_pg * $pagina) - $quantidadeProd_pg;

    $result_produtos = "SELECT FROM produtos ORDER BY data DESC LIMIT $inicio, $quantidadeProd_pg";
    $resultado_produtos = mysqli_query($conexao, $result_produtos);
    $total_produtos = mysqli_num_rows($resultado_produtos);
    

    $pag_anterior  = $pagina - 1;
    $pag_posterior = $pagina + 1;

    $paginacao = [
      "pag_anterior" => $pag_anterior ,
      "pag_posterior" => $pag_posterior ,
      "num_pg" => $num_pg ,
      "pagina" => $pagina
    ];
       return view('produtos', $paginacao);
}


public function view()  //paginacao
    {
        $produtos = App::get('database')->selectAll("produtos");

        $tabela = [
            "produtos" => $produtos
        ];
       
        return view("produtos", $tabela);
    }



}