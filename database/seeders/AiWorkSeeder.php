<?php

namespace Database\Seeders;

use App\Models\AiWork\Piece;
use App\Models\AiWork\Theme;
use Illuminate\Database\Seeder;

class AiWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $themes = Theme::factory()
            ->count(6)
            ->create();

        $pieces = Piece::factory()
            ->count(rand(1,6))
            ->create();
        
        foreach($pieces as $piece) {
            $piece->themes()->attach($themes->random(rand(0,3)));
        }

    }
}
