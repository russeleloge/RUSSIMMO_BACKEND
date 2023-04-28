<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("type_configurations")->insert([
            ["code"=>"43Kdl*fh3j/llGdk","libelle"=>"Appartement"],
            ["code"=>"jkfKL@Sj#K4j(%0","libelle"=>"Chambre"],
            ["code"=>"Md2kD3fKLO#0jWd","libelle"=>"Studio"],
            ["code"=>"k@HjS9$8Sjf-n8*","libelle"=>"Appartement meublé"],
            ["code"=>"l@lJ3S(k-fIjj3dI","libelle"=>"Chambre meublé"],
            ["code"=>"Kj2#do)Pea3P&nd1DS","libelle"=>"Studio meublé"],
        ]);
    }
}
