<?php

//rotas usuario
$router->get('usuarios', 'UsuariosController@view');

$router->post('usuarios/create', 'UsuariosController@create');

$router->post('usuarios/delete', 'UsuariosController@delete');

$router->post('usuarios/update', 'UsuariosController@update');
//--------------------------------------------------------------------



//rotas login
$router->get('login', 'ExampleController@viewLogin');

$router->get('home', 'ExampleController@viewHome');

$router->get('dashboard', 'ExampleController@viewDashboard');


$router->get("usuarios", "UsuariosController@view");

$router->post("usuarios/create", "UsuariosController@create");

$router->post("usuarios/delete", "UsuariosController@delete");

$router->post("usuarios/update", "UsuariosController@update");
//------------------------------------------------------------------



//rotas produtos
$router->get("produtos", "ProdutosController@view");

$router->get("admin/produtos", "ProdutosController@viewAdmin");

$router->get("admin/produtos/result", "ProdutosController@pesquisaProdutos");

$router->post("admin/produtos/create", "ProdutosController@postProdutos");

$router->post("admin/produtos/update","ProdutosController@updateProdutos");

$router->post("admin/produtos/delete", "ProdutosController@deleteProdutos");

$router->get("categorias", "CategoriasController@view");

$router->post("categorias/create", "CategoriasController@createCategoria");

$router->post("categorias/delete", "CategoriasController@delete");

$router->post("categorias/edit", "CategoriasController@editCategoria");
//---------------------------------------------------------------------------



//rotas contato
$router->get("contato", "ContatoController@viewContato");

$router->post("contato/enviar", "ContatoController@Contato");

?>