<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('photo')->default('produk.jpg');
            $table->timestamps();
        });

        $this->insertProductData();
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }

    private function insertProductData()
    {
        DB::table('products')->insert([
            // ICE-COFFEE
            ['name' => 'Canda', 'description' => 'Rasakan kelezatan khas gula aren yang eksotis, ...', 'price' => 20000],
            ['name' => 'Tawa', 'description' => 'Tawa membawa kebahagiaan dengan sentuhan creamy yang lembut, ...', 'price' => 21000],
            ['name' => 'Aura', 'description' => 'Aura menghadirkan harmoni rasa vanilla yang lembut, ...', 'price' => 24000],
            ['name' => 'Kina', 'description' => 'Kina memikat dengan kelezatan karamel yang memikat, ...', 'price' => 23000],

            // NON-COFFEE
            ['name' => 'Matcha', 'description' => 'Matcha membawa Anda ke dunia kenikmatan dengan paduan sempurna ...', 'price' => 23000],
            ['name' => 'Red Velvet', 'description' => 'Red Velvet memukau dengan sentuhan bubuk Red Velvet yang istimewa, ...', 'price' => 22000],

            // HOT-COFFEE
            ['name' => 'Latte', 'description' => 'Latte menghadirkan keharuman espresso yang dicampur dengan susu creamy, ...', 'price' => 24000],
            ['name' => 'Americano', 'description' => 'Americano menghadirkan keindahan kopi yang sederhana namun memukau. ...', 'price' => 18000],
            ['name' => 'Vietnam Drip', 'description' => 'Vietnam Drip mempersembahkan sensasi kopi Vietnam yang kaya dan aromatik. ...', 'price' => 30000], // Set the price accordingly
            ['name' => 'V-60', 'description' => 'V-60 menghadirkan keindahan kopi pour-over dengan desain elegan. ...', 'price' => 30000],
        ]);
    }
}
