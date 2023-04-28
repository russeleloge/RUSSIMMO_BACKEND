<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Configuration>
 */
class ConfigurationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code_config' => $this->faker->password(),
            'bien_id' => array_rand([1=>2,2=>2,3=>2,4=>2,5=>2,6=>2],1),
            'user_id' => array_rand([1=>2,2=>2,3=>3,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,11=>11],1),
            'type_configuration_id' => array_rand([1=>2,2=>2,3=>2,4=>2,5=>2,6=>2],1),
            //'localisation' => $this->faker->streetAddress(),
            'num_porte' => array_rand(["101"=>"12","102"=>"12","103"=>"12","104"=>"12","105"=>"12","106"=>"12","201"=>"12","202"=>"12","203"=>"12","204"=>"12","205"=>"12","206"=>"12","301"=>"12","302"=>"12","103"=>"12","303"=>"12","304"=>"12","305"=>"12","306"=>"12","401"=>"12","402"=>"12","403"=>"12","404"=>"12","405"=>"12"],1),
            //'note_etat' => $this->faker->password(),
            'prix_mensuel' => array_rand([50000=>2,66000=>2,75000=>2,90000=>2,120000=>2,150000=>2],1),
            'code_agence' => array_rand(["43Kdl"=>"2","hY748"=>"2","8gfj8"=>"2"],1),
        ];
    }
}
