<header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('frontend/assets/images/logo.png')}}" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item @if (request()->routeIs('home*')) active @endif"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item @if (request()->routeIs('cart*')) active @endif"><a class="nav-link" href="{{ route('cart.index') }}">Cart</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li>
							<a href="{{ route('backend.products.index') }}">
								<i class="fa fa-user" style="font-size: 20px"></i>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
