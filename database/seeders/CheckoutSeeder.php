<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CheckoutSeeder extends Seeder
{
    public function run()
    {
        // Create a checkout
        $checkout = Checkout::create([
            'user_id' => 1, // Replace with an existing user ID
            'total_amount' => 0,
        ]);

        // Attach products to the checkout
        $products = Product::all();

        foreach ($products as $product) {
            DetailCheckout::create([
                'checkout_id' => $checkout->id,
                'product_id' => $product->id,
                'quantity' => rand(1, 5),
                'subtotal' => $product->price * rand(1, 5),
            ]);

            // Update the total amount in the checkout based on the subtotal
            $checkout->total_amount += $product->price * rand(1, 5);
        }

        // Save the total amount to the checkout
        $checkout->save();
    }
}
