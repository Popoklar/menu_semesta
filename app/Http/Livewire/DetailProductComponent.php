<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class DetailProductComponent extends Component
{
    public $slug;
    public $qty;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1;
    }

    public function store($product_id, $product_name, $product_price)
    {
        $product = Product::find($product_id);

        if ($this->qty <= 0) {
            session()->flash('error_message', 'Jumlah produk tidak valid');
            return;
        }

        // if ($this->qty > $product->jumlah_stok) {
        //     session()->flash('error_message', 'Stok produk tidak mencukupi');
        //     return;
        // }

        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Produk berhasil ditambahkan ke keranjang!');
        return redirect()->route('product.cart');
    }

    public function increaseQuantity()
    {
        $this->qty++;
    }

    public function decreaseQuantity()
    {
        if ($this->qty > 1) {
            $this->qty--;
        }
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.detail-product-component', ['product' => $product])->layout('layouts.base');
    }
}
