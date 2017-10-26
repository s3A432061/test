<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    //
 public function getIndex(){
     return "排行榜";
 }
    public function getName(){
     return Route::currentRouteAcrion();
    }

}

