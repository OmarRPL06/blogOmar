<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog deportivo</title>
        <!-- estilos css -->
        <link rel="stylesheet" href="/css/loader.css">
        <link rel="stylesheet" href="/css/style.css">
        <!-- google font link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- estilos.js -->
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/90917a6746.js" crossorigin="anonymous"></script>
    </head>
    <div id="fondo-loader">
        <div class="loader"></div>
    </div>
    <body class="light-theme">
        <div class="shadow-nav">
            <header>
                <div class="container">
                    <nav class="navbar">
                        <a href="{{ url('/') }}">
                            <img src="/images/logo.jpg" alt="Devblog's logo" width="150" class="logo-light">
                        </a>
                        <div class="flex-wrapper">
                            <ul class="desktop-nav">
                                <li><a href="#" class="nav-link">Nosotros</a></li>
                                <li><a href="{{ url('/') }}" class="nav-link">Posts</a></li>
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                                @else
                                    <ul id="menu">
                                        <li><button><img src="/images/profile.png" alt="Mi perfil" width="40px"></button>
                                            <ul>
                                                <li><a href="{{ url("/logout") }}" class="nav-link">LogOut</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
        @yield('contenido')
    </body>
</html>
<script src="/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript">

    $(document).ready(function() {

        setTimeout(desvanecerLoader, 1000);
        setTimeout(eliminarLoader, 1500);

    });

    function desvanecerLoader() {

        document.getElementById("fondo-loader").classList.add("desaparece");

    };

    function eliminarLoader() {

        $('#fondo-loader').remove();

    }

</script>
