<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("cities")->insert([
            [      
                "state_id"        => 1,                         
                "name"       => "São Paulo",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 2,    
                "name"       => "Brasília",                
                "created_at" => $now,
                "updated_at" => $now,
            ],  
            [      
                "state_id"        => 3,                         
                "name"       => "Bacabal",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 4,    
                "name"       => "Goiânia",                
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "state_id"        => 5,                         
                "name"       => "Manaus",                
                "created_at" => $now,
                "updated_at" => $now,
            ],   
            [      
                "state_id"        => 6,                         
                "name"       => "Camburiu",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 7,    
                "name"       => "Campo Grande",                
                "created_at" => $now,
                "updated_at" => $now,
            ],  
            [      
                "state_id"        => 8,                         
                "name"       => "São José",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 8,    
                "name"       => "Pirinopolis",                
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "state_id"        => 10,                         
                "name"       => "Guarulhos",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [      
                "state_id"        => 11,                         
                "name"       => "Paranoá",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 12,    
                "name"       => "Itapoã",                
                "created_at" => $now,
                "updated_at" => $now,
            ],  
            [      
                "state_id"        => 13,                         
                "name"       => "Ceilandia",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 14,    
                "name"       => "São Domingos",                
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "state_id"        => 15,                         
                "name"       => "Ilheus",                
                "created_at" => $now,
                "updated_at" => $now,
            ],[      
                "state_id"        => 16,                         
                "name"       => "Salvador",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 17,    
                "name"       => "Santo Antonio do Descoberto",                
                "created_at" => $now,
                "updated_at" => $now,
            ],  
            [      
                "state_id"        => 18,                         
                "name"       => "Aguas Lindas",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 19,    
                "name"       => "Alexania",                
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "state_id"        => 20,                         
                "name"       => "Abadiania",                
                "created_at" => $now,
                "updated_at" => $now,
            ],   
            [      
                "state_id"        => 21,                         
                "name"       => "Belo Horizonte",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 22,    
                "name"       => "Sobral",                
                "created_at" => $now,
                "updated_at" => $now,
            ],  
            [      
                "state_id"        => 23,                         
                "name"       => "Valparaiso",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 24,    
                "name"       => "Gama",                
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "state_id"        => 25,                         
                "name"       => "São Sebastião",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [      
                "state_id"        => 26,                         
                "name"       => "Café Sem Troco",                
                "created_at" => $now,
                "updated_at" => $now,
            ],
             [         
                "state_id"        => 27,    
                "name"       => "Planaltina",                
                "created_at" => $now,
                "updated_at" => $now,
            ]                              
        ]);
    }
}
