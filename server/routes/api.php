<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\User;
use Illuminate\Support\Facades\Route;

Route::post('/login', 'UsuarioController@login');
Route::post('/cadastro', 'UsuarioController@cadastro');
Route::middleware('auth:api')->get('/usuario', 'UsuarioController@usuario');
Route::middleware('auth:api')->put('/perfil', 'UsuarioController@perfil');

Route::get('/testes', function () {
    $user = User::find(1);
    /*
    $user->conteudos()->create([
        'titulo' => 'Conteúdo 3',
        'texto'  => 'Aqui o texto',
        'imagem' => 'url da imagem',
        'link'   => 'Link',
        'data'   => '2018-05-10',
    ]);

    return $user->conteudos;
    */
});
