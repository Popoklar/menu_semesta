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

        // $products = [
        //     // ICE-COFFEE
        //     ['name' => 'Canda', 'description' => 'Rasakan kelezatan khas gula aren yang eksotis, ...', 'price' => 20000],
        //     ['name' => 'Tawa', 'description' => 'Tawa membawa kebahagiaan dengan sentuhan creamy yang lembut, ...', 'price' => 21000],
        //     ['name' => 'Aura', 'description' => 'Aura menghadirkan harmoni rasa vanilla yang lembut, ...', 'price' => 24000],
        //     ['name' => 'Kina', 'description' => 'Kina memikat dengan kelezatan karamel yang memikat, ...', 'price' => 23000],

        //     // NON-COFFEE
        //     ['name' => 'Matcha', 'description' => 'Matcha membawa Anda ke dunia kenikmatan dengan paduan sempurna ...', 'price' => 23000],
        //     ['name' => 'Red Velvet', 'description' => 'Red Velvet memukau dengan sentuhan bubuk Red Velvet yang istimewa, ...', 'price' => 22000],

        //     // HOT-COFFEE
        //     ['name' => 'Latte', 'description' => 'Latte menghadirkan keharuman espresso yang dicampur dengan susu creamy, ...', 'price' => 24000],
        //     ['name' => 'Americano', 'description' => 'Americano menghadirkan keindahan kopi yang sederhana namun memukau. ...', 'price' => 18000],
        //     ['name' => 'Vietnam Drip', 'description' => 'Vietnam Drip mempersembahkan sensasi kopi Vietnam yang kaya dan aromatik. ...', 'price' => 30000],
        //     ['name' => 'V-60', 'description' => 'V-60 menghadirkan keindahan kopi pour-over dengan desain elegan. ...', 'price' => 30000],
        // ];

        // foreach ($products as $product) {
        //     $product['slug'] = Str::slug($product['name']);
        //     DB::table('products')->insert($product);
        // }
    }
}
