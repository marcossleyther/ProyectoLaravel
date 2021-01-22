<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Models\Enemy;
use App\Models\Item;

use function GuzzleHttp\Promise\all;

class ApiController extends Controller
{
  public function index()
  {
    $res = [
      'status' => 'ok',
      "message" => "Master en Apis"
    ];
    return response()->json($res, 200);
  }

  public function getAllHeroes()
  {
    $heroes = Hero::all();
    $res = [
      'status' => 'ok',
      "message" => "Lista de Heroes",
      "data" => $heroes
    ];

    return response()->json($res, 200);
  }

  //***************  Para Retornar los Heroes */
  public function getHeroe($id)
  {
    $hero = Hero::find($id);

    if (isset($hero)) {
      $res = [
        'status' => 'ok',
        "message" => "Obtener Heroe ".$hero->name,
        "data" => $hero
      ];
    } else {
      $res = [
        'status' => 'error',
        "message" => "No se encontro heroe",
      ];
    }
    return response()->json($res, 200);
  }



  //***************  Para Retornar los Enemigos */
  public function getAllEnemies()
  {
    $enemies = Enemy::all();

    $res = [
      "status" => "ok",
      "message" => 'Lista de enemigos',
      "data" => $enemies
    ];
    return response()->json($res, 200);
  }

  public function getEnemie($id)
  {
    $enemi = Enemy::find($id);

    if (isset($enemi)) {
      $res = [
        'status' => 'ok',
        'message' => 'Obtener Enemigo '.$enemi->name,
        'data' => $enemi
      ];
    } else {
      $res = [
        'status' => 'error',
        'message' => 'No se encontro enemigo'
      ];
    }
    return response()->json($res, 200);
  }


    //***************  Para Retornar los Items */
  public function getAllItems()
  {
    $items = Item::all();

    $res = [
      'status' => 'ok',
      'message' => 'Lista de items',
      'data' => $items
    ];
    return response()->json($res, 200);
  }


  public function getItem($id)
  {
    $item = Item::find($id);

    if (isset($item)) {
      $res = [
        'status' => 'ok',
        'message' => 'Obtener Item '. $item->name,
        'data' => $item
      ];
    } else {
      $res = [
        'status' => 'ok',
        'message' => 'No se encontro item'
      ];
    }
    return response()->json($res, 200);
  }
}
