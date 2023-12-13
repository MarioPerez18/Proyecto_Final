<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', '')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/img/mapachetec.png') }}" alt="mapache" width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{route('home.index')}}">Inicio</a>
                    <a class="nav-link active" href="{{route('inscripcion.index')}}">Eventos</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @if (Route::has('login'))
                        @auth
                            @if (auth()->user()->getRole() == 'admin')
                                <a href="{{ url('/home') }}"
                                    class="nav-link active">Panel de control</a>
                            @else
                                <form id="logout" action="{{ route('logout') }}" method="POST">
                                    <a role="button" class="nav-link active"
                                        onclick="document.getElementById('logout').submit();">Cerrar Sesión</a>
                                    @csrf
                                </form>
                            @endif
                        @else
                            <a class="nav-link active" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="nav-link active" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>

    <!-- footer -->

    <!-- footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
