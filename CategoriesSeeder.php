<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Teknologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Novel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pendidikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
