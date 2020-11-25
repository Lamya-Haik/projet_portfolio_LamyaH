<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("facts")->insert([
            "chiffre" => 3058,
            "chiffre" => "Nombre de client",
            "text" => "bla bla bla",
        ]);
    

     
        DB::table("facts")->insert([
            "chiffre" => 3058,
            "chiffre" => "Nombre de client",
            "text" => "bla bla bla",
        ]);
    
      
    
        DB::table("facts")->insert([
            "chiffre" => 3058,
            "chiffre" => "Nombre de client",
            "text" => "bla bla bla",
        ]);
    }
}
