<!doctype html>
<html lang="en">

<head>
    <title>Web TI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">Web TI</a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">Kontak</a>
                    </li>

                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search">

                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>

            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>
            hii ini rismaa
        </h1>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</body>
