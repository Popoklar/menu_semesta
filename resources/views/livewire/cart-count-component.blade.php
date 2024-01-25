<!-- BEGIN CART -->
<div class="top-cart-block">
    @if (Cart::instance('cart')->count() > 0)
    <div class="top-cart-info">
        <a href="/cart" class="top-cart-info-count">{{ Cart::instance('cart')->count() }} items</a>
        <a href="javascript:void(0);" class="top-cart-info-value">Rp{{ Cart::instance('cart')->total() }}</a>
    </div>
    @endif
    <i class="fa fa-shopping-cart"></i>
</div>
<!--END CART -->