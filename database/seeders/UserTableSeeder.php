<?php

namespace Database\Seeders;

use CodeProject\Entities\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \CodeProject\Entities\Project::truncate();
        \CodeProject\Entities\User::factory(10)->create();
    }
}
