<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("agences")->insert([
            ["code_agence"=>"43Kdl","nom"=>"RUSSEL","telephone"=>"+237 678045635","ville"=>"Douala","quartier"=>"Aéroport","pays"=>"Cameroun","nbre_etages"=>4,"rue"=>"2394"],
            ["code_agence"=>"hY748","nom"=>"TENZA","telephone"=>"+237 678042335","ville"=>"Yaoundé","quartier"=>"Paulin","pays"=>"Cameroun","nbre_etages"=>5,"rue"=>"2344"],
            ["code_agence"=>"8gfj8","nom"=>"LITRICO","telephone"=>"+237 670145635","ville"=>"Douala","quartier"=>"Roosvelt","pays"=>"Cameroun","nbre_etages"=>5,"rue"=>"3092"],

        ]);
    }
}
