<?php

namespace Database\Factories;

use CodeProject\Entities\ProjectNote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\CodeProject\ProjectNote>
 */
class ProjectNoteFactory extends Factory
{

    protected $model = ProjectNote::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => rand(1, 10),
            'title' => $this->faker->word,
            'note' => $this->faker->paragraph,
        ];
    }
}
