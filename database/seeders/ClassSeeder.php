<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('classes')->insert([
            ['class_name' => 'Math', 'created_at' => now(), 'updated_at' => now()],
            ['class_name' => 'Physics', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
