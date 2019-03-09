<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coutry;
use App\Models\Location;



class OneToOneController extends Controller
{
    public function oneToOne(){

        $coutry = Coutry::where('name','EUA')->get()->first();

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

    public function oneToOneInsert(){
        
        $dataForm = [
            'name'      => 'Reino Unido',
            'latitude'  => 0,
            'longitude' => 0,
        ];

        $coutry = Coutry::create($dataForm);
        
    
        /* MODO 1 
        
        $location =new  Location;
        $location->latitude = $dataForm['latitude'];
        $location->longitude = $dataForm['longitude'];
        $location->coutry_id = $coutry->id;
        $saveLocation = $location->save(); */

        /* MODO 2 */

        $location = $coutry->location()->create($dataForm);
        
        dd($location);        
    }
}
