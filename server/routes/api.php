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

use App\Conteudo;
use App\User;
use Illuminate\Support\Facades\Route;

Route::post('/login', 'UsuarioController@login');
Route::post('/cadastro', 'UsuarioController@cadastro');
Route::middleware('auth:api')->get('/usuario', 'UsuarioController@usuario');
Route::middleware('auth:api')->put('/perfil', 'UsuarioController@perfil');

Route::get('/testes', function () {
    $user = User::find(1);
    $user2 = User::find(2);
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

    // Add Amigos
    //$user->amigos()->attach($user2->id);

    // Remove Amigos
    //$user->amigos()->detach($user2->id);

    // Se nao tiver adicionado/removido Amigo
    //$user->amigos()->toggle($user2->id);

    // Add Curtidas
    // $conteudo = Conteudo::find(1);
    // $user->curtidas()->toggle($conteudo->id);
    // return $conteudo->curtidas()->count();
    // return $conteudo->curtidas;

    // Add comentário
    // $conteudo = Conteudo::find(1);
    // $user->comentarios()->create([
    //   'conteudo_id' => $conteudo->id,
    //   'texto'       => 'Show de bola',
    //   'data'        => date('Y-m-d'),
    // ]);
    //
    // $user2->comentarios()->create([
    //    'conteudo_id' => $conteudo->id,
    //    'texto'       => 'Não gostei',
    //    'data'        => date('Y-m-d'),
    //  ]);
    // return $conteudo->comentarios;

});
