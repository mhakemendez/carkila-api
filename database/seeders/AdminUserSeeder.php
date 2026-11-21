<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@carkila.com'],
            [
                'name' => 'Carkila Admin',
                'password' => 'ChangeThisPassword123!',
                'role' => 'admin',
            ]
        );
    }
}