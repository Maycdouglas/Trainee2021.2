<?php
use App\Core\Router;

$router = new Router();

$router->get("produtos", "ProdutosController@view");
?>