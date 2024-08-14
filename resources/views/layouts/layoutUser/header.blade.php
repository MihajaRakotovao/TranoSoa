<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border " style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="nav navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">
                <img class="logo" src="{{ asset('img/log.png') }}" style="width:70px;" class="rounded-pill" alt="">
        </a>
        <button class="navbar-toggler mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ Route('home') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ Route('logements') }}">catégories</a></li>
                @if (Session::has("user"))
                    @if (Session::get("user")->statut === "user")
                        <li class="nav-item"><a href="{{ Route('about') }}" class="nav-link "></i>A propos de nous</a></li>
                        <li class="nav-item"><a href="{{ url('/membre') }}" class="nav-link text-white">{{ Session::get("user")->name }}</a></li>
                    @else
                        <li class="nav-item"><a href="{{ url('/admin') }}" class="nav-link text-white">{{ Session::get("user")->name }}</a></li>
                    @endif
                        <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link text-white">Deconnexion</a></li>
                    @else
                    <li class="nav-item"><a  class="nav-link"href="{{ Route('signin') }}">Inscription</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ Route('login') }}">Connexion</a></li>
                @endif
            </ul>
            @if (Session::has("user"))
                        <a class="nav-link " href="{{ url('/membre') }}" >
                            <img class="img-User" src="/storage/imageUser/{{Session::get("user")->profile}}" alt="">
                        </a>
                @else
                    <a href="{{ Route('about') }}" class="btn-post " style="color: white;"><i class="fa fa-chevron-right me-3"></i>A propos de nous</a>
                @endif

        </div>
    </div>
  </nav>
{{-- <nav class="nav" > --}}






