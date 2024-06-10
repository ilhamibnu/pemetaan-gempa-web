<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gempa;
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

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        Gempa::create([
            'nama' => 'yeyeye',
            'tanggal' => date('Y-m-d'),
            'latitude' => '-7.262443835171927',
            'longitude' => '112.73572972100665',
            'radius' => '50km',
        ]);

        Gempa::create([
            'nama' => 'yeyeye',
            'tanggal' => date('Y-m-d'),
            'latitude' => '-7.838770720284906',
            'longitude' => '113.22844163170087',
            'radius' => '50km',
        ]);

        Gempa::create([
            'nama' => 'yeyeye',
            'tanggal' => date('Y-m-d'),
            'latitude' => '-8.190854561220494',
            'longitude' => '113.71184234820917',
            'radius' => '50km',
        ]);

        Gempa::create([
            'nama' => 'yeyeye',
            'tanggal' => date('Y-m-d'),
            'latitude' => '-7.178687696017661',
            'longitude' => '107.70486473980309',
            'radius' => '50km',
        ]);
    }
}
