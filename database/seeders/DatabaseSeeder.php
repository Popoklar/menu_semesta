<?php

namespace Database\Seeders;

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

        // $products = [
        //     // ICE-COFFEE
        //     ['name' => 'Canda', 'description' => 'Rasakan kelezatan khas gula aren yang eksotis, ...', 'price' => 20000, 'category_id' => ],
        //     ['name' => 'Tawa', 'description' => 'Tawa membawa kebahagiaan dengan sentuhan creamy yang lembut, ...', 'price' => 21000, 'category_id' => ],
        //     ['name' => 'Aura', 'description' => 'Aura menghadirkan harmoni rasa vanilla yang lembut, ...', 'price' => 24000, 'category_id' => ],
        //     ['name' => 'Kina', 'description' => 'Kina memikat dengan kelezatan karamel yang memikat, ...', 'price' => 23000, 'category_id' => ],

        //     // NON-COFFEE
        //     ['name' => 'Matcha', 'description' => 'Matcha membawa Anda ke dunia kenikmatan dengan paduan sempurna ...', 'price' => 23000, 'category_id' => ],
        //     ['name' => 'Red Velvet', 'description' => 'Red Velvet memukau dengan sentuhan bubuk Red Velvet yang istimewa, ...', 'price' => 22000, 'category_id' => ],

        //     // HOT-COFFEE
        //     ['name' => 'Latte', 'description' => 'Latte menghadirkan keharuman espresso yang dicampur dengan susu creamy, ...', 'price' => 24000, 'category_id' => ],
        //     ['name' => 'Americano', 'description' => 'Americano menghadirkan keindahan kopi yang sederhana namun memukau. ...', 'price' => 18000, 'category_id' => ],
        //     ['name' => 'Vietnam Drip', 'description' => 'Vietnam Drip mempersembahkan sensasi kopi Vietnam yang kaya dan aromatik. ...', 'price' => 30000, 'category_id' => ],
        //     ['name' => 'V-60', 'description' => 'V-60 menghadirkan keindahan kopi pour-over dengan desain elegan. ...', 'price' => 30000, 'category_id' => ],
        // ];

        // foreach ($products as $product) {
        //     $product['slug'] = Str::slug($product['name']);
        //     DB::table('products')->insert($product);
        // }
    }
}
