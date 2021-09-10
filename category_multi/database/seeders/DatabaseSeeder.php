<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();
        for ($i = 1; $i <= 3; $i++) {
            $category = Category::create([
                'name' => $faker->words(2, true)
            ]);
            for ($j = 1; $j <= 3; $j++) {
                $child = $category->categories()->create([
                    'name' => $faker->words(3, true),
                ]);
                for ($q = 1; $q <= 3; $q++) {
                    $child2 = $child->categories()->create([
                        'name' => $faker->words(4, true),
                    ]);
                }
            }
        }
    }
}
