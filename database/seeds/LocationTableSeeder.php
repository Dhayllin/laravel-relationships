<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("locations")->insert([
            [      
                "coutry_id"  => 1,                         
                "latitude"   => 10, 
                "longitude"  =>10,                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "coutry_id"  => 2,    
                "latitude"   => 100, 
                "longitude"  =>100,                 
                "created_at" => $now,
                "updated_at" => $now,
            ],  
            [      
                "coutry_id"  => 3,                         
                "latitude"   => 40, 
                "longitude"  =>40,                 
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "coutry_id"  => 4,    
                "latitude"   => 20, 
                "longitude"  =>20,             
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "coutry_id"  => 5,                         
                "latitude"   => 50, 
                "longitude"  =>50,                 
                "created_at" => $now,
                "updated_at" => $now,
            ]                
        ]);
    }
}
