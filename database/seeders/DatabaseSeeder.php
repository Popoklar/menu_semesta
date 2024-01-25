<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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

        User::create(
            [
                'name' => 'Sri',
                'email' => 'sri@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'), // 12345678
                'remember_token' => Str::random(30),
            ]
        );

        User::create(
            [
                'name' => 'Yuriko',
                'email' => 'yuriko@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('yuriko123'), // 12345678
                'remember_token' => Str::random(30),
            ]
        );

        Category::create(
            [
                'id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36',
                'name' => 'Hot Coffe',
                'slug' => 'hot-coffe'
            ]
        );

        Category::create(
            [
                'id' => '20e8bbfd-9af3-464e-8661-bb87ffb96d72',
                'name' => 'Non Coffe',
                'slug' => 'non-coffe'
            ]
        );

        Category::create(
            [
                'id' => '3f90f44c-2625-435e-b42e-0f76d50298db',
                'name' => 'Ice Coffe',
                'slug' => 'ice-coffe'
            ]
        );

        Category::create(
            [
                'id' => '44eda564-1f54-4c41-a070-57669b71d13e',
                'name' => 'Squash',
                'slug' => 'squash'
            ]
        );

        Category::create(
            [
                'id' => '632697e4-dbfb-4d59-87d8-1ac9745d7095',
                'name' => 'Ice Blend',
                'slug' => 'ice-blend'
            ]
        );

        Category::create(
            [
                'id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac',
                'name' => 'Mocktail',
                'slug' => 'mocktail'
            ]
        );

        Category::create(
            [
                'id' => 'bea9b986-3bbe-4fc2-852a-76675330cdc1',
                'name' => 'Snack',
                'slug' => 'snack'
            ]
        );

        Category::create(
            [
                'id' => '3427a534-efea-4bbc-a975-72b3c6127263',
                'name' => 'Main Course',
                'slug' => 'main-course'
            ]
        );

        Category::create(
            [
                'id' => '89b47879-add2-413a-b73d-a27007bcf644',
                'name' => 'New Product',
                'slug' => 'new-product'
            ]
        );


        \App\Models\Product::factory(61)->create();
    }
}
