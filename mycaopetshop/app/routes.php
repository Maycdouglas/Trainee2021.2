<?php

$router->get('usuarios', 'UsuariosController@view');

$router->post('usuarios/create', 'UsuariosController@create');

$router->post('usuarios/delete', 'UsuariosController@delete');

$router->post('usuarios/update', 'UsuariosController@update');
?>