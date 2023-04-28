<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'sexe' => array_rand(["H"=>"12","F"=>"34"],1),
            'code_user' => $this->faker->password(),
            'email' => $this->faker->unique()->safeEmail(),
            'date_naissance' => $this->faker->date($format = 'd-m-Y', $max = '10-12-2003'),
            'nationalite' => $this->faker->country,
            'lieu_naissance' => $this->faker->city,
            'telephone1' => $this->faker->unique()->phoneNumber,
            'telephone2' => $this->faker->unique()->phoneNumber,
            // 'email_verified_at' => now(),

            // 'remember_token' => Str::random(10),
            'pieceIdentite' => array_rand(["CNI"=>"23","PASSPORT"=>"12","PERMIS DE CONDUIRE"=>"37"]),
            'numeroPieceIdentite' => $this->faker->unique()->bankAccountNumber,
            // 'photo'=>$this->faker->imageUrl(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
