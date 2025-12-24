<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('frontend/assets/images/apple-touch-icon.png')}}">

    @include('frontend.layout.style')

</head>

<body>

    <!-- Start Main Top -->
    @include('frontend.layout.header')
    <!-- End Main Top -->

    @if (request()->routeIs('home*'))
        <div class="box-add-products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="offer-box-products">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/2148493508.jpg') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else

        <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>@yield('title')</h2>
                </div>
            </div>
        </div>
    </div>

    @endif



    @yield('content')


    <!-- Start Footer  -->
    @include('frontend.layout.footer')
    <!-- End Footer  -->

    <!-- Start copyright  -->
    @include('frontend.layout.footer')
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    @include('frontend.layout.jsshop')

</body>

</html>
