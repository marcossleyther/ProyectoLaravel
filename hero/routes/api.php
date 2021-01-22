<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Endpoint de testeo
Route::get('/', [ApiController::class, 'index']);

//Endpoint de Heroes
Route::get('heroes', [ApiController::class, 'getAllHeroes']);
Route::get('heroes/{id}', [ApiController::class, 'getHeroe']);

// Endpoint de Enemigos
Route::get('enemies', [ApiController::class, 'getAllEnemies']);
Route::get('enemies/{id}', [ApiController::class, 'getEnemie']);

// Endpoint de Items
Route::get('items', [ApiController::class, 'getAllItems']);
Route::get('items/{id}', [ApiController::class, 'getItem']);
