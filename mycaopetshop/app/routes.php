<?php
use App\Core\Router;

$router = new Router();

$router->get("produtos", "ProdutosController@view");
$router->get("admin/produtos", "ProdutosController@viewAdmin");
$router->post("admin/produtos/create", "ProdutosController@postProdutos");
$router->post("admin/produtos/update","ProdutosController@updateProdutos");
$router->post("admin/produtos/delete", "ProdutosController@deleteProdutos");
?>