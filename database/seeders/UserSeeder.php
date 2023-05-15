<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // super admin
        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'surname' => 'Test',
            'email' => 'enes.eknc.96@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        // admin
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'surname' => 'Test',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        // editor
        \App\Models\User::factory()->create([
            'name' => 'Editor',
            'surname' => 'Test',
            'email' => 'editor@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        // user
        \App\Models\User::factory()->create([
            'name' => 'User',
            'surname' => 'Test',
            'email' => 'user@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
    }
}
