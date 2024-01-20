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
                'name' => 'Cappuccino',
                'slug' => 'cappuccino'
            ]
        );

        Category::create(
            [
                'name' => 'Affogato',
                'slug' => 'affogato'
            ]
        );

        Category::create(
            [
                'name' => 'Macchiato',
                'slug' => 'macchiato'
            ]
        );

        \App\Models\Product::factory(10)->create();
    }
}
