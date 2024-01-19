<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DetailProductComponent extends Component
{
    public function render()
    {
        return view('livewire.detail-product-component')->layout('layouts.base');
    }
}
