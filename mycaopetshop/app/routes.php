<?php

//rotas usuario
$router->get('usuarios', 'UsuariosController@view');

$router->post('usuarios/create', 'UsuariosController@create');

$router->post('usuarios/delete', 'UsuariosController@delete');

$router->post('usuarios/update', 'UsuariosController@update');
//--------------------------------------------------------------------



$router->get('login', 'LoginController@viewLogin');

$router->post('logar', 'LoginController@login');

$router->post('logout', 'LoginController@logout');

$router->get('home', 'ExampleController@viewHome');

$router->get('dashboard', 'ExampleController@viewDashboard');

//rotas produtos

$router->get("produtos", "ProdutosController@paginacao");
$router->get("admin/produtos", "ProdutosController@viewAdmin");

$router->get("admin/produtos/result", "ProdutosController@pesquisaProdutos");

$router->post("admin/produtos/create", "ProdutosController@postProdutos");

$router->post("admin/produtos/update","ProdutosController@updateProdutos");

$router->post("admin/produtos/delete", "ProdutosController@deleteProdutos");

// rotas categorias

$router->get("categorias", "CategoriasController@view");
$router->get("categorias/result", "CategoriasController@pesquisaCategorias");
$router->post("categorias/create", "CategoriasController@createCategoria");

$router->post("categorias/delete", "CategoriasController@delete");

$router->post("categorias/edit", "CategoriasController@editCategoria");
//---------------------------------------------------------------------------



//rotas contato
$router->get("contato", "ContatoController@viewContato");

$router->post("contato/enviar", "ContatoController@Contato");
//---------------------------------------------------------------------------



//rotas quemsomos
$router->get("quemsomos", "ExampleController@viewQuemSomos");

//Rotas do produto

$router->get("produto", "ProdutosController@produto");


?>