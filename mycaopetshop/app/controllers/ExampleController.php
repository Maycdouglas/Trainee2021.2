<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ExampleController
{
    public function viewLogin()
    {
        return view('login'); 
    }
    
    public function viewHome()
    {
        $descProdutos = App::get('database')->selectDescProdutos('produtos', 'categorias');

        $categoriaProduto = array();
        foreach ($descProdutos["categorias"] as $categoria)
        {
            $categoriaProduto += [
                "{$categoria->id}" => $categoria->nome
            ];
        }

        $tabela = [
            "produtos" => $descProdutos["produtos"],
            "categorias" => $descProdutos["categorias"],
            "categoriaProduto" => $categoriaProduto
        ];

        return view('home', $tabela);
    }

    public function viewDashboard()
    {
        $usuario = App::get('database')->selectAll('usuarios');

        return viewAdm('dashboard', compact('usuario'));
    }

    public function redirectHome()
    {
        return redirect('home'); 
    }

    public function viewQuemSomos()
    {
        return view('quemsomos'); 
    }
}
