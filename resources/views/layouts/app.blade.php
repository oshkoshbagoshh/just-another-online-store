<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name = "viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <title> @yield('title', 'Online Store') </title>
</head>

<body>

    <!--- header --->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="#"> Online Store </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="#"> Home </a>
                    <a class="nav-link active" href="#"> About </a>
                </div>
            </div>

        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2> @yield('subtitle', 'A Laravel Online Store') </h2>
        </div>

    </header>

    <!--- header ---->

    <div class="container my-4">
        @yield('content')
    </div>



    <script src="https://cdn.jsdelivr.net/npn/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>


</body>

</html>
