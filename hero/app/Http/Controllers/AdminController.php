<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enemy;
use App\Models\Hero;
use App\Models\Item;

class AdminController extends Controller
{
    public function index(){

        $heroCounter = Hero::count();
        $itemCounter = Item::count();
        $enemyCounter = Enemy::count();

        $report = [
            ['name'=>'Heroes', 'counter' => $heroCounter, 'route'=>'heroes.index', 'class'=>'btn-success'],
            ['name'=>'Items', 'counter' => $itemCounter, 'route'=>'item.index', 'class'=>'btn-warning'],
            ['name'=>'Enemies', 'counter' => $enemyCounter, 'route'=>'enemy.index', 'class'=>'btn-danger']
        ];

        return view('admin.index', ['report'=> $report]);
    }
}
