<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::with('products')->orderBy('slug', 'asc')->get();
        $products = Product::with('category')->get();
        return view('livewire.home-component', ['categories' => $categories, 'products' => $products])->layout('layouts.base');
    }
}
