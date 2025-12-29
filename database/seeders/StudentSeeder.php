<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            ['name' => 'Ali Rezaei', 'age' => 20, 'email' => 'ali@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sara Ahmadi', 'age' => 21, 'email' => 'sara@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reza Karimi', 'age' => 22, 'email' => 'reza@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
