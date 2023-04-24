<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'users_id' =>User::findOrFail(1),
            'company' => fake()->company(),
            'vat' => Str::random(10),
            'address' =>fake()->address(),
            'remember_token' => Str::random(10),
        ];
    }

}
