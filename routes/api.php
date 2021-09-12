<?php

use App\Http\Api\ApiBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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



Route::post('register', [UserController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {
    /*AÑADE AQUI LAS RUTAS QUE QUIERAS PROTEGER CON JWT*/
    Route::post('login', [UserController::class, 'authenticate']);
    Route::get('listausuarios', [ApiBase::class, 'listaUsuarios']);
    Route::get('showuser/{id}', [ApiBase::class, 'showUser']);
});
