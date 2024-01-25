<!-- BEGIN CONTENT -->
<div class="col-md-12 col-sm-12">
    <h1>Keranjang</h1>
    <div class="goods-page">
        @if (Cart::instance('cart')->count() > 0)
        <div class="goods-data clearfix">
            <div class="table-wrapper-responsive">
                <h2 class="text-center">Tunjukan pesanan berikut ke kasir.</h2>
                <p class="text-center"><strong>Tanggal Pesanan:</strong> {{ $tanggal }}</p>
                <hr>
                <table summary="Shopping cart">
                    <tr>
                        <th><strong>Gambar</strong></th>
                        <th><strong>Nama</strong></th>
                        <th><strong>Harga</strong></th>
                        <th class="text-center"><strong>Jumlah</strong></th>
                        <th><strong></strong></th>
                        <th><strong>Subtotal</strong></th>
                    </tr>
                    @foreach (Cart::instance('cart')->content() as $item)
                    <tr>
                        <td class="goods-page-image">
                            <a href="javascript:;"><img
                                    src="{{ asset('/template/theme/images') }}/{{ $item->model->image }}"
                                    alt="{{ $item->model->image }}"></a>
                        </td>
                        <td class="goods-page-description">
                            <h3>{{
                                $item->model->name
                                }}</h3>
                        </td>
                        <td class="goods-page-price">
                            <strong><span>Rp</span>{{ number_format($item->price, 0, '.', '.') }}</strong>
                        </td>
                        <td class="goods-page-quantity text-center">
                            <h2><strong>{{ $item->qty }}</strong></h2>
                        </td>
                        <td class="goods-page-quantity">
                            <h2><strong></strong></h2>
                        </td>
                        <td class="goods-page-total">
                            <strong><span>Rp</span>{{ number_format($item->subtotal, 0, '.', '.') }}</strong>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="bg-success">
                        <td class="goods-page-quantity text-center">
                            <h2><strong>Total</strong></h2>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="goods-page-total">
                            <strong class="price"><span>Rp</span>{{ $total }}</strong>
                        </td>
                    </tr>
                </table>
            </div>

            {{-- <div class="shopping-total">
                <ul>
                    <li class="shopping-total-price">
                        <em>Total</em>
                        <strong class="price"><span>Rp</span>{{ $total }}</strong>
                    </li>
                </ul>
            </div> --}}
        </div>
        {{-- <button class="btn btn-default" type="submit">Continue shopping <i
                class="fa fa-shopping-cart"></i></button>
        <button class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button> --}}
        {{-- <a class="btn btn-checkout title-box" href="#" wire:click.prevent="checkout">
            Checkout
        </a> --}}
        @endif
    </div>
</div>
<!-- END CONTENT -->