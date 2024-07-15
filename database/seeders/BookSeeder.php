<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {

            DB::table('books')->insert([
                'title' => $faker->text(25),
                'thumbnail' => 'https://gcs.tripi.vn/public-tripi/tripi-feed/img/474111qZy/logo-fpt-polytechnic_043151471.png',
                'author' => $faker->text(10),
                'publisher' => $faker->text(15),
                'publication' => $faker->date(),
                'price' => rand(1, 1000),
                'quantity' => rand(1, 1000),
                'cate_id' => rand(1, 5)
            ]);
        }
    }
}
