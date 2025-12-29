<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ClassSeeder::class,
            StudentSeeder::class,
            AssignmentSeeder::class,
            ResultSeeder::class,
        ]);
    }
}
