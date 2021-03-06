<style>
    .buscador{
        margin-right: 100px;
    }


    body { background: white url('../images/mosaico.jpg');
           background-repeat: repeat; 
    }


</style>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class='banner'>
        @yield('banner')

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">GamesNow</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Plataformas/Videojuegos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e3f2fd;">

                            <a class="dropdown-item" href="/verplataformas"> Todas nuestras plataformas </a>
                            <a class="dropdown-item" href="/vervideojuegos"> Todos nuestros videojuegos </a>
                            <div class="dropdown-divider"> Sony</div>
                            <a class="dropdown-item" href="/videojuegos/1/plataformas">Playstation One</a>
                            <a class="dropdown-item" href="/videojuegos/2/plataformas">Playstation 2</a>
                            <a class="dropdown-item" href="/videojuegos/3/plataformas">Playstation 3</a>
                            <a class="dropdown-item" href="/videojuegos/4/plataformas">Playstation 4</a>
                            <a class="dropdown-item" href="/videojuegos/5/plataformas">PSP / Vita</a>
                            <div class="dropdown-divider"> Nintendo</div>
                            <a class="dropdown-item" href="/videojuegos/6/plataformas">Nintendo Switch</a>
                            <a class="dropdown-item" href="/videojuegos/7/plataformas">Nintendo 3DS</a>
                            <a class="dropdown-item" href="/videojuegos/8/plataformas">Nintendo Wii/Wii U</a>
                            <a class="dropdown-item" href="/videojuegos/9/plataformas">GameCube</a>
                            <a class="dropdown-item" href="/videojuegos/10/plataformas">GameBoy B&N/Color</a>
                            <a class="dropdown-item" href="/videojuegos/11/plataformas">GameBoy Advance/SP</a>
                            <div class="dropdown-divider"> Microsoft </div>
                            <a class="dropdown-item" href="/videojuegos/12/plataformas">Xbox</a>
                            <a class="dropdown-item" href="/videojuegos/13/plataformas">Xbox 360</a>
                            <a class="dropdown-item" href="/videojuegos/14/plataformas">Xbox ONE</a> 
                            <div class="dropdown-divider"> Otras </div>

                            <a class="dropdown-item" href="/videojuegos/15/plataformas">PC</a>

                        </div>

                    <li class="nav-item">
                        <a href="/veraccesorios" class="nav-link">Accesorios</a>
                    </li>

                    <li class="nav-item">
                        <a href='/verreviews' class="nav-link">Reviews</a>
                    </li>



                    <li class="nav-item">
                        <a href="/contactus" class="nav-link">Contacta con nosotros</a>
                    </li>

                </ul>

                <div class="buscador">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form> 
                </div>
            </div>

            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links" margin-left="200px">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>
                    |
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registro</a>
                    @endif
                    @endauth
                </div>
                @endif

            </div>

        </nav>




        <img src="{{ asset('images/banner.jpg') }}" class="img-fluid" alt="Responsive image">

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>