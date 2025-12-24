    <!-- ALL JS FILES -->
    <script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('frontend/assets/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('frontend/assets/js/inewsticker.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootsnav.js')}}"></script>
    <script src="{{asset('frontend/assets/js/images-loded.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('cart_empty'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Cart Empty',
                text: '{{ session('cart_empty') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
