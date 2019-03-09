<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("states")->insert([
            [   
                "coutry_id"  => 1,        
                "name"       => "São Paulo",
                "initials"   => "SP",
                "created_at" => $now,
                "updated_at" => $now,
            ] ,
             [   
                "coutry_id"  => 1,             
                "name"       => "Acre",
                "initials"   => "AC",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [    
                "coutry_id"  => 2,             
                "name"       => "Alagoas",
                "initials"   => "AL",
                "created_at" => $now,
                "updated_at" => $now,
            ], [ 
                "coutry_id"  => 2,               
                "name"       => "Amapá",
                "initials"   => "AP",
                "created_at" => $now,
                "updated_at" => $now,
            ], [   
                "coutry_id"  => 1,              
                "name"       => "Amazonas",
                "initials"   => "AM",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [   
                "coutry_id" => 2,         
                "name"       => "Bahia",
                "initials"       => "BA",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [          
                "coutry_id" => 3,     
                "name"       => "Ceará",
                "initials"       => "CE",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [       
                "coutry_id" => 1,         
                "name"       => "Distrito Federal",
                "initials"       => "DF",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [               
                "coutry_id" => 1, 
                "name"       => "Espírito Santo",
                "initials"       => "ES",
                "created_at" => $now,
                "updated_at" => $now,
            ],

            [      
                "coutry_id" => 3,           
                "name"       => "Goiás",
                "initials"       => "GO",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [      
                "coutry_id" => 1,          
                "name"       => "Maranhão",
                "initials"       => "MA",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "coutry_id" => 3,           
                "name"       => "Mato Grosso",
                "initials"       => "MT",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [              
                "coutry_id" => 3,  
                "name"       => "Mato Grosso do Sul",
                "initials"       => "MS",
                "created_at" => $now,
                "updated_at" => $now,
            ],[       
                "coutry_id" => 2,         
                "name"       => "Minas Gerais",
                "initials"       => "MG",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [      
                "coutry_id" => 3,          
                "name"       => "Pará",
                "initials"       => "PA",
                "created_at" => $now,
                "updated_at" => $now,
            ],[     
                "coutry_id" => 2,           
                "name"       => "Paraíba",
                "initials"       => "PB",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [          
                "coutry_id" => 3,     
                "name"       => "Paraná",
                "initials"       => "PR",
                "created_at" => $now,
                "updated_at" => $now,
            ], [   
                "coutry_id" => 2,             
                "name"       => "Pernambuco",
                "initials"       => "PE",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [               
                "coutry_id" => 4, 
                "name"       => "Piauí",
                "initials"       => "PI",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [      
                "coutry_id" => 4,          
                "name"       => "Rio de Janeiro",
                "initials"       => "RJ",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [      
                "coutry_id" => 4,          
                "name"       => "Rio Grande do Norte",
                "initials"       => "RN",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [    
                "coutry_id" => 4,            
                "name"       => "Rio Grande do Sul",
                "initials"       => "RS",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [     
                "coutry_id" => 4,            
                "name"       => "Rondônia",
                "initials"       => "RO",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [        
                "coutry_id" => 5,        
                "name"       => "Roraima",
                "initials"       => "RR",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [     
                "coutry_id" => 5,            
                "name"       => "Santa Catarina",
                "initials"       => "SC",
                "created_at" => $now,
                "updated_at" => $now,
            ],          
             [    
                "coutry_id" => 5,            
                "name"       => "Sergipe",
                "initials"       => "SE",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [  
                "coutry_id" => 4,               
                "name"       => "Tocantins",
                "initials"       => "TO",
                "created_at" => $now,
                "updated_at" => $now,
            ],  
        ]);
    }
}
