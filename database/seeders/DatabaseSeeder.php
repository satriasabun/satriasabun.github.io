<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Product::factory(20)->create();
        // Category::factory(3)->create();
        Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming'
            ]);

            Category::create([
                'name' => 'Web Design',
                'slug' => 'web-design'
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]);
    }
}
