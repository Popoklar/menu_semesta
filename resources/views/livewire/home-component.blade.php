<!-- BEGIN SIDEBAR & CONTENT -->
@foreach ($categories as $cat)
<div class="row margin-bottom-40 ">
    <!-- BEGIN CONTENT -->
    <div class="col-md-12 col-sm-12">
        <h2>{{ $cat->name }}</h2>
        <div class="owl-carousel owl-carousel2">
            @foreach ($products as $prod)
            @if ($prod->category_id == $cat->id)
            <div>
                <div class="product-item">
                    <div class="pi-img-wrapper">
                        <img src="{{ asset('/template/theme/assets') }}/pages/img/products/k1.jpg"
                            class="img-responsive" alt="Berry Lace Dress">
                        <div>
                            <a href="{{ asset('/template/theme/assets') }}/pages/img/products/k1.jpg"
                                class="btn btn-default fancybox-button">Zoom</a>
                            <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                        </div>
                    </div>
                    <h3><a href="shop-item.html">{{ $prod->name }}</a></h3>
                    <div class="pi-price">Rp {{ $prod->price }}</div>
                    <a href="javascript:;" class="btn btn-default add2cart"><i class="fa fa-plus text-danger"></i></a>
                    <div class="sticker sticker-new"></div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <!-- END CONTENT -->
</div>
@endforeach
<!-- END SIDEBAR & CONTENT -->