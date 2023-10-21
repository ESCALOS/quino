<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Carlos',
            'email' => 'stornblood6969@gmail.com',
            'password' => bcrypt('123456')
        ]);

        for($i = 1; $i <= 16; $i++) {
            Table::factory()->create([
                'number' => $i
            ]);
        }
    }
}
