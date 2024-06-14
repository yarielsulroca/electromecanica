<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use App\Models\Workorder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();
        
        User::factory()->create([
           'name' => 'Test User',
           'email' => 'test@test.com',
           'password' => Hash::make('1234qwer'),
       ]);

        Client::factory(100)->create();
        
        Workorder::factory(400)->create();
    }
}
