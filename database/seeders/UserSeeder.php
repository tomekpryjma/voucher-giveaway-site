<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mainUser = User::where('email', 'user@example.com')->first();
        if (!$mainUser) {
            User::create([
                'email' => 'user@example.com',
                'name' => 'User',
                'password' => bcrypt('secret'),
            ]);
        }

        User::factory(10)->create();
    }
}
