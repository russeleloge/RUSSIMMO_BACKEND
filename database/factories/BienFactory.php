<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'agence_id' => array_rand([1=>2,2=>2,3=>3],1),
            'user_id' => array_rand([1=>2,2=>2,3=>3,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,11=>11],1),
            'nbre_etages' => array_rand([4=>2,6=>2,6=>2],1),
            'superficie' => array_rand(["120"=>"2","90"=>"2","200"=>"2"],1),
            'quartier' => $this->faker->streetName(),
            'ville' => $this->faker->city(),
            'nom' => $this->faker->streetName(),
            'pays' => $this->faker->country(),
            'code_agence' => array_rand(["43Kdl"=>"2","hY748"=>"2","8gfj8"=>"2"],1),
        ];
    }
}
