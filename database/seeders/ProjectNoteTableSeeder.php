<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use CodeProject\Entities\Project;

class ProjectNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \CodeProject\Entities\ProjectNote::factory(50)->create();
    }
}
