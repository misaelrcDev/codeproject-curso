<?php

namespace Database\Factories\Entities;

use CodeProject\Entities\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\CodeProject\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;
        /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner_id' => rand(1,10),
            'client_id' => rand(1,10),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'progress' => rand(1, 100),
            'status' => rand(1, 3),
            'due_date' => $this->faker->dateTime('now')
        ];
    }
}
