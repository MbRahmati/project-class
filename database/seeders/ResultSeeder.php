<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('results')->insert([
            // Ali -> avg = (90 + 80) / 2 = 85 => qualifies
            ['student_id' => 1, 'assignment_id' => 1, 'score' => 90, 'created_at' => now(), 'updated_at' => now()],
            ['student_id' => 1, 'assignment_id' => 2, 'score' => 80, 'created_at' => now(), 'updated_at' => now()],

            // Sara -> avg = (60 + 70) / 2 = 65 => not qualify
            ['student_id' => 2, 'assignment_id' => 1, 'score' => 60, 'created_at' => now(), 'updated_at' => now()],
            ['student_id' => 2, 'assignment_id' => 3, 'score' => 70, 'created_at' => now(), 'updated_at' => now()],

            // Reza -> only 1 result => not qualify
            ['student_id' => 3, 'assignment_id' => 2, 'score' => 95, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
