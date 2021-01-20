<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $res = [
          'status' => 'ok',
          "message" => "Master en Apis"  
        ];
        return response()->json($res, 200);
    }
}
