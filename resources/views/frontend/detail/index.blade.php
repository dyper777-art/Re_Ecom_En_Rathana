@extends('frontend.layout.master')

@section('title', 'Product Detail')

@section('content')

    <div class="shop-detail-box-main">
        <div class="container">
            <form action="{{ route('cart.update') }}" method="POST">
                @csrf

                <!-- Hidden Product ID -->
                <input type="text" name="id" value="{{ $product->product_id }}" hidden>
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"> <img class="d-block w-100"
                                        src="{{ asset($product->image_url) }}"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="single-product-details">
                            <h2>{{ $product->name }}</h2>
                            <h5>${{ number_format($product->price, 2) }}</h5>
                            <p class="available-stock"><span> More than {{ $product->stock }} available</span></p>
                            <p>
                            </p>
                            <h4>Description:</h4>
                            <p>
                                {{ $product->description ?? 'No description available.' }}
                            </p>
                            <ul>
                                <li>
                                    <div class="form-group quantity-box">
                                        <label class="control-label">Quantity</label>
                                        <input name="quantity" class="form-control" value="0" min="0" max="20"
                                            type="number" data-sharkid="__2">
                                    </div>
                                </li>
                            </ul>

                            <div class="price-box-bar">
                                <div class="cart-and-bay-btn">
                                    <a href="#" class="btn hvr-hover"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Add to Cart
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>


@endsection
