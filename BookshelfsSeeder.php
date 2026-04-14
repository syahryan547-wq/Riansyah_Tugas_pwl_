<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
            [
                'code' => 'R001',
                'name' => 'Rak 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'R002',
                'name' => 'Rak 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
