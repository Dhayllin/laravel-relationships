<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coutry;
use App\Models\Location;



class OneToOneController extends Controller
{
    public function oneToOne(){

        $coutry = Coutry::where('name','China')->get()->first();

        echo   $coutry->name;
       
        $location = $coutry->location;

        echo "<br>Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<br>";
    }

    public function oneToOneInverse(){
        $latitude =123 ;
        $longitude = 312;

        $location = Location::where('latitude',$latitude)->where('longitude',$longitude)->get()->first();
                               
        $coutry = $location->coutry;

        return compact('coutry');
       
    }
}
