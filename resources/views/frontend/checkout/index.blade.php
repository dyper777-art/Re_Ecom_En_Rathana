@extends('frontend.layout.master')

@section('title', 'Checkout')

@section('content')
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <!-- Billing Details -->
                <div class="col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing Details</h3>
                        </div>

                        <form action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="customer_name" class="mb-0">Full Name *</label>
                                    <input type="text" class="form-control" id="customer_name" name="customer_name"
                                        placeholder="Full Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="customer_email" class="mb-0">Email Address *</label>
                                    <input type="email" class="form-control" id="customer_email" name="customer_email"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="customer_phone" class="mb-0">Phone *</label>
                                    <input type="text" class="form-control" id="customer_phone" name="customer_phone"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="shipping_address" class="mb-0">Address *</label>
                                    <input type="text" class="form-control" id="shipping_address" name="shipping_address"
                                        placeholder="Street Address" required>
                                </div>
                            </div>
                            <a href="#" class="btn hvr-hover"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Place Order
                            </a>
                        </form>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-6 mb-3">
                    <div class="order-box">
                        <div class="title-left">
                            <h3>Your Order</h3>
                        </div>
                        <div class="rounded p-2 bg-light">
                            @php
                                $subtotal = 0;
                            @endphp
                            @foreach ($cart as $id => $item)
                                @php
                                    $itemTotal = $item['price'] * $item['quantity'];
                                    $subtotal += $itemTotal;
                                @endphp
                                <div class="media mb-2 border-bottom">
                                    <div class="media-body">
                                        <a href="#">{{ $item['name'] }}</a>
                                        <div class="small text-muted">
                                            Price: ${{ number_format($item['price'], 2) }}
                                            <span class="mx-2">|</span> Qty: {{ $item['quantity'] }}
                                            <span class="mx-2">|</span> Subtotal: ${{ number_format($itemTotal, 2) }}
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="cart[{{ $id }}][quantity]"
                                    value="{{ $item['quantity'] }}">
                            @endforeach
                        </div>

                        @php
                            $vat = $subtotal * 0.1; // 10% VAT
                            $total = $subtotal + $vat;
                        @endphp

                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold">${{ number_format($subtotal, 2) }}</div>
                        </div>
                        <div class="d-flex">
                            <h4>VAT (10%)</h4>
                            <div class="ml-auto font-weight-bold">${{ number_format($vat, 2) }}</div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Total</h5>
                            <div class="ml-auto h5">${{ number_format($total, 2) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
