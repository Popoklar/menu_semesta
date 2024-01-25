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
            ['name' => 'Canda', 'description' => 'PALM SUGAR. FULL CREAM. COFFEE, ...', 'price' => 20000, 'category_id' => '3f90f44c-2625-435e-b42e-0f76d50298db', 'image' => 'canda.jpg'],
            ['name' => 'Tawa', 'description' => 'CREAMY, SWEET, COFFEE, ...', 'price' => 21000, 'category_id' => '3f90f44c-2625-435e-b42e-0f76d50298db', 'image' => 'tawa.jpg'],
            ['name' => 'Aura', 'description' => 'VANILA. CREAMY. SWEET. COFFEE, ...', 'price' => 24000, 'category_id' => '3f90f44c-2625-435e-b42e-0f76d50298db', 'image' => 'aura.jpg'],
            ['name' => 'Kina', 'description' => 'CARAMEL. CREAMY, SWEET, COFFEE, ...', 'price' => 23000, 'category_id' => '3f90f44c-2625-435e-b42e-0f76d50298db', 'image' => 'kina.jpg'],
            ['name' => 'Booster', 'description' => 'LEMON, FRESH, SODA, COFFEE, ...', 'price' => 21000, 'category_id' => '3f90f44c-2625-435e-b42e-0f76d50298db', 'image' => 'booster.jpg'],
            ['name' => 'Salted Sweet', 'description' => 'CREAMY SALTED & SMOOTH COFFEE, ...', 'price' => 20000, 'category_id' => '3f90f44c-2625-435e-b42e-0f76d50298db', 'image' => 'salted.jpg'],

            // NON-COFFEE
            ['name' => 'Matcha', 'description' => 'MATCHA. SWEET & CREAMY ...', 'price' => 23000, 'category_id' => '20e8bbfd-9af3-464e-8661-bb87ffb96d72', 'image' => 'matcha.jpg'],
            ['name' => 'Red Velvet', 'description' => 'RED VALVET, SWEET & CREAMY, ...', 'price' => 22000, 'category_id' => '20e8bbfd-9af3-464e-8661-bb87ffb96d72', 'image' => 'red-valvet.jpg'],
            ['name' => 'Choco', 'description' => 'CREAMY & CHOCO JAM ...', 'price' => 18000, 'category_id' => '20e8bbfd-9af3-464e-8661-bb87ffb96d72', 'image' => 'choco.jpg'],
            ['name' => 'Taro', 'description' => 'VANILA. CREAMY. SWEET. COFFEE, ...', 'price' => 22000, 'category_id' => '20e8bbfd-9af3-464e-8661-bb87ffb96d72', 'image' => 'taro.jpg'],
            ['name' => 'Chocolatte', 'description' => 'CHOCOLATE. SWEET & CREAMY, ...', 'price' => 22000, 'category_id' => '20e8bbfd-9af3-464e-8661-bb87ffb96d72', 'image' => 'chocolatte.jpg'],
            ['name' => 'Charcoal', 'description' => 'CHARCOAL, SWEET & CREAMY, ...', 'price' => 19000, 'category_id' => '20e8bbfd-9af3-464e-8661-bb87ffb96d72', 'image' => 'charcoal.jpg'],

            // SQUASH
            ['name' => 'Lemon Tea', 'description' => 'TEA & LEMON, ...', 'price' => 18000, 'category_id' => '44eda564-1f54-4c41-a070-57669b71d13e', 'image' => 'lemon-tea.jpg'],
            ['name' => 'Mojito', 'description' => 'MOJITO & SODA ...', 'price' => 20000, 'category_id' => '44eda564-1f54-4c41-a070-57669b71d13e', 'image' => 'mojito.jpg'],
            ['name' => 'Yamon', 'description' => 'YAKULT & LEMON ...', 'price' => 20000, 'category_id' => '44eda564-1f54-4c41-a070-57669b71d13e', 'image' => 'yamon.jpg'],
            ['name' => 'Leci Tea', 'description' => 'LECI & TEA ...', 'price' => 20000, 'category_id' => '44eda564-1f54-4c41-a070-57669b71d13e', 'image' => 'leci-tea.jpg'],
            ['name' => 'Sunrise', 'description' => 'ORANGE LEMON & SODA ...', 'price' => 21000, 'category_id' => '44eda564-1f54-4c41-a070-57669b71d13e', 'image' => 'sunrise.jpg'],
            ['name' => 'Pine', 'description' => 'SODA KIWI & SODA ...', 'price' => 22000, 'category_id' => '44eda564-1f54-4c41-a070-57669b71d13e', 'image' => 'pine.jpg'],
            ['name' => 'Lady Rose', 'description' => 'STRAWBERRY SOUR & SODA ...', 'price' => 24000, 'category_id' => '44eda564-1f54-4c41-a070-57669b71d13e', 'image' => 'lady-rose.jpg'],

            // ICE-BLEND
            ['name' => 'Caramel Swril Machiatto', 'description' => 'CARAMEL, CREAMY, SWEET, COFFEE, WHIPPED CREAM ...', 'price' => 33000, 'category_id' => '632697e4-dbfb-4d59-87d8-1ac9745d7095', 'image' => 'machiatto.jpg'],
            ['name' => 'Cookies and Cream', 'description' => 'OREO COOKIES, SWEET, CREAMY, WHIPPED CREAM ...', 'price' => 32000, 'category_id' => '632697e4-dbfb-4d59-87d8-1ac9745d7095', 'image' => 'cookies.jpg'],
            ['name' => 'Triple Mood Choco', 'description' => 'DARK CHOCOLATE, SWEET, CREAMY, WHIPPED CREAM ...', 'price' => 30000, 'category_id' => '632697e4-dbfb-4d59-87d8-1ac9745d7095', 'image' => 'triple-mood.jpg'],
            ['name' => 'Java Chip Frappucino', 'description' => 'RUM & CARAMEL SWEET. CREAMY, WHIPPED CREAM ...', 'price' => 35000, 'category_id' => '632697e4-dbfb-4d59-87d8-1ac9745d7095', 'image' => 'java-chip.jpg'],
            ['name' => 'Strawberry Pop', 'description' => 'STRAWBERRY PURE. SWEET. CREAMY, WHIPPED CREAM ...', 'price' => 30000, 'category_id' => '632697e4-dbfb-4d59-87d8-1ac9745d7095', 'image' => 'pop.jpg'],

            // HOT-COFFEE
            ['name' => 'Latte', 'description' => 'ESSPRESO & MILK, ...', 'price' => 24000, 'category_id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36', 'image' => 'latte.jpg'],
            ['name' => 'Americano', 'description' => 'ESSPRESO & WATER ...', 'price' => 18000, 'category_id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36', 'image' => 'americano.jpg'],
            ['name' => 'Vietnam Drip', 'description' => 'COFFE & CREAMY SWEET ...', 'price' => 30000, 'category_id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36', 'image' => 'vietnamdrip.jpg'],
            ['name' => 'V-60', 'description' => 'SPECIAL REQUEST COFFE ...', 'price' => 30000, 'category_id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36', 'image' => 'v-60.jpg'],
            ['name' => 'Cappucino', 'description' => 'DOUBLE SHOT ESSPRESO & MILK ...', 'price' => 23000, 'category_id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36', 'image' => 'cappucino.jpg'],
            ['name' => 'Esspreso', 'description' => 'EXTRACTION COFFE ...', 'price' => 14000, 'category_id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36', 'image' => 'esspreso.jpg'],
            ['name' => 'Tubruk', 'description' => 'SPECIAL TRADITIONAL COFFE ...', 'price' => 15000, 'category_id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36', 'image' => 'tubruk.jpg'],
            ['name' => 'Piccolo', 'description' => 'ESSPRESO BASE ...', 'price' => 18000, 'category_id' => '06a5e033-f619-4aa4-bd7a-f2b1c60bba36', 'image' => 'piccolo.jpg'],

            // MOCKTAIL 
            ['name' => 'First In Love', 'description' => 'BY REQUEST ...', 'price' => 26000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'love.jpg'],
            ['name' => 'Semesta Disco', 'description' => 'BY REQUEST ...', 'price' => 25000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'disco.jpg'],
            ['name' => 'Yellow Sunny', 'description' => 'BY REQUEST ...', 'price' => 28000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'sunny.jpg'],
            ['name' => 'People Sunset', 'description' => 'BY REQUEST ...', 'price' => 25000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'sunset.jpg'],
            ['name' => 'Sunshine', 'description' => 'BY REQUEST ...', 'price' => 25000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'sunshine.jpg'],
            ['name' => 'Tropical Bliss', 'description' => 'Campuran jeruk, nanas, dan soda', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'bliss.jpg'],
            ['name' => 'Mango Tango Sparkle', 'description' => 'Mangga segar, mint, dan sparkling water', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'sparkle.jpg'],
            ['name' => 'Berry Burst Fizz', 'description' => 'Campuran beri-berry, sirup blueberry, dan soda', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'fizz.jpg'],
            ['name' => 'Citrus Breeze Delight', 'description' => 'Campuran jeruk, lemon, dan soda', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'delight.jpg'],
            ['name' => 'Passionfruit Paradise', 'description' => 'Markisa segar, sirup passionfruit, dan soda', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'paradise.jpg'],
            ['name' => 'Melon Mint Splash', 'description' => 'Melon segar, daun mint, dan sparkling water', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'splash.jpg'],
            ['name' => 'Strawberry Kiwi Crush', 'description' => 'Stroberi segar, kiwi, dan soda', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'crush.jpg'],
            ['name' => 'Pineapple Punch Pleasure', 'description' => 'Nanas segar, sirup vanilla, dan sparkling water', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'pleasure.jpg'],
            ['name' => 'Cucumber Mint Refresher', 'description' => 'Mentimun segar, mint, dan soda', 'price' => 30000, 'category_id' => '0c01044b-3edd-4b77-b26d-0ab8bd81beac', 'image' => 'refresher.jpg'],


            // SNACK
            ['name' => 'Curos', 'description' => 'DELICIOUS ...', 'price' => 19000, 'category_id' => 'bea9b986-3bbe-4fc2-852a-76675330cdc1', 'image' => 'curos.jpg'],
            ['name' => 'French Fries', 'description' => 'DELICIOUS ...', 'price' => 17000, 'category_id' => 'bea9b986-3bbe-4fc2-852a-76675330cdc1', 'image' => 'french.jpg'],
            ['name' => 'Mix Platter', 'description' => 'DELICIOUS ...', 'price' => 26000, 'category_id' => 'bea9b986-3bbe-4fc2-852a-76675330cdc1', 'image' => 'mix.jpg'],
            ['name' => 'Pancake', 'description' => 'DELICIOUS ...', 'price' => 20000, 'category_id' => 'bea9b986-3bbe-4fc2-852a-76675330cdc1', 'image' => 'pancake.jpg'],
            ['name' => 'Spicy Wing', 'description' => 'DELICIOUS ...', 'price' => 25000, 'category_id' => 'bea9b986-3bbe-4fc2-852a-76675330cdc1', 'image' => 'wing.jpg'],
            ['name' => 'Waffle', 'description' => 'DELICIOUS ...', 'price' => 25000, 'category_id' => 'bea9b986-3bbe-4fc2-852a-76675330cdc1', 'image' => 'waffle.jpg'],

            // MAIN COURSE
            ['name' => 'Beef Henoki', 'description' => 'BEEF WRAPPED HENOKI WITH SPICY SAUCE, VEGETABLE SALAD, RICE ...', 'price' => 34000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'henoki.jpg'],
            ['name' => 'Beef Yakiniku', 'description' => 'TASTY BEEF WITH VEGETABLE, SALADERICE ...', 'price' => 27000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'yakiniku.jpg'],
            ['name' => 'Chicken Thousand', 'description' => 'CHICKEN CRISPY WITH SAUCE THOUSAND, VEGETABLE SALAD, RICE ...', 'price' => 25000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'thousand.jpg'],
            ['name' => 'Chicken Honey Sauce', 'description' => 'CHICKEN COATED WITH HONEY SAUCE, VEGETABLE SALADARICE ...', 'price' => 25000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'honey.jpg'],
            ['name' => 'Chicken Salted Egg', 'description' => 'CHICKEN CRISPY WITH SAUCE, SALTED EGG, VEGETABLE, SALAD.RICE ...', 'price' => 25000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'egg.jpg'],
            ['name' => 'Chicken Parmagiana', 'description' => 'CHICKEN MEAT WITH POTATO WEDGES, SAUCE SPICS CHEORE ...', 'price' => 30000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'parmagiana.jpg'],
            ['name' => 'Mie Ayam', 'description' => 'SPECIAL NOODLES FROM THE BEST TOUCH OF OUR SIBLING ...', 'price' => 20000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'mieayam.jpg'],
            ['name' => 'Nasi Goreng', 'description' => 'RICE, EGG, MEAT, VEGETABLES ...', 'price' => 32000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'nasigoreng.jpg'],
            ['name' => 'Nasi Telur Pedas Manis', 'description' => 'EGO COVERED SWERIAN, SPICY SAUCE, RICE ...', 'price' => 18000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'nasipd.jpg'],
            ['name' => 'Sambal Matah', 'description' => 'CHICKEN CRISPY WITH CHILI SAUCE MATAH, RICE ...', 'price' => 24000, 'category_id' => '3427a534-efea-4bbc-a975-72b3c6127263', 'image' => 'sambalmatah.jpg'],

            // Produk Baru (contoh 6 dari 50)
            ['name' => 'Summer Delight', 'description' => 'Refreshing blend of citrus and berries', 'price' => 25000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'summer-delight.jpg'],
            ['name' => 'Minty Mojito Twist', 'description' => 'Minty and zesty with a twist of lime', 'price' => 26000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'mojito-twist.jpg'],
            ['name' => 'Cocoa Bliss Fantasy', 'description' => 'Rich cocoa indulgence with a fantasy twist', 'price' => 28000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'cocoa-bliss.jpg'],
            ['name' => 'Golden Sunset', 'description' => 'Blend of tropical fruits for a golden sunset feel', 'price' => 27000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'golden-sunset.jpg'],
            ['name' => 'Crispy Chicken Delight', 'description' => 'Crispy fried chicken perfection', 'price' => 22000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'crispy-chicken.jpg'],
            ['name' => 'Mango Tango Burst', 'description' => 'Tango of fresh mango flavors bursting in your mouth', 'price' => 29000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'mango-burst.jpg'],
            ['name' => 'Midnight Magic', 'description' => 'A mysterious and enchanting blend for a magical night', 'price' => 31000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'midnight-magic.jpg'],
            ['name' => 'Forest Berry Fusion', 'description' => 'A fusion of wild berries for a taste of the forest', 'price' => 27000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'berry-fusion.jpg'],
            ['name' => 'Peachy Paradise', 'description' => 'Peachy goodness for a taste of paradise', 'price' => 28000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'peachy-paradise.jpg'],
            ['name' => 'Cranberry Crush', 'description' => 'Sweet and tart cranberry delight', 'price' => 26000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'cranberry-crush.jpg'],
            ['name' => 'Blue Lagoon Bliss', 'description' => 'A blue lagoon-inspired refreshing drink', 'price' => 28000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'blue-lagoon-bliss.jpg'],
            ['name' => 'Pineapple Passion Fusion', 'description' => 'Passionate fusion of pineapple flavors', 'price' => 27000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'pineapple-passion-fusion.jpg'],
            ['name' => 'Lavender Lemonade Sparkle', 'description' => 'Sparkling lavender-infused lemonade', 'price' => 29000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'lavender-lemonade-sparkle.jpg'],
            ['name' => 'Raspberry Ripple Delight', 'description' => 'Delightful ripple of raspberry goodness', 'price' => 25000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'raspberry-ripple-delight.jpg'],
            ['name' => 'Cherry Blossom Breeze', 'description' => 'Gentle breeze of cherry blossom sweetness', 'price' => 30000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'cherry-blossom-breeze.jpg'],
            ['name' => 'Tropical Citrus Splash', 'description' => 'Citrusy splash of tropical goodness', 'price' => 28000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'tropical-citrus-splash.jpg'],
            ['name' => 'Passionfruit Perfection', 'description' => 'Perfect blend of passionfruit flavors', 'price' => 27000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'passionfruit-perfection.jpg'],
            ['name' => 'Mango Mint Medley', 'description' => 'Mango and mint medley for a refreshing twist', 'price' => 29000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'mango-mint-medley.jpg'],
            ['name' => 'Wild Watermelon Wave', 'description' => 'Ride the wave of wild watermelon goodness', 'price' => 26000, 'category_id' => '89b47879-add2-413a-b73d-a27007bcf644', 'image' => 'wild-watermelon-wave.jpg'],
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
