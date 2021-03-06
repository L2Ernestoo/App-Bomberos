<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><i class="bi bi-exclamation-triangle-fill"></i>
            App - FireGT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @auth
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('incidentes.index')}}"><i class="bi bi-exclamation-octagon-fill"></i> Incidentes se quema algo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('bomberos.index')}}"><i class="bi bi-person-lines-fill"></i> Bomberos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('vehiculos.index')}}"><i class="bi bi-truck"></i> Vehiculos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('estaciones.index')}}"><i class="bi bi-house-fill"></i> Estaciones</a>
                </li>
            </ul>
        </div>
        @endauth
    </div>
</nav>
