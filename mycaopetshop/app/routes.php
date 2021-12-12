<?php
use App\Core\Router;

$router = new Router();

$router->get("produtos", "ProdutosController@view");
$router->get("admin/produtos", "ProdutosController@viewAdmin");
$router->get("admin/produtos/result", "ProdutosController@pesquisaProdutos");
$router->post("admin/produtos/create", "ProdutosController@postProdutos");
$router->post("admin/produtos/update","ProdutosController@updateProdutos");
$router->post("admin/produtos/delete", "ProdutosController@deleteProdutos");
?>