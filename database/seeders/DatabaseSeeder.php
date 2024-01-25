<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        Category::create(
            [
                'name' => 'Hot Coffe',
                'slug' => 'hot-coffe'
            ]
        );

        Category::create(
            [
                'name' => 'Non Coffe',
                'slug' => 'non-coffe'
            ]
        );

        Category::create(
            [
                'name' => 'Ice Coffe',
                'slug' => 'ice-coffe'
            ]
        );

        \App\Models\Product::factory(10)->create();
    }
}
