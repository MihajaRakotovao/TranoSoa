@extends('layouts\layoutUser.master') {{-- MI-HERITE NY MASTER --}}
@section('titre')
    Connexion
@endsection {{-- TITRE DANS HEAD --}}

@section('contenue')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark card-body mt-3 mb-3 text-white">
                <h1 class="text-center">Connexion</h1>
                    <form action="{{ Route("connexion")}}" method="POST" >
                        @csrf
                    <div class="form-group mt-3">
                        <label for="email">Adresse Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" name="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3" name="login">Se Connecter</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
