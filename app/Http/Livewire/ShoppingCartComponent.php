<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class ShoppingCartComponent extends Component
{

    public function setAmountforCheckout()
    {
        $subtotal = Cart::instance('cart')->subtotal();
        $total = (Cart::instance('cart')->totalFloat());

        // dd($total);
        session()->put('checkout', [
            'subtotal' => $subtotal,
            'total' => $total,
        ]);
    }

    public function render()
    {
        $this->setAmountforCheckout();
        $subtotal = Cart::instance('cart')->subtotal();
        $total = (Cart::instance('cart')->total());
        return view('livewire.shopping-cart-component', ['total' => $total, 'subtotal' => $subtotal])->layout('layouts.base');
    }
}
