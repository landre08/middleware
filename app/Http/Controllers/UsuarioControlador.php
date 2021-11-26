<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class UsuarioControlador extends Controller
{

    public function __construct()
    {
        // $this->middleware(PrimeiroMiddleware::class);
        $this->middleware('primeiro');
    }

    public function index()
    {
        Log::debug('UsuarioControlador@index');
        echo '<h1>Lista de Usuário</h1>';
        echo "<ul>";
            echo "<li>Luciano</li>";
            echo "<li>Nathália</li>";
            echo "<li>Manueala</li>";
        echo "</ul>";
        //return '<h1>Lista de Usuário</h1>';
    }
}
