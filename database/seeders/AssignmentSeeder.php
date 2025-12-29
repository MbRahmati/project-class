<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('assignments')->insert([
            ['assignment_name' => 'Math Homework 1', 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['assignment_name' => 'Math Quiz 1', 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['assignment_name' => 'Physics Homework 1', 'class_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
