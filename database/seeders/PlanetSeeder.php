<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('planets')->insert([
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
                'size_in_km' => 6779,
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
                'size_in_km' => 12104,
            ],
            [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that is inhabited by living things.',
                'size_in_km' => 12742,
            ],
            [
                'name' => 'Jupiter',
                'description' => 'Jupiter is the fifth planet from the Sun and the largest in the Solar System.',
                'size_in_km' => 139820,
            ],
        ]);
    }
} 