<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function() {
    return view('avisos', ['nome' => 'Leonardo', 'mostrar' => true, 'avisos' => [['id' => 1, 'aviso' => 'Leticia perdeu sua blusa onde?'], 
                                                                                ['id' => 2, 'aviso' => 'Metrô ou Senac?'], 
                                                                                ['id' => 3, 'aviso' => 'Ou isso tudo é da cabeça dela e ela nunca veio com ela para o Senac.. ou Sequer tem essa Blusa']]]);
});

Route::get('/paises', function() {
    return view('paises', ['paises' =>                                          [['id' => 1, 'pais' => 'Coreia do Norte'], 
                                                                                ['id' => 2, 'pais' => 'Russia'], 
                                                                                ['id' => 3, 'pais' => 'China']]]);
});
