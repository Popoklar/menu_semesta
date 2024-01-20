<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>
    <meta charset="utf-8">
    <title>Semesta Menu</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Semesta Menu description" name="description">
    <meta content="Semesta Menu keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Fonts START -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
    <!--- fonts for slider on the index page -->
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="{{ asset('/template/theme/assets') }}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/template/theme/assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="{{ asset('/template/theme/assets') }}/pages/css/animate.css" rel="stylesheet">
    <link href="{{ asset('/template/theme/assets') }}/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ asset('/template/theme/assets') }}/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{ asset('/template/theme/assets') }}/pages/css/components.css" rel="stylesheet">
    <link href="{{ asset('/template/theme/assets') }}/pages/css/slider.css" rel="stylesheet">
    <link href="{{ asset('/template/theme/assets') }}/pages/css/style-shop.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/template/theme/assets') }}/corporate/css/style.css" rel="stylesheet">
    <link href="{{ asset('/template/theme/assets') }}/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="{{ asset('/template/theme/assets') }}/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="{{ asset('/template/theme/assets') }}/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->

    @stack('livewire-styles')

    @livewireStyles
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">
    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" href="shop-index.html"><img
                    src="{{ asset('/template/theme/assets') }}/corporate/img/logos/logo-shop-red.png"
                    alt="Semesta Menu">
            </a>

            @if(!Request::is('checkout') && !Request::is('cart'))
            @livewire('cart-count-component')

            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
                <option value="New York" data-url="shop-detail-product.html"></option>
                <option value="Seattle" data-url="shop-detail-product.html"></option>
                <option value="Los Angeles" data-url="shop-detail-product.html"></option>
                <option value="Capcut" data-url="shop-detail-product.html"></option>
                <option value="Capres" data-url="shop-detail-product.html"></option>
                <option value="Captain" data-url="shop-detail-product.html"></option>
                <option value="Caprcorn" data-url="shop-detail-product.html"></option>
                <option value="Chicago" data-url="shop-detail-product.html"></option>
                <option value="Chili" data-url="shop-detail-product.html"></option>
                <option value="Child" data-url="shop-detail-product.html"></option>
                <option value="Chill" data-url="shop-detail-product.html"></option>
            </datalist>

            @endif

        </div>
    </div>
    <!-- Header END -->

    <div class="main">
        <div class="container">

            {{ $slot }}

        </div>
    </div>

    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-12 col-sm-12 text-center">
                    2024 © Yuriko. ALL Rights Reserved.
                </div>
                <!-- END COPYRIGHT -->
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
        <div class="product-page product-pop-up">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                    <div class="product-main-image">
                        <img src="{{ asset('/template/theme/assets') }}/pages/img/products/model7.jpg"
                            alt="Cool green dress with red bell" class="img-responsive">
                    </div>
                    <div class="product-other-images">
                        <a href="javascript:;" class="active"><img alt="Berry Lace Dress"
                                src="{{ asset('/template/theme/assets') }}/pages/img/products/model3.jpg"></a>
                        <a href="javascript:;"><img alt="Berry Lace Dress"
                                src="{{ asset('/template/theme/assets') }}/pages/img/products/model4.jpg"></a>
                        <a href="javascript:;"><img alt="Berry Lace Dress"
                                src="{{ asset('/template/theme/assets') }}/pages/img/products/model5.jpg"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                    <h2>Cool green dress with red bell</h2>
                    <div class="price-availability-block clearfix">
                        <div class="price">
                            <strong><span>$</span>47.00</strong>
                            <em>$<span>62.00</span></em>
                        </div>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed nonumy nibh sed euismod laoreet
                            dolore magna
                            aliquarm erat volutpat Nostrud duis molestie at dolore.</p>
                    </div>
                    <div class="product-page-cart">
                        <div class="product-quantity">
                            <input id="product-quantity" type="text" value="1" readonly name="product-quantity"
                                class="form-control input-sm">
                        </div>
                        <button class="btn btn-primary" type="submit">Add to cart</button>
                        <a href="shop-item.html" class="btn btn-default">More details</a>
                    </div>
                </div>

                <div class="sticker sticker-sale"></div>
            </div>
        </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/template/theme/assets') }}/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="{{ asset('/template/theme/assets') }}/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('/template/theme/assets') }}/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{{ asset('/template/theme/assets') }}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('/template/theme/assets') }}/corporate/scripts/back-to-top.js" type="text/javascript">
    </script>
    <script src="{{ asset('/template/theme/assets') }}/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('/template/theme/assets') }}/plugins/fancybox/source/jquery.fancybox.pack.js"
        type="text/javascript"></script><!-- pop up -->
    <script src="{{ asset('/template/theme/assets') }}/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript">
    </script>
    <!-- slider for products -->
    <script src='assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="{{ asset('/template/theme/assets') }}/plugins/bootstrap-touchspin/bootstrap.touchspin.js"
        type="text/javascript"></script>
    <!-- Quantity -->

    <script src="{{ asset('/template/theme/assets') }}/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="{{ asset('/template/theme/assets') }}/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
      Layout.init();
      Layout.initOWL();
      Layout.initImageZoom();
      Layout.initTouchspin();
      Layout.initTwitter();
    });
    </script>
    <script>
        document.getElementById('exampleDataList').addEventListener('input', function (event) {
      var selectedOption = document.querySelector('#datalistOptions option[value="' + this.value + '"]');
      if (selectedOption && selectedOption.dataset.url) {
        window.location.href = selectedOption.dataset.url;
      }
    });
    </script> <!-- END PAGE LEVEL JAVASCRIPTS -->

    @livewireScripts

</body>
<!-- END BODY -->

</html>