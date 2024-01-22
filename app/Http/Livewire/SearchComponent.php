<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchComponent extends Component
{
    public function render()
    {
        $products = Product::with('category')->get();
        return view('livewire.search-component', ['products' => $products]);
    }
}
