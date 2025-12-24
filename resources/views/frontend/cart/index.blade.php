@extends('frontend.layout.master')

@section('title', 'Shopping Cart')

@section('content')

<div class="cart-box-main">
    <div class="container">

        {{-- Display success/error messages --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Cart Table --}}
        <form action="{{ route('cart.updateAll') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $subtotal = 0; @endphp
                                @forelse($cart as $id => $item)
                                    @php $total = $item['price'] * $item['quantity']; @endphp
                                    @php $subtotal += $total; @endphp
                                    <tr>
                                        <td class="name-pr">
                                            <a href="#">{{ $item['name'] }}</a>
                                        </td>
                                        <td class="price-pr">
                                            <p>${{ $item['price'] }}</p>
                                        </td>
                                        <td class="quantity-box">
                                            <input type="number" name="quantities[{{ $id }}]" value="{{ $item['quantity'] }}"
                                                min="0" step="1" class="c-input-text qty text">
                                        </td>
                                        <td class="total-pr">
                                            <p>${{ $total }}</p>
                                        </td>
                                        <td class="remove-pr">
                                            <a href="{{ route('cart.remove', $id) }}"><i class="fas fa-times"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Your cart is empty.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Coupon & Update Cart --}}
            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>

        {{-- Order Summary --}}
        @php
            $tax = round($subtotal * 0.05, 2); // 5% tax
            $grandTotal = $subtotal + $tax;
        @endphp

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold">${{ $subtotal }}</div>
                    </div>
                    <div class="d-flex">
                        <h4>Tax(5%)</h4>
                        <div class="ml-auto font-weight-bold">${{ $tax }}</div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5">${{ $grandTotal }}</div>
                    </div>
                    <hr>
                </div>
            </div>

            {{-- Checkout Button --}}
            <div class="col-12 d-flex shopping-box">
                <a href="{{ route('checkout.index') }}" class="ml-auto btn hvr-hover">Checkout</a>
            </div>
        </div>

    </div>
</div>

@endsection
