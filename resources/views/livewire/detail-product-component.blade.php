<!-- BEGIN SIDEBAR & CONTENT -->
<div class="row margin-bottom-40 ">
    <!-- BEGIN CONTENT -->
    <div class="col-md-12 col-sm-12">
        <div class="product-page">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="product-main-image">
                        <img src="{{ asset('/template/theme/images') }}/{{ $product->image }}"
                            alt="{{ $product->name }}" class="img-responsive"
                            data-BigImgsrc="{{ asset('/template/theme/images') }}/{{ $product->image }}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h1>{{ $product->name }}</h1>
                    <div class="price-availability-block clearfix">
                        <div class="price">
                            <strong><span>Rp</span> {{ number_format($product->price, 0, '.', '.') }}</strong>
                        </div>
                    </div>
                    <div class="description">
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="product-page-cart">
                        <div class="product-quantity">
                            <input class="form-control input-sm" type="text" name="product-quantity" value="{{ $qty }}"
                                data-max="120" pattern="[0-9]*" wire:model="qty">
                        </div>
                        <a href="#" class="btn btn-primary"
                            wire:click.prevent="store('{{ $product->id }}','{{ $product->name }}',{{ $product->price }})"
                            wire:loading.attr="disabled"><i class="fa fa-shopping-cart"></i> Tambahkan keranjang</a>
                    </div>
                </div>

                {{-- <div class="sticker sticker-sale"></div> --}}
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END SIDEBAR & CONTENT -->