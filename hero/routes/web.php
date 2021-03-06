<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BSController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;

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


Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('heroes', HeroController::class);

    Route::resource('item', ItemController::class);
    Route::resource('enemy', EnemyController::class);

    Route::get('bs', [BSController::class, 'index'])->name('admin.bs');
    
});