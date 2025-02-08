<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id' => 'A001',
            'first_name' => 'admin',
            'last_name' => 'BNCC',
            'email' => 'adminBNCC@gmail.com',
            'password' => Hash::make('Admin123'), 
            'bio' => 'Hi my name is Admin, and I like backend development.',
        ]);
    }
}
