<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create default admin user
        Admin::firstOrCreate(
            ['email' => 'admin@edgemind.com'],
            [
                'name' => 'Edge Mind Admin',
                'password' => Hash::make('password'),
            ]
        );
    }
}
