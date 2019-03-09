<?php

use Illuminate\Database\Seeder;

class CoutryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("coutries")->insert([
            [      
                "id"        => 1,                         
                "name"       => "Brasil",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "id"        => 2,    
                "name"       => "Japao",                
                "created_at" => $now,
                "updated_at" => $now,
            ],  
            [      
                "id"        => 3,                         
                "name"       => "Russia",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "id"        => 4,    
                "name"       => "Alemanha",                
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "id"        => 5,                         
                "name"       => "EUA",                
                "created_at" => $now,
                "updated_at" => $now,
            ]                
        ]);
    }
}
