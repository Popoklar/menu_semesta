<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Track the current index.
     *
     * @var int
     */
    protected $index = 0;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $products = [
            // ICE-COFFEE
            ['name' => 'Canda', 'description' => 'Rasakan kelezatan khas gula aren yang eksotis, ...', 'price' => 20000, 'image' => ''],
            ['name' => 'Tawa', 'description' => 'Tawa membawa kebahagiaan dengan sentuhan creamy yang lembut, ...', 'price' => 21000, 'image' => ''],
            ['name' => 'Aura', 'description' => 'Aura menghadirkan harmoni rasa vanilla yang lembut, ...', 'price' => 24000, 'image' => ''],
            ['name' => 'Kina', 'description' => 'Kina memikat dengan kelezatan karamel yang memikat, ...', 'price' => 23000, 'image' => ''],

            // NON-COFFEE
            ['name' => 'Matcha', 'description' => 'Matcha membawa Anda ke dunia kenikmatan dengan paduan sempurna ...', 'price' => 23000, 'image' => ''],
            ['name' => 'Red Velvet', 'description' => 'Red Velvet memukau dengan sentuhan bubuk Red Velvet yang istimewa, ...', 'price' => 22000, 'image' => ''],

            // HOT-COFFEE
            ['name' => 'Latte', 'description' => 'Latte menghadirkan keharuman espresso yang dicampur dengan susu creamy, ...', 'price' => 24000, 'image' => ''],
            ['name' => 'Americano', 'description' => 'Americano menghadirkan keindahan kopi yang sederhana namun memukau. ...', 'price' => 18000, 'image' => ''],
            ['name' => 'Vietnam Drip', 'description' => 'Vietnam Drip mempersembahkan sensasi kopi Vietnam yang kaya dan aromatik. ...', 'price' => 30000, 'image' => ''],
            ['name' => 'V-60', 'description' => 'V-60 menghadirkan keindahan kopi pour-over dengan desain elegan. ...', 'price' => 30000, 'image' => ''],
        ];


        $categories = Category::pluck('id')->toArray();

        if ($this->index >= count($products)) {
            $this->index = 0; // Reset index kembali ke 0
        }

        $namaProduk = $products[$this->index]['name'];
        $slug = Str::slug($namaProduk);

        // Cek apakah slug sudah ada, jika ya, tambahkan sufiks numerik
        $counter = 2;
        while (Product::where('slug', $slug)->exists()) {
            $slug = $namaProduk . '-' . $counter;
            $counter++;
        }

        return $products[$this->index++] + [
            'slug' => $slug,
            'category_id' => $this->faker->randomElement($categories)
        ];
    }
}
