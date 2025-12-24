@extends('frontend.layout.master')

@section('title', 'Order Confirmation')

@section('content')
<div class="cart-box-main">
    <div class="container text-center">
        <div class="checkout-address">
            <div class="title-left">
                <h3>Thank you for your order!</h3>
            </div>
            <p class="mb-4">Your order has been successfully placed.</p>

            <div class="order-box mt-4">
                <div class="d-flex justify-content-center mb-2">
                    <h5 class="mb-0 mr-2">Order ID:</h5>
                    <h5 class="mb-0 text-primary font-weight-bold">{{ $order->order_id }}</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <h5 class="mb-0 mr-2">Total:</h5>
                    <h5 class="mb-0 text-primary font-weight-bold">${{ number_format($order->total_amount, 2) }}</h5>
                </div>
            </div>

            <a href="{{ url('/') }}" class="btn hvr-hover mt-4">Back to Home</a>
        </div>
    </div>
</div>
@endsection
