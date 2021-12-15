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

   public function delete(){
       $id = $_POST['id'];
       App::get('database')->delete('categorias', $id);
       header('Location:/categorias');
   }

   public function editCategoria(){
      $dados = [
      "nome" => $_POST['nome']
      ];
     $id = $_POST['id'];
     App::get('database')->updateCategoria('categorias', $id, $dados);
     header('Location:/categorias');
   
    }

}
