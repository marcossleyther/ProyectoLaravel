<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Hero;
use PhpParser\Node\Expr\FuncCall;

class HeroController extends Controller
{
    //
    public function index()
    {
        $heroes = Hero::all();
        return view('admin.heroes.index', ['heroes' => $heroes]);
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        return $this->saveHero($request, null);
    }


    public function update(Request $request, $id){
       
        return $this->saveHero($request, $id);
    }


    public function saveHero(Request $request, $id){
        
        if ($id) {
            $hero = Hero::find($id);   
                  
        } else{
            $hero = new Hero();

            $hero->xp = 0;
            $hero->level_id = 1;
        }

        $hero->name = $request->input('name');
        $hero->hp = $request->input('hp');
        $hero->atq = $request->input('atq');
        $hero->def = $request->input('def');
        $hero->luck = $request->input('luck');
        $hero->coins = $request->input('coins');
    

        $hero->save();
        
        return redirect()->route('admin.heroes');
    }


    public function edit($id)
    {
        $hero = Hero::find($id);
        return view('admin.heroes.edit', ['hero' => $hero]);
    }
}
