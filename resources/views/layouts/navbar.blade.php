<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="#">
        <h3 class="logo-letters"><b>MyCount </b></h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('inicio') }}">INICIO
                    <span class="sr-only">(current)</span>
                </a>
            </li>


        </ul>
        <!-- Links -->
        <ul class="navbar-nav ml-auto">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    <span class="logo-letters">Mi Perfil </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="#">My account</a>
                    <a class="dropdown-item" onclick="salir()">Cerrar sesión</a>

                    <form action="{{ route('logout') }}" method="POST" id="frm-salir">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->
