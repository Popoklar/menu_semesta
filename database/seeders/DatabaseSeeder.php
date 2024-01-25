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

        Category::create(
            [
                'name' => 'Squash',
                'slug' => 'squash'
            ]
        );

        Category::create(
            [
                'name' => 'Ice Blend',
                'slug' => 'ice-blend'
            ]
        );

        Category::create(
            [
                'name' => 'Mocktail',
                'slug' => 'mocktail'
            ]
        );

        Category::create(
            [
                'name' => 'Snack',
                'slug' => 'snack'
            ]
        );

        Category::create(
            [
                'name' => 'Main Course',
                'slug' => 'main-course'
            ]
        );
        \App\Models\Product::factory(61)->create();
    }
}
