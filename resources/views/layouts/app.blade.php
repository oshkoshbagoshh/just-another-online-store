<!doctype html>
<html lang="en">
<head>
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta name = "viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <title> @yield('title', 'JAOS') </title>
</head>

<body>


    <!--- header --->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}"> Online Store </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}"> Home </a>
                    <a class="nav-link active" href="{{ route('product.index') }}"> Products</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}"> Cart </a>
                    <a class="nav-link active" href="{{  route('home.about') }}"> About </a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"> </div>
                    @guest
                        <a class="nav-link active" href="{{ route('login') }}"> Login </a>
                        <a class="nav-link active" href="{{ route('register') }}"> Register </a>
                        @else
                        {{-- My Orders --}}
                        <a class="nav-link  active" href="{{ route('myaccount.orders') }}"> My Orders </a>
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active"
                            onclick="document.getElementById('logout').submit();"> Logout </a>
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>

        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2> @yield('subtitle', 'Just Another Online Store') </h2>
        </div>

    </header>

    <!--- header ---->

    <div class="container my-4">
        @yield('content')
    </div>



<!--- footer --->
<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>

<!----
 TODO: change the name and link to your own github account ---
        Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
            href="https://github.com/oshkoshbagoshh"> Ashkan Javadi </a>
--->


    (c) Copyright 2023 Scrooge McDuck. All Rights Reserved.
    <a class="text-reset fw-bold text-decoration-none" target="_blank"
            href="https://en.wikipedia.org/wiki/Scrooge_McDuck"> Scrooge McDuck </a>



        </small>
    </div>
</div>
<!--- footer --->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
