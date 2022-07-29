<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    private $faker;

    public function __construct()
    {
        $this->faker = \Faker\Factory::create();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        for ($i = 0; $i < $amount; $i++) {
            $user = User::inRandomOrder()->first();
            $user->postedVouchers()->create([
                'code' => $this->faker->uuid()
            ]);
        }
    }
}
