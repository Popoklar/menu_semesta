<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShoppingCartComponent extends Component
{
    public function render()
    {
        return view('livewire.shopping-cart-component')->layout('layouts.base');
    }
}
