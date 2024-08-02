<?php

namespace Database\Seeders;

use App\Models\AiWorks\Piece;
use App\Models\AiWorks\Theme;
use Illuminate\Database\Seeder;

class AiWorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $themes = Theme::factory()
            ->count(20)
            ->create();

        foreach($themes as $theme) {
            Piece::factory()
                ->count(rand(1,6))
                ->state([
                    'theme_id' => $theme->id,
                ])
                ->create();
        }

    }
}
