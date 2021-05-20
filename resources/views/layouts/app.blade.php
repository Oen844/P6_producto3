<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- link a crear crusos solo para adminisstrador --}}
                <a class="navbar-brand" href="{{ url('/calendar') }}">
                    {{ config('Calendario', 'Calendario') }}
                </a>
                @auth
                    <?php if (Auth::user()->tipo != 2) { ?>

                    <a class="navbar-brand" href="{{ url('/frcourses') }}">
                        {{ config('Cursos', 'Cursos') }}
                    </a> --}}
                    <a class="navbar-brand" href="{{ url('/user') }}">
                        {{ config('Usuarios', 'Usuarios') }}
                    </a>
                    {{-- <a class="navbar-brand" href="{{ url('/asignaturas') }}">
                        {{ config('Asignaturas', 'Asignaturas') }}
                    </a> --}}
                    <a class="navbar-brand" href="{{ url('/schedules') }}">
                        {{ config('Clases', 'Clases') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/exams') }}">
                        {{ config('Examanes', 'Examenes') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/works') }}">
                        {{ config('Trabajos', 'Trabajos') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/enrollment') }}">
                        {{ config('Inscripción', 'Inscripción') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/percentage') }}">
                        {{ config('Porcentaje', 'Porcentaje') }}
                    </a>

                    <?php } ?>
                @endauth
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <a href="{{ route('mensaje') }}" class="nav-link dropdown">Enviar mensaje</a>
                            <a href="{{ route('notifications.index') }}" class="nav-link dropdown">Notificaciones
                                @if ($count = Auth::user()->unreadNotifications->count())
                                    <span class="bange"> <strong>{{ $count }}</strong> </span>
                                @endif
                            </a>



                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{-- link al perfil del usuario --}}
                                    <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">
                                        {{-- Link a editar el perfil autenticado --}}
                                        Mi perfil
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if (session()->has('flash'))


            <div class="container">

                <div class="alert alert-success">{{ session('flash') }}</div>
            </div>
        @endif
        <!-- Full Calendar -->

        <main class="py-4">
            @yield('content')
        </main>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/locales-all.min.js"></script>
        <script src="{{ asset('js/calendar.js') }}"></script>
    </div>
</body>

</html>
