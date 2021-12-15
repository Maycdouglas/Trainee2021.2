<?php
//rotas usuario
$router->get('usuarios', 'UsuariosController@view');

$router->post('usuarios/create', 'UsuariosController@create');

$router->post('usuarios/delete', 'UsuariosController@delete');

$router->post('usuarios/update', 'UsuariosController@update');

//rotas login

$router->get('login', 'ExampleController@viewLogin');

$router->get('home', 'ExampleController@viewHome');

$router->get('dashboard', 'ExampleController@viewDashboard');


$router->get("usuarios", "UsuariosController@view");

$router->post("usuarios/create", "UsuariosController@create");

$router->post("usuarios/delete", "UsuariosController@delete");

$router->post("usuarios/update", "UsuariosController@update");


?>