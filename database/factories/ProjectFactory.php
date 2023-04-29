<?php

namespace Database\Factories;

use App\Models\Client;
use  App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**

 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $client = Client::inRandomOrder()->first();
        if (!$user) {
            $user = User::factory()->create();
        }

        if (!$client) {
            $client = Client::factory()->create();
        }


        return [
            'title' => fake()->sentence(),
            'description' => fake()->title(),
            'deadline' => fake()->date(),
            'assigned_user' => $user->name,
            'assigned_client' => $client->company,
        ];
    }
}
