<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Voucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryVoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loops = 10;
        for ($i = 0; $i < $loops; $i++) {
            $voucher = Voucher::inRandomOrder()->first();
            $category = Category::inRandomOrder()->first();

            $voucher->categories()->attach($category);
        }
    }
}
