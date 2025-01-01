<?php

namespace Database\Factories\AiWork;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AiWork\Piece>
 */
class PieceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => Str::slug(fake()->name()),
            'image' => $this->image(),
            'thumbnail' => $this->image(),
            'description' => fake()->paragraph(),
            'process' => $this->process(),
        ];
    }

    private function process(): array
    {
        $process = [];
        $int = rand(2, 4);
        for($i = 0; $i < $int; $i++) {
            $process[] = [
                'caption' => fake()->name(),
                'description' => fake()->paragraph(2),
                'images' => $this->images()
            ];
        }
        return $process;
    }

    private function images(): array
    {
        $images = [];
        $int = rand(2, 4);
        for($i = 0; $i < $int; $i++) {
            $process[] = $this->image();
        }
        return $images;
    }

    private function image(): string
    {
        return 'aiwork/test.jpg';
    }
}
