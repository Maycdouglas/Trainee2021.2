<?php

$router->get('usuarios', 'UsuariosController@view');

$router->post('usuarios/create', 'UsuariosController@create');

$router->post('usuarios/delete', 'UsuariosController@delete');

$router->post('usuarios/update', 'UsuariosController@update');

$router->get('login', 'ExampleController@viewLogin');

$router->get('home', 'ExampleController@viewHome');

?>