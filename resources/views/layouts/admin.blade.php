<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title> @yield('title', 'Admin Page - Just Another Online Store') </title>
</head>


<body>


    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">- Admin - Products</a></li>
                <li>
                    <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home
                        page</a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->

        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font"> Admin </span>
                <img class="img-profile rounded-circle" src="{{ asset('img/aj_avataaars.svg') }}">

            </nav>

            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>


    {{-- footer --}}

    <!--- footer --->
    <div class="copyright py-4 text-center text-white">
        <div class="container">

            <!----
 TODO: change the name and link to your own github account ---
        Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
            href="https://github.com/oshkoshbagoshh"> Ashkan Javadi </a>
--->

            <small>
                (c) Copyright 2023 Scrooge McDuck. All Rights Reserved.
                <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://en.wikipedia.org/wiki/Scrooge_McDuck"> Scrooge McDuck </a>


            </small>
        </div>
    </div>
    <!--- footer --->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    {{-- ==== FIN ====  --}}
    {{-- END OF BODY  --}}


</body>

</html>
