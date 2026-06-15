<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Syarikat Test ABC',
            'login_id' => '731215055543',
            'role' => 'syarikat',
            'password' => bcrypt('kastam'),
        ]);

        User::create([
            'name' => 'Pegawai JKDM',
            'login_id' => '731215055543',
            'role' => 'jkdm',
            'password' => bcrypt('kastam'),
        ]);
    }
}
