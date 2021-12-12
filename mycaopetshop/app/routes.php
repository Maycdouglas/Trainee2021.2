<?php
use App\Core\Router;

$router = new Router();

$router->get("produtos", "ProdutosController@view");

$router->get("categorias", "CategoriasController@view");
$router->post("categorias/create", "CategoriasController@createCategoria");
$router->post("categorias/delete", "CategoriasController@deleteCategoria");

?>