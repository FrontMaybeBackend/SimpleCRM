<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            'users_id' =>User::findOrFail(1),
            'company' => fake()->company(),
            'vat' => Str::random(10),
            'address' =>fake()->address(),
        ]);

        \App\Models\Client::factory(10)->create();
    }
}
