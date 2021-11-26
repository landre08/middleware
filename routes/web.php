<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Middleware\PrimeiroMiddleware;

// Aqui to fazendo com que a rota só chegue ao index
// Se passar pelo middleware.
// Lá tem o next que chama o próximo middlware ou chega até o index
// Posso brecar essa passagem de chamada de um middlware para o outro usando um responde('texto');
// Em App\Kernel eu encontro todos os middleware registrados e lá posso da um nome para o meu middlware.
// Lá tem 4 grupos de middlware o primeiro é chamado para todas as requisições da aplicação
// Segundo é pra grupo de web ou api
// Terceiro é para middlware individuais da aplicação
// Route::get('/usuarios', 'UsuarioControlador@index')->middleware(PrimeiroMiddleware::class);

// Usando o apelido
//Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro');


// Posso add middlware do ponto de vista do construtor e nao do web(rota)
// para isso basta colocar no __construct e retirar do web
// Route::get('/usuarios', 'UsuarioControlador@index');

// Posso o kernel e no group web colocar a rota la
// Com isso aqui nao preciso indicar o middlware, pois o web
// e aplicado a todas as rotas que estao aqui
// Observar que a ordem la influencia, pois é executado na ordem
// que está lá
//Route::get('/usuarios', 'UsuarioControlador@index');

// Trabalhando com dois middleware
// A ordem la no kernel no web vai ditar quem é exibido primeiro no log
//Route::get('/usuarios', 'UsuarioControlador@index');

// Aqui tbm, posso colocar a ordem explicitamente
//Route::get('/usuarios', 'UsuarioControlador@index')
//->middleware('segundo', 'primeiro');

//Passando parâmetro para o middlware
Route::get('/terceiro', function() {
    return 'Passou pelo terceiro middleware';
})->middleware('terceiro:Luciano,37');




