<?php
use App\Core\Router;

$router = new Router();

$router->get("produtos", "ProdutosController@view");
$router->get("admin/produtos", "ProdutosController@viewAdmin");
$router->post("admin/create", "ProdutosController@postProdutos");
?>