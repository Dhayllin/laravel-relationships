<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coutry;
use App\Models\State;

class OneToManyController extends Controller
{
    public function oneToMany(){

       /*  $coutry = Coutry::where('name','Brasil')->get()->first(); */

       $keySeach = 'a';
       $coutries = Coutry::where('name', 'like', 'T%')->get();


        //  $name_pais=  $coutry->name;

        /* $states = $coutry->states()->where('initials','DF')->get(); */

      //  $states = $coutry->states;

        return compact('coutries');
    }
}
