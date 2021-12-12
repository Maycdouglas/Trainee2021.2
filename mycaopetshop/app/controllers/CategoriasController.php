<?php

namespace App\Controllers;

use App\Core\App;

class CategoriasController
{

    public function view()
    {
       $categorias = App::get('database')->selectAll('categorias');
       $table = [
           "categorias" => $categorias
       ];
       

       return viewAdm('categorias', $table);
    }

    public function createCategoria(){
     $dados = [
      "nome" => $_POST['nome']
     ];
    
     App::get('database')->insertCategoria('categorias',$dados);
     header('Location:/categorias');

    }

   public function deleteCategoria(){
       $id = $_POST['id'];
       App::get('database')->deleteCategoria('categorias', $id);
       header('Location:/categorias');
   }

}
