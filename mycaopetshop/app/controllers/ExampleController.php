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
        return view('home'); 
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
}
