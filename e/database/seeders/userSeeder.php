<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password'=>  Hash::make('admin@gmail.com'),
        ]);
    }
}
